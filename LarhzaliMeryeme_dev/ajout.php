<?php
connexions();
	if(isset($_POST['User']) and isset($_POST['Email']) and isset($_POST['pass']))
	{
		if(!empty($_POST['User']) and !empty($_POST['Email']) and !empty($_POST['pass']))
		{
		$sql1="select * from utilisateurs where Email='".$_POST['Email']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into utilisateurs(User, Email, pass) values('".$_POST['User']."','".$_POST['Email']."','".$_POST['pass']."')";
				$bdd->exec($sql2);
				//deconnexion();
                echo '<div class="error-message"><b>Votre compte est créer avec succée</div></b>';
                //header("Location: index.php");
			}
			else
			echo '<div class="error-message"><b>ce compte existe déja !!!</div></b>';
		}
		else
		echo '<div class="error-message"><b>Attention !! Remplir tous les champs avec des valeur non nulles</div></b>'; 
	} 
?>