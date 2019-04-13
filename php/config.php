<?php
function connect(){
    $_SERVER="localhost";
    $base="formalab";
    $username="root" ;
    $pass="";
    try{
    //code à excuter
    $con= new  PDO("mysql:host=$_SERVER;dbname=$base",$username,$pass) ;
    
    return $con ;

    }
    catch(PDOException $e){
        ////traitment en cas d'exception
        die("errrrrrrrrrerur : ".$e.getMessage);
    }

}

?>