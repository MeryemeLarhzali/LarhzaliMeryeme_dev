<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez_nous</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="icon" href="images\LOGO3.png" type="image/x-icon">
    
</head>
<body>
    
<?php include('header.php'); ?>
    <div class="container">
        <form action="contact.php" method="POST">
             <h1>Contactez_nous</h1>
             <input type="text" id="firstName" placeholder="FirstName" name ="prenom" required >
             <input type="text" id="lastName" placeholder="LastName" name="nom" required>
             <input type="email" id="email" placeholder="Email" name="email" required>
             <input type="text" id="mobile" placeholder="Mobile" name="mobile" required>
             <textarea  id="message" placeholder="message" name="message" required></textarea>
             
             <input type="submit" value="Envoyer" id="button">
        </form>
    </div>
    <?php 
    include('fonction.php');
    if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['email'])and isset($_POST['mobile']))
	{
		if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['email'])and !empty($_POST['mobile']))
		{
		connexions();
		
				$sql2="insert into contact(prenom, nom, email,mobile,message) values('".$_POST['prenom']."','".$_POST['nom']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['message']."')";
				
                if ($bdd->exec($sql2)) {
                    echo '  effectué avec succés  ';} 
                else {
                    echo "Error: " . $bdd->error;
                }
                
			
		}
		else
		echo "Attention !! Remplir tous les champs avec des valeur non nulles"; 
    }
    ?>
</body>
</html>