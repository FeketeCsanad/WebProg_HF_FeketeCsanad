<div>
    <form method="post" action="" name="login">
        <label>username: </label>
<input type="text" name="username" required placeholder="username">
        <br>
        <label>password:</label>
        <input type="text" name="password" required>
        <br>

        <label>Elfogadom</label>
        <input type="checkbox" name="checkbox" >
        <br>
        <input type="submit" name="gomb">login</input>
        <br>
    </form>

</div>

<?php
require ("connect.php");

if(isset($_POST['checkbox']) and isset($_POST['gomb'])){
    $username=$_REQUEST['username'];
$username=mysqli_real_escape_string($mydb->getConnection(),$username);
$password=$_REQUEST['password'];
$password=mysqli_real_escape_string($mydb->getConnection(),$password);

$row=$mydb->select($username,$password);

if($row==1){
    $_SESSION['username']=$username;
    header("Location: index.php");
}
else{
    echo "<br> nem jo a nev/jelszo 
    <br>
    katt ide a <a href='Register.php'> regisztralashoz</a>
    ";

}
}
else{
    echo "<br> fogadd el";
}
echo "<p> Regisztralj <a href='Register.php'>itt</a>";

