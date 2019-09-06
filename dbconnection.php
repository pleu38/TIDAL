<?php

//Connexion à la BDD

$user = 'test';
$pass = 'tp';

$dbh = new PDO("mysql:host=localhost;dbname=acupuncture",$user,$pass);

//Requete avec champ différent
$sth = $dbh->prepare("SELECT * FROM Table WHERE champ = :valeur");
$sth->bindValue(":valeur",$str,PDO::PARAM_STR);

$sth = $dbh->prepare("SELECT * FROM patho");
 
$res = $sth->execute();

$data = $sth->fetchAll();

var_dump($data);
