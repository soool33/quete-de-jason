<!DOCTYPE html>
<html>
    <head>
        <title>Tous tous pour jason</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" /> 
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
<body>

<?php include "function.php";
    if(isset($_POST['sub'])){
        newContact($bdd);
    }
?>

<div class="text-center">
    <img src="jason1.jpeg" alt="">
</div>
<div class="container">  
    <form id="contact" action="index.php" method="post" > 
        <h3>Qui pour la quete de jason</h3>
        <h4>Dites un nom, et passez votre chemin</h4>
        <fieldset>
            <input name="name" placeholder="nom du moussaillon" type="text" tabindex="1" required>
        </fieldset>
       
        <fieldset>
            <button type="submit" id="contact-submit" name="sub" >Qu'il en soit ainsi</button>
        </fieldset>
    </form> 
</div>


<div class='row'>
    <?php
$idd =$_GET['id'];
	
    $reponse=infoUser($bdd,$idd);
    //var_dump($reponse);
    while ($donnees=$reponse->fetch()) {
        
        
        echo "<div class='card col-lg-4 text-center'><h4>" .$donnees['name']."<h4/></div>";
        
    } ?>
</div>  
