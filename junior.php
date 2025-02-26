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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
           <!--- icon logo library bootstrap-->  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!--- icon logo library bootstrap--> 
            <link rel="stylesheet" href="base.css">
            
        
        </head>
        <body>
        <?php
        include 'includes/header.php';
    ?>
    <main class="container my-4">
        <h1 class="text-center">Juniors</h1>
        <section>
            <h2>Nos produits pour petits</h2>
            <div class="row">
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="images/Junior1.JPG" alt="Montre Gulli ">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Gulli </h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 35 mm 
                             Epaisseur du boîtier : 8,8 mm
                             Mouvement : Quartz
                             Taille du poignet : 24 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                9€95
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior2.JPG" alt="Montre Babyboom">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Babyboome</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                                Diamètre du boîtier : 35 mm 
                             Epaisseur du boîtier : 8,8 mm
                             Mouvement : Quartz
                             Taille du poignet : 24 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                14€95
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior3.JPG" alt="Montre Kidizoom">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Kidizoom</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                             Diamètre du boîtier : 35 mm 
                             Epaisseur du boîtier : 8,8 mm
                             Mouvement : Quartz
                             Taille du poignet : 24 cm
                             Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">
                                19€95
                            </p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior4.JPG" alt="Montre Razmoket">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Razmoket</h3>
                            <p class="m-0">
                                <h6> <small> 
                             <ul>
                                Diamètre du boîtier : 35 mm 
                                Epaisseur du boîtier : 8,8 mm
                                Mouvement : Quartz
                                Taille du poignet : 24 cm
                                Garantie : 24 mois
                             </ul>  
                                 </small> </h6> 
                            <p class="m-0">22€95</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior5.JPG" alt="Montre Navy">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Navy</h3>
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
                            <p class="m-0">34€99</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior6.JPG" alt="Montre Family">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Family</h3>
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
                            <p class="m-0">25€95</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior7.JPG" alt="Montre Pikachu">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Pikachu</h3>
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
                            <p class="m-0">9€99</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
                            <img class="w-100" src="images/Junior8.JPG" alt="Montre Navy">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5">Montre Navy</h3>
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
                            <p class="m-0">9€99</p>
                            <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.php" role="button"
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
</section>
<?php
        include 'includes/footer.php';
    ?>  
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  
</body>
</html>
