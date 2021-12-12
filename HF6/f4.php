<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        if(!isset($_SESSION["szam"])) {
            $_SESSION["szam"] = rand(1,10);
        }
        $szam = $_SESSION["szam"];
        echo "az eltarolt szam: ".$szam;
        if (isset($_POST['elkuldott'])) {
            //echo $_POST['elkuldott'];
            if ($_POST['talalgatas'] > $szam) {
                echo "<h3>A szám kisebb!</h3>";
                echo "<br>A szám, amire gondoltam $szam, nem nyert,
		   játsszon újra!<hr>";
            } else if ($_POST['talalgatas'] < $szam) {
                echo "<h3>A szám nagyobb!</h3>";
                echo "<br>A szám, amire gondoltam: $szam, nem nyert,
		   játsszon újra!<hr>";
            } else {
                echo "<br>A szám, amire gondoltam:
		 $szam, Ön nyert! Játsszon újra!<hr>";
                session_destroy();
            }
        }
        ?>
        <form method="POST" action="f4.php">
            <input type="hidden" name="elkuldott" value="<?php echo $szam; ?>">
            Melyik számra gondoltam 1 és 10 között?
            <input name="talalgatas" type="text">
            <br>
            <br>
            <input type="submit" value="Elküld">
        </form>
    </body>
</html>
