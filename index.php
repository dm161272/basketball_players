<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
require "Player.class.php";

$posArray = array("pos1", "pos2", "pos3", "pos4", "pos5", "pos6");
echo "<br  />**************<br  />";
var_dump($posArray);
echo "<br  />**************<br  />";
for($i=22; $i<=77; $i = $i+11) {
$age = rand(20, 22);
$height = rand(1990, 2099);

$player = new Player($i, $age, $height, $i, $posArray[rand(0, 5)]);
$pl[] = $player;
echo "<br  />%%%%%%<br  />";
var_dump($pl[Player::$counter]);
echo "<br  />%%%%%%<br  />";

}

echo "<br  />----------*------------<br  />";

foreach($pl as $p => $j){
echo($p);
echo "<br  />***<br  />";
var_dump($j);
echo "<br  />***<br  />";
}
echo "<br  />----------*------------<br  />";



foreach($pl as $p){


if($p->getHeight() > 2000){
echo "name: " . $p->getName() . " height: " . $p->getHeight() . " pos: "  . $p->getPos() . "<br>";



}

}



echo "<br  />----------------------<br  />";



foreach($pl as $p){

    if($p->getAge() <= 21){
    echo "name: " . $p->getName() . " age: " . $p->getAge() . " pos: " . $p->getPos() . "<br>";
    
    }
    
    }






?>




</body>
</html>