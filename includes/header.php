 <?php

require("connect.php");

?> 


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="PCWOrld est l'une des références de la vente d'ordinateurs, de composants PC et de périphériques en France. Trouvez votre matériel au meilleur prix, avec des promotions et des soldes régulières, une livraison rapide et une interface agréable ! - Page Index">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/app.min.css" type="text/css">
    <title>PCWorld - Site référence pour l'achat de tours, composants et périphériques pour PC - Index</title>
</head>

<body>

    <div class="container-fluid position-relative">
        <header class="container-fluid row col-12" id="header">
            <div class="col-6 col-sm-2">
                <a href="index.html"><img class="img-fluid" id="logo" src="image/logos_icons/logo_pcworld.png"
                        alt="Logo PCWorld" title="Logo PCWorld"></a>
            </div>
            <div id="searchBar" class="col-12 col-sm-8 order-last order-sm-0 align-self-center mb-2 mt-2">
                <div class="ui-widget input-group md-form form-sm form-2 pl-0">

                    <input id="tags" class="form-control my-0 py-1" type="text" placeholder="Chercher un article"
                        aria-label="Search">
                    <div class="input-group-append">
                        <a href="product.html" class="input-group-text red lighten-3" id="basic-text1">
                            <i class="fas fa-search text-grey" aria-hidden="true">
                            </i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-2 col-sm-1 align-self-center text-center mb-2 mt-2 pl-0 pr-0">
                <a href="customer-infos.html"><i class="fas fa-user white-icon"></i></a>
            </div>
            <div class="col-2 col-sm-1 align-self-center text-center mb-2 mt-2 pl-0 pr-0">
                <a href="cart.html"><i class="fas fa-shopping-basket white-icon"></i></a>
            </div>
            <div class="col-2 col-sm-1 align-self-center text-center search-phone mb-2 mt-2 pl-0 pr-0">
                <i class="fas fa-search white-icon"></i>
            </div>
            <div class="col-12 text-center">
                <h1 class="description-accueil">Achat en ligne d'ordinateurs, de composants et de périphériques PC</h1>
            </div>
        </header>
