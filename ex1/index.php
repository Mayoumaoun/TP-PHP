<?php
include("Etudiant.php");
$aymen = new Etudiant('Aymen',11,13,18,7,10,13,2,5,1);
$skander=new Etudiant('Skander', 15,9,8,16);
$aymen->affichage();
$skander->affichage();

?>