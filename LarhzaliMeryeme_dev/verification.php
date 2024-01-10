<?php
$authentification = false;

if(isset($_POST['mail']) && isset($_POST['passw'])) {
    connexions();
    $reponse = $bdd->query('SELECT * FROM utilisateurs');
    
    while($donnees = $reponse->fetch()) {
        $log = $donnees['Email'];
        $pass = $donnees['pass'];
        
        if($_POST['mail'] == $log && $_POST['passw'] == $pass) {
            $authentification = true;
            header("location: index.php");
            exit;
        }
    }

    // Si aucune correspondance n'est trouvée dans la boucle
    if(!$authentification) {
       echo '<div class="error-message"><b>La combinaison email/mot de passe est incorrecte.</b></div>';
    }
}
?>