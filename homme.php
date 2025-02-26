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
    <h1 class="text-center">Homme</h1>
    <section id="homme">
        <h2>Pour lui</h2>
        <div class="row">

            <article class="col-12 col-md-6 col-xl-3 mb-3">
                <figure>
                    <div>
                        <img class="w-100" src="images/Homme1.JPG" alt="Montre Classique">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre Classique </h3>
                        <p class="m-0">
                           <h6> <small> 
                        <ul>
                        Diamètre du boîtier : 40 mm 
                        Epaisseur du boîtier : 8 mm
                        Mouvement : Ronda SP - Date heure (Quartz)
                        Taille du poignet : 16 à 21 cm
                        Garantie : 24 mois
                        </ul>  
                            </small> </h6> 
                        <p class="m-0">
                            59€95
                        </p>
                       <!-- button panier il faut ajouter lien pour panier  -->
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
                        <img class="w-100" src="images/Homme2.JPG" alt="Montre Chronobike">   
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre Chronobike</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                         Diamètre du boîtier : 40 mm 
                         Epaisseur du boîtier : 8 mm
                         Mouvement : Ronda SP - Date heure (Quartz)
                         Taille du poignet : 16 à 21 cm
                         Garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">
                            89€95 
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
                        <img class="w-100" src="images/Homme3.JPG" alt="Montre Babaga">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre Babaga</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                            Diamètre du boitier : 42mm 
                            Bracelet Classique en cuir interchangeable
                            Mouvement automatique Seagull
                            Montre garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">
                            110€
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
                        <img class="w-100" src="images/Homme4.JPG" alt="Montre Sportboy">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre Sportboy</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                            Diamètre du boitier : 42mm 
                            Bracelet Classique en cuir interchangeable
                            Mouvement automatique Seagull
                            Montre garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">154€95</p>
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
                        <img class="w-100" src="images/Homme5.JPG" alt="Montre Full Heat">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre Full Heat</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                         Diamètre du boîtier : 40 mm 
                         Epaisseur du boîtier : 8 mm
                         Mouvement : Ronda SP - Date heure (Quartz)
                         Taille du poignet : 16 à 21 cm
                         Garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">210€95</p>
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
                        <img class="w-100" src="images/Homme6.JPG" alt="Montre MyEco Prestige">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">MyEco Prestige</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                            Diamètre du boîtier : 39 mm
                            Épaisseur du boîtier : 8.3 mm
                            Forme du boîtier : Rond
                            Mécanisme : Quartz (Ronda Swiss Parts 760)
                            Garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">299€95</p>
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
                        <img class="w-100" src="images/Homme7.JPG" alt="Montre XY">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre XY</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                            Diamètre du boitier : 42mm 
                            Bracelet Classique en cuir interchangeable
                            Mouvement Ronda swiss parts conçu pour durer
                            Montre garantie 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">129€99</p>
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
                        <img class="w-100" src="images/Homme8.JPG" alt="Montre noir">
                    </div>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Montre noir</h3>
                        <p class="m-0">
                            <h6> <small> 
                         <ul>
                         Diamètre: 39 mm
                         Boitier en santal rouge, Cadran en santal noir
                         Largeur bracelet: 20 mm
                         Bracelet 100% en cuir véritable
                         Garantie : 24 mois
                         </ul>  
                             </small> </h6> 
                        <p class="m-0">89€99</p>
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

<?php
        include 'includes/footer.php';
    ?>  



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</body>
</html>


