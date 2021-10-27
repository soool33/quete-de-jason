<?php  require 'connexion.php'; 

function newContact($bdd) 
{
	$query=$bdd->prepare('INSERT INTO users(name) VALUES (:name)');
	$query->execute([
		'name'=>$_POST['name']
	]);
    header("location:index.php");    
}

function infoUser($bdd,$id) {
    $reponse=$bdd->query('SELECT * FROM `users`');
    return $reponse;
}
