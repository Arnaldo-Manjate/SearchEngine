<?php
$obj = new Mysqli;
$obj->connect('localhost','root','','crud3');

if(!$obj){
    echo "No Connection";
}

/* 
* change this to a try catch and try to display the error on the site in a good 
* way so that when a person doesn't know whats going it will be easy for them to read it
*/


?>