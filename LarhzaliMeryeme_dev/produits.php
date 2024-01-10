<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="produits.css">
    <link rel="icon" href="images\LOGO3.png" type="image/x-icon">
    
</head>
<body class="">
<?php include('header.php'); ?>
    <div class="container">
        <header>
            <h1>Votre panier d'achat</h1>
            <div class="shopping">
                <img src="shopping.svg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Fiche produit</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Fermer</div>
        </div>
    </div>
    

    <script src="produits.js"></script>
</body>
</html>