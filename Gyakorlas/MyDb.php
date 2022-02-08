<?php

class MyDb
{
public $connection;
    public function __construct($host,$user,$password,$datebase)
    {
        $this->connection=new mysqli($host,$user,$password,$datebase);
    }

    public function insert($email,$username,$password){
if(!$this->connection->error){
$sql=mysqli_query($this->connection,"INSERT INTO `users` (`email`,`username`,`password`) VALUES ('$email','$username','".md5($password)."');");
return $sql;
}
    }

    public function select($username,$password)
    {
$sql=mysqli_query($this->connection,"SELECT username FROM `users` WHERE `username`='$username' AND password='" . md5($password) . "' LIMIT 1;");
return $sql;

    }

    public function update($username,$Nusername){
        $sql=mysqli_query($this->connection,"UPDATE `users` SET username='$Nusername' WHERE username='$username'");
    }

    public function listaz(){
$sql=mysqli_query($this->connection,"SELECT email,username FROM `users` ");
    }

    public function delete($username){
        $sql=mysqli_query($this->connection,"DELETE FROM `users` WHERE `username`='$username' ");
    }

    public function getConnection(){
       return $this->connection;
    }
}


