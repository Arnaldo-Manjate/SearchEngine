<?php
$obj = new Mysqli;
$obj->connect('localhost','root','','crud3');

if(!$obj){
    echo "No Connection";
}


?>