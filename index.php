<?php
include('./includes/header.php');
?>




<section id="main">
            <div id="menu-sm">
                <div class="container-fluid">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu-btn pl-0 pr-0">
                            <div class="row ml-0 mr-0 pl-0 pr-0 justify-content-between position-static">
                                <button type="button" id="mega-btn1"
                                    class="btn btn-primary shadow-sm col-4 ml-0 mr-0 pl-0 pr-0">PC &
                                    Ordinateurs</button>
                                <button type="button" id="mega-btn2"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Composant
                                    PC</button>
                                <button type="button" id="mega-btn3"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Périphérique
                                    PC</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mega-menu1" class="container-fluid position-absolute">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu">
                            <div class="row ">
                                <div class="col-6 align-self-center ">
                                    <!-- <div class="row"> -->
                                        <ul class="mega-menu-ul align-middle pl-3">
                                            <li><a id="categ1" href="category.html">Ordinateur / PC Fixe</a></li>
                                            <li><a id="categ2" href="category.html">Ordinateur portable</a></li>
                                            <li><a id="categ3" href="category.html">Tablette tactile</a></li>
                                            <li><a id="categ4" href="category.html">OS & Logiciels</a></li>
                                        </ul>
                                    <!-- </div> -->
                                </div>
                                <div class="col-6 text-center">
                                    <img class="img-fluid menu-img" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mega-menu2" class="container-fluid position-absolute">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu">
                            <div class="row ">
                                <div class="col-6 align-self-center ">
                                    <div class="row">
                                        <ul class="mega-menu-ul align-middle pl-3">
                                            <li><a id="categ5" href="category.html">Cartes graphiques</a></li>
                                            <li><a id="categ6" href="category.html">Processeur</a></li>
                                            <li><a id="categ7" href="category.html">Carte Mère</a></li>
                                            <li><a id="categ8" href="category.html">Mémoire / Stockage</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <img class="img-fluid menu-img" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="mega-menu3" class="container-fluid position-absolute">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class="col-lg-8 offset-lg-2 bg-menu">
                            <div class="row ">
                                <div class="col-6 align-self-center ">
                                    <div class="row">
                                        <ul class="mega-menu-ul align-middle pl-3">
                                            <li><a id="categ9" href="category.html">Ecrans ordinateur</a></li>
                                            <li><a id="categ10" href="category.html">Claviers & souris</a></li>
                                            <li><a id="categ11" href="category.html">Casque / Micro / Enceintes</a></li>
                                            <li><a id="categ12" href="category.html">Manettes</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    <img class="img-fluid menu-img" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- NAVBAR PHONE -->
            <nav id="menu-hamburger" class="navbar navbar-expand-lg navbar-light bg-green">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PC & Ordinateurs
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="category.html">Ordinateur / PC Fixe</a>
                                <a class="dropdown-item" href="category.html">Ordinateur portable</a>
                                <a class="dropdown-item" href="category.html">Tablette tactile</a>
                                <a class="dropdown-item" href="category.html">OS & Logiciels</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Composant PC
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="category.html">Cartes graphiques</a>
                                <a class="dropdown-item" href="category.html">Processeur</a>
                                <a class="dropdown-item" href="category.html">Carte Mère</a>
                                <a class="dropdown-item" href="category.html">Mémoire & Stockage</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Périphérique PC
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="category.html">Ecrans ordinateur</a>
                                <a class="dropdown-item" href="category.html">Claviers & souris</a>
                                <a class="dropdown-item" href="category.html">Casque / Micro / Enceintes</a>
                                <a class="dropdown-item" href="category.html">Manettes</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid mx-auto bloc-index pl-0 pr-0 pt-0 shadow-sm ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">
                            <img src="image/carousel/10646_b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/carousel/10685_b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/carousel/carousel_preview.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="container-fluid">
                    <div class="row ml-0 mr-0 pl-0 pr-0">
                        <div class=" col-12 bg-menu-btn pl-0 pr-0">
                            <div class="row ml-0 mr-0 pl-0 pr-0 justify-content-between position-static">
                                <button type="button" id="index-btn1"
                                    class="btn btn-primary shadow-sm col-4 ml-0 mr-0 pl-0 pr-0">Meilleures
                                    ventes</button>
                                <button type="button" id="index-btn2"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Promotions</button>
                                <button type="button" id="index-btn3"
                                    class="btn btn-primary shadow-sm col-4  ml-0 mr-0 pl-0 pr-0">Nouveautés</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-list-1" class="container-fluid">
                    <div class="row ml-0 mr-0 justify-content-center text-center">
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-materielnet filter-1000-1500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie1/article2 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title"> Materiel.net Chaos [ Win10 - PC Gamer ]</p>
                                </a>
                                <p class="card-text price">1 279€90</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-aorus filter-over1500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie2/article5 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">AORUS 15 SA-7FR0250W</p>
                                </a>
                                <p class="card-text price">1 899€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-asus filter-minus500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie2/article7 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">ASUS Chromebook C423NA-EB0048</p>
                                </a>
                                <p class="card-text price">449€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-apple filter-500-1000"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie3/article9 (1).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Apple iPad Air 2019</p>
                                </a>
                                <p class="card-text price">879€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-list-2" class="container-fluid">
                    <div class="row ml-0 mr-0 justify-content-center text-center">
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-apple filter-over1500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie3/article10 (1).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Apple iPad Pro</p>
                                </a>
                                <p class="card-text price">1 679€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-samsung filter-500-1000"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie3/article12 (1).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Samsung Galaxy Tab S6</p>
                                </a>
                                <p class="card-text price">799€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-bitdefender filter-minus500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie4/article16.jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Bitdefender Antivirus Plus 2019</p>
                                </a>
                                <p class="card-text price">49€96</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-microsoft filter-minus500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie4/article13.jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Microsoft Windows 10 Home 32/64 bits - Version
                                        clé USB
                                    </p>
                                </a>
                                <p class="card-text price">154€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-list-3" class="container-fluid">
                    <div class="row ml-0 mr-0 justify-content-center text-center">
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-asus filter-minus500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie2/article7 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">ASUS Chromebook C423NA-EB0048</p>
                                </a>
                                <p class="card-text price">449€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-samsung filter-500-1000"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie3/article11 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Samsung Galaxy TAB S3</p>
                                </a>
                                <p class="card-text price">619€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-aorus filter-over1500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie2/article5 (2).jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">AORUS 15 SA-7FR0250W</p>
                                </a>
                                <p class="card-text price">1 899€95</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product-index col-12 col-md-3 shadow-sm filter-microsoft filter-minus500"
                            style="width: 18rem;">
                            <a href="product.html"><img src="image/categories/categorie4/article14.jpg"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a href="product.html">
                                    <p class="card-text product-title">Microsoft Office 365 Famille</p>
                                </a>
                                <p class="card-text price">94€96</p>
                                <div id="addCart" class="pl-0 pr-0 align-self-center text-center">
                                    <a href="cart.html">Ajouter au panier<i class="fas fa-cart-plus cart-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
























<?php
include('includes/footer.php');
?>