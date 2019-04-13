<?php
include "config.php";
$base=connect();

$desc=$_GET['desc'];
$date=$_GET['date'];



 


//$mdpc= md5($mdp);


$req="INSERT INTO todo (id,descreption,datefin,id_user,datedeb) VALUES (null,'$desc','$date',1,'$date')" ;
//exe insert,update,delete 
// type de retour exec int| bool
//traje3 int edha el requet saret bel s7i7int fih nbr mte les lignes eli insirt'hom 
//traje3 boolean fiha la valeur false ena cas de echeque 
$resp = $base->exec($req);
if ($resp == 1) {
    echo"todo ajouter";

   

     
  
    } 
else {
     echo "verifier la requet";


     
}

?>