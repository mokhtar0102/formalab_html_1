<?php
include "config.php";
$base=connect();

$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$tel=$_GET['tel'];
$sex=$_GET['sex'];
$email=$_GET['email'] ;
$date=$_GET['date'];
$nationalite=$_GET['nationalite'] ;
$interet=$_GET['interet'] ;
$mp=$_GET['mp'] ;

 


//$mdpc= md5($mdp);

$req="INSERT INTO utilisateur (id,nom,pre,tel,sex,email,date,nationalite,interet,mdp) VALUES (null,'$nom','$prenom','$tel','$sex','$email','$date','$nationalite','$interet','$mp')" ;
//exe insert,update,delete 
// type de retour exec int| bool
//traje3 int edha el requet saret bel s7i7int fih nbr mte les lignes eli insirt'hom 
//traje3 boolean fiha la valeur false ena cas de echeque 
$resp = $base->exec($req);
if ($resp == 1) {
    echo"donner inserer w jawhom behyyy ";

    header('location:../html/acceuil.html');

   

     
  
    } 
else {
     echo "bara thabet fel requet";
     header('location:../html/acceuil.html');


     
}

?>