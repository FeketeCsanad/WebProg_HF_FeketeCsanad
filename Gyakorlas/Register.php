<div>
    <form  method="post" action="">

<label>Email: </label>
        <input name="email" type="text" required>
        <br>
<label>username: </label>
        <input type="text" name="username" required>
        <br>
        <label>passwrod: </label>
        <input type="text" name="password" required>
<br>
        <input type="submit" name="submit" value="reg">
    </form>


</div>




<?php
require ('connect.php');

if(isset($_REQUEST ['username'])){
    $email=$_REQUEST['email'];
    $email=mysqli_real_escape_string($mydb->getConnection(),$email);

    $username=$_REQUEST['username'];
    $username=mysqli_real_escape_string($mydb->getConnection(),$username);

    $password=$_REQUEST['password'];
    $password=mysqli_real_escape_string($mydb->getConnection(),$password);

    $row=$mydb->insert($email,$username,$password);

    if($row){
        echo "sikerult
<br>
        <br/>Gyere login <a href='login.php'>itt</a>
        ";

    }
    else {
        echo "nem sikerult";
    }
}

