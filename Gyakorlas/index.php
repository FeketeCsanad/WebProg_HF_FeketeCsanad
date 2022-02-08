

<?php
include "connect.php";
echo "<br> szia <br>";
$conn=mysqli_connect("localhost","root","","logdb");
$row=$mydb->listaz();

$sql = "SELECT email, username FROM users ";
$result = $conn->query($sql);

if($result){
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table>
    <tbody>
<th>Email: </th>
<th>Nev</th>
<th>Delete</th>

</tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td> <button type='submit' name='delete'>delete</button> </td>";
        echo "</tr>";

    }

    if(isset($_SESSION)){

    }
    echo "</table>";
} else {
    echo "0 results";
}
    }
else{
    echo "nem  megy";
}
