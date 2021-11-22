<html>
<head>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">

</head>
<body>

<?php
'<p>pl</p>';

'<h1>1. feladat</h1>';

$data =array([5,'5','05',12.3,'16.7','five',0XDECAFBAD,'10e200']);

foreach ($data as $tipus){
    echo gettype($tipus),'<br>';
}

'<h1>2. feladat</h1>';
$orszagok=array("Magyarorszag"=>"Budapest","Romania"=>"Bukarest","Belgium"=>"Brussels","Austria"=>"Becs","Poland"=>"Warsaw");

foreach ($orszagok as $kulcs=>$ertek){
    print $kulcs." fovarosa: ".$ertek."<br>";
}


'<h1>3. feladat </h1>';
$napok = array(
        "HU: "=>array("H","K","Sz","Cs","P","Sz","V"),
        "En: "=>array("M","Tu","W","Th","F","Sa","Su"),
        "De: "=>array("Mo","Di","Mi","Do","F","Sa","So"),
);
foreach ($napok as $kulcs=>$ertek){
    echo $kulcs." ";
    foreach ($ertek as $ertek2){
        echo  $ertek2.",";
    }
    echo"<br>";
}

'<h1> 4. feladat </h1>';

$szinek =array('A'=>'Kek','B'=>'Zold','C'=>'Piros');

function Kisbetu($array)
{
    foreach ($array as $value) {
        $value = strtolower($value);
        echo $value . " ";
    }
    echo "<br>";
}


function Nagybetu($array){
    foreach ($array as $value){
        $value=strtoupper($value);
        echo $value." ";
    }
    echo "<br>";
}


Kisbetu($szinek);
Nagybetu($szinek);
?>
<body>
</html>