<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>1. Feladat </h1>
        <?php
        echo "Ma: ".date("l")." van <br>";
        setlocale(LC_ALL,'hungarian');
echo "Ma: ".strftime("%Y %B %d %A", time())." van";
        ?>
        
        <h1>2. Feladat</h1>
        <?php
$szam1 = $_POST['szam1'];
$szam2 = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($szam1) && is_numeric($szam2)) {
    switch ($operator) {
        case "Add":
           $result = $szam1 + $szam2;
            break;
        case "Subtract":
           $result = $szam1 - $szam2;
            break;
        case "Multiply":
            $result = $szam1 * $szam2;
            break;
        case "Divide":
            $result = $szam1 / $szam2;
    }
}

?>


    <div id="page-wrap">
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="szam1" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>Elso</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Masodik szam</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Eredmeny</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
        
        
        <h1>3. Feladat</h1>
        <?php  
	$kezdoertek  = 1;
	$veg = 10;
?>

	<table border="1">
	<?php
		print("<tr>");
		print("<th></th>");
		for($count = $kezdoertek; $count <= $veg; $count++) 
		print("<th>".$count."</th>");
		print("</tr>");
		
		for($count = $kezdoertek; $count <= $veg; $count++) 
		{
		  print("<tr><th>".$count."</th>");
		  for($count2 = $kezdoertek; $count2 <= $veg; $count2++) 
		  {
			$eredmeny = $count / $count2; 
			printf("<td>%.2f</td>", $eredmeny);
		  }
		  print("</tr> \n");
		}	
	?>
	</table>
        
        <h1>4. Feladat</h1>
         <table width="270px" border="1px">
      <?php
      for($sor=0;$sor<8;$sor++)
	  {
          echo "<tr>";
          for($oszlop=1;$oszlop<=8;$oszlop++)
		  {
          $tabla=$sor+$oszlop;
          if($tabla%2!=0)
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          }
            }
            echo "</tr>";
        }
        ?>

  </table>
        <h1>5. Feladat</h1>
                     <?php
                     function Spongcase (String $szoveg) {
                         for($i=0;$i<strlen($szoveg);$i++)
                         {
                             if($i%2==0){
                                 $szoveg[$i]=strtoupper($szoveg[$i]);
                                 
                             }
                            
                         }
                          echo $szoveg;
                     }
                     
                     Spongcase("Pelda");
                     ?>
    </body>
</html>
