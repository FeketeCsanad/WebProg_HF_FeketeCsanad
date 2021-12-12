
<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What is your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
<option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
</form>

<?php

$valid_formats=array("application/pdf");

if(isset($_POST['submit'])){
    if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email'])) {
        echo "Mindegyik mezot kikell tolteni!";
    }
    else{
        echo "First name: ".$_POST['firstName']."<br>";
        echo "Last name: ".$_POST['lastName']."<br>";
        echo "Email: ".$_POST['email']."<br>";
    }

    if(isset($_POST['attend'])){
        echo "attend: ";
        foreach ($_POST['attend'] as $theAttend) {
            echo $theAttend . " ";
        }
    }

    else{
        echo "egy attendet kotelezo megadni!";
    }



    echo "<br>";


    if($_FILES['abstract']['size'] < 1024 * 1024 * 3 && in_array($_FILES['abstract']['type'], $valid_formats)){
            echo "sikeres file feltoltes";
        }
    else{
        echo "nem jo a file meret vagy a tipus";
    }


    if(!isset($_POST['terms'])){
echo "nem fogattad el a felteteleket!";
    }
    else{
        echo "elfogattad a felteteleket";
    }
}





