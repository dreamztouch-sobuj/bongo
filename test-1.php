<?php
$a = array(
    "key1" => 1,
    "key2" => array(
        "key3" => 1,
        "key4" => array(
            "key5" => 4
        )
    )
);


function printDepth($data, $level=1){
    foreach ($data as $key => $value){
        if(is_array($value)){
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