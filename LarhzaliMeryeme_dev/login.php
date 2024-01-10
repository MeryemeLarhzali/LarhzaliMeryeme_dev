<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images\LOGO3.png" type="image/x-icon">
</head>
<body>
     
   <?php include('header.php'); ?>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Connexion</h2>
        <form action="login.php" method="POST">
             <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="mail" required>
                <label>Email</label>
             </div>
             <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="passw" required>
                <label>Password</label>
             </div>
             <button type="submit" class="btn">connexion</button>
             <div class="login-register">
                <p>
                    Vous n'avez pas de compte<a href="#" class="register-link"> Inscription
                    </a>
                </p>
             </div>
        </form>
        </div>

        <div class="form-box register">
                <h2>Inscription</h2>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="User" required>
                    <label>Username</label>
                 </div>
                 <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="Email" required>
                    <label>Email</label>
                 </div>
                 <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="pass" required>
                    <label>Password</label>
                 </div>
                 <button type="submit" class="btn">Enregister</button>
                 <div class="login-register">
                    <p>
                        Vous avez déjà un compte ?  <a href="#" class="login-link"> Connexion
                        </a>
                    </p>
                 </div>
            </form>
            </div>
    </div>
    
    <?php 
     include('fonction.php');
     include('ajout.php');
     include('verification.php');
     
    ?>
   
    <script src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>