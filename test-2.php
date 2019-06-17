<?php
class Person{
    public function __construct($first_name, $last_name, $father)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->father = $father;
    }
}

$person_a = new Person("User", "1", NULL);
$person_b = new Person("User", "2", $person_a);

$a = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4,
            "User" => $person_b
        )
    )
);

function printDepth($data, $level=1){
    foreach ($data as $key => $value){
        if(is_array($value)){
            echo $key." ".$level."<br>";
            printDepth($value, $level+1);
        }
        else if(is_object($value)){
            echo $key." ".$level."<br>";
            printDepth($value, $level+1);
        }
        else{
            echo $key." ".$level."<br>";
        }
    }
}

printDepth($a);
?>