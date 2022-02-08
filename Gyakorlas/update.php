<form method="post" action="" name="update">
    <label> Username: </label>
<input type="text" name="username" required>
<br>
    <label> New username: </label>
    <input type="text" name="Nusername" required>

    <input type="submit" name="submit" value="OK">
</form>

<?php
require ("connect.php");

if(isset($_POST['Nusername'])) {
    $username = $_REQUEST['username'];
    $username = mysqli_real_escape_string($mydb->getConnection(), $username);
    $Nusername = $_REQUEST['Nusername'];
    $Nusername = mysqli_real_escape_string($mydb->getConnection(), $Nusername);

    $row = $mydb->update($username,$Nusername);
    if (!$row == 1) {
        echo "sikeres";
    } else {
        echo "siekertelen";
    }
}

else{
    echo  "<br> gyere updatelj <br>";
}
