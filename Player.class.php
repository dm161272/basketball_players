<?php /*basket player

name

age
height weight 

position ' point guard, sooting giuard, small forward, power forward, center'
6 player


name  & height > 2m
name & age <= 21

*/

class Player {

    private $name;
    private $age;
    private $height;
    private $weight;
    private $pos;
    public static $counter = -1;
    

    function __construct ($name, $age, $height, $weight, $pos){

        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->pos = $pos;

        self::$counter++;
     
    }


function getName(){

    return $this->name;
}
    

function getHeight(){

    return $this->height;
}

function getAge(){

    return $this->age;
}
    

function getPos(){

    return $this->pos;
}
    
}