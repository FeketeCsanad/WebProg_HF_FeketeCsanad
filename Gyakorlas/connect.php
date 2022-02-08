<?php
include "MyDb.php";
$mydb = new MyDb("localhost","root","","logdb");

if($mydb->connection->error){
   echo "hiba a csatlakozasban";
}
else{
   echo "csatlakozott";
}