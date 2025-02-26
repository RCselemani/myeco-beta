<?php
    session_start();
    require_once 'includes/database.php';
    require_once 'includes/product.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyEco Montre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   <!--- icon logo library bootstrap--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!--- icon logo library bootstrap--> 
    <link rel="stylesheet" href="base.css">
    

</head>
<body>
<?php
        include 'includes/header.php';
    ?>

    <main class="container my-4">
        <h1 class="text-center">Femme</h1>
        <section>
            <h2>Nos produits pour elle</h2>
            <div class="row">
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme1.JPG" alt="Montre Classique ">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Classique </h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 30 mm 
                             Epaisseur du boîtier : 8,5 mm
                             Mouvement : Ronda Swiss P. - Heure
                             Taille du poignet : 14 à 19 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                59€95
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 

                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme2.JPG" alt="Montre Mademoiselle">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Mademoiselle</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 34 mm 
                             Epaisseur du boîtier : 8 mm
                             Mouvement : Ronda Swiss P. 
                             Taille du poignet : 14 à 19 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                89€95
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 

                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme3.JPG" alt="Montre Oasis">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Oasis</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 29 mm 
                             Epaisseur du boîtier : 9,5 mm
                             Mouvement : Ronda Swiss P. - Heure
                             Largeur du bracelet : 14 mm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                110€00
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 
                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme4.JPG" alt="Montre Girlfriend">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Girlfriend</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 30 mm 
                             Epaisseur du boîtier : 9 mm
                             Mouvement : Ronda Swiss P. - Heure
                             Largeur du bracelet : 14 mm 
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">149€95</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 
                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme5.JPG" alt="Montre Jasmine">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Jasmine</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 32 mm 
                             Epaisseur du boîtier : 7,8 mm
                             Mouvement : Ronda Swiss P. - Heure
                             Largeur du bracelet : 14 mm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">205€00</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 
                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme6.JPG" alt=" MyEco Prestige">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">MyEco Prestige</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 42 mm 
                             Epaisseur du boîtier : 12 mm
                             Mouvement : Automatique
                             Taille du poignet : 14 à 19 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">299€95</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 

                        </figcaption>
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme7.JPG" alt="Montre Cool">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Cool</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                                Diamètre du boîtier : 30 mm 
                                Epaisseur du boîtier : 9 mm
                                Mouvement : Ronda Swiss P. - Heure
                                Largeur du bracelet : 14 mm 
                                Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">199€99</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                            > <i class="fa fa-cart-arrow-down"></i>
                           </a> 
                           <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                           > <i class="fa fa-heart"></i>
                          </a> 
                        </figcaption>
                     
                    </figure>
                </article>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Femme8.jpeg" alt="Montre Elegance">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Elegance</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                                Diamètre du boîtier : 42 mm 
                                Epaisseur du boîtier : 12 mm
                                Mouvement : Automatique
                                Taille du poignet : 14 à 19 cm
                                Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">79€99</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 
                        </figcaption>
                    </figure>
                </article>
        </section>
    </main>
    <?php
        include 'includes/footer.php';
    ?>  



</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>
