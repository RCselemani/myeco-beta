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
    <link rel="stylesheet" href="./base.css">
</head>
<body>
    <!-- navbar header  -->
    <?php
        include 'includes/header.php';
    ?>

    <!-- main page Sandra -->
<section>
    <div class="video">
        <video controls autoplay muted width="1060" height="315" src="./video/SeikoMontredeluxe.MP4" ></video>
      </div>
      
      <p id="titre1">Bienvenue sur notre site My Eco Montre. Découvrez toutes nos montres prestigieuses de haute précision.</p>
      <p id="titre2"> MyEco propose un vaste choix de modèles de montres Professionnelles et Classiques pour convenir à tous les poignets. Toutes nos montres sont fabriqués en France. Nous fabriquons chaque montre avec des matériaux recyclés. </p>

      
      <div class="article container">
      <article class="col-12 col-md-4 col-xl-4 mb-4">
              <figure id="montre1">
                <a href="./homme.php"><img class="img-article" src="images/montrehomme.JPG" href="./homme.html" alt="Montre 1" ></a>
                  <figcaption>
                      <h3 id="texte900">Hommes</h3>
                  </figcaption>
              </figure>
          </article>
          <article class="col-12 col-md-4 col-xl-4 mb-4">
                          <figure id="montre2">
                 <a href="./femme.php"><img class="img-article" src="images/montrefemme.JPG" alt="Montre 2"></a>
                  <figcaption>
                      <h3 id="texte900">Femmes</h3>
                  </figcaption>
              </figure>
          </article>
          <article class="col-12 col-md-4 col-xl-4 mb-4">
                          <figure id="montre3">
                 <a href="./junior.php"><img class="img-article" src="images/montrenfant.JPG" alt="Montre 3"></a>
                  <figcaption>
                      <h3 id="texte900">Juniors</h3>
                  </figcaption>
              </figure>
          </article>
      </div>
      <p id="titre1">Découvrez nos nouveaux modèles :</p>

      <div class="article container">
        <article class="col-12 col-md-4 col-xl-4 mb-4">
                <figure id="montre1">
                    <a href="./nouveaumodeleH.html"><img class="img-article" src="images/im3.png" alt="Nouveau modèle Homme"></a><br>
                    <figcaption class="px-3 py-2">
                        <h3 class="h5">Nouveau modèle Homme :</h3>
                        <p class="m-0">
                          
                        <small>
                        <?php echo $products [`description`]; ?> 
                        </small>
                        </p>  
                           
                            <br>
                        <p class="m-0">
                            199€99
                        </p>
                       <!-- button panier il faut ajouter lien pour panier  -->
                      <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                        > <i class="fa fa-cart-arrow-down"></i>
                       </a> 
                       <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                       > <i class="fa fa-heart"></i>
                      </a> 

                        
                    </figcaption>
                </figure>
            </article>
            <article class="col-12 col-md-4 col-xl-4 mb-4">
                            <figure id="montre2">
                                <a href="./nouveaumodeleF.html"><img class="img-article" src="images/im11.png" alt="Nouveau 1"></a><br>
                                <figcaption class="px-3 py-2">
                                    <h3 class="h5">Nouveau modèle Femme :</h3>
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
                                        <br>
                                    <p class="m-0">
                                        169€99
                                    </p>
                                   <!-- button panier il faut ajouter lien pour panier  -->
                                  <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                                    > <i class="fa fa-cart-arrow-down"></i>
                                   </a> 
                                   <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                                   > <i class="fa fa-heart"></i>
                                  </a>  
                                </figcaption>
                </figure>
            </article>
            <article class="col-12 col-md-4 col-xl-4 mb-4">
                            <figure id="montre3">
                                <a href="./nouveaumodeleJ.html"><img class="img-article" src="images/im19.png" alt="Nouveau 1"></a><br>
                                <figcaption class="px-3 py-2">
                                    <h3 class="h5">Nouveau modèle Junior :</h3>
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
                                        <br>
                                    <p class="m-0">
                                        69€99
                                    </p>
                                   <!-- button panier il faut ajouter lien pour panier  -->
                                  <a  class="btn btn-outline-dark btn-floating m-1" href="checkout.html" role="button"
                                    > <i class="fa fa-cart-arrow-down"></i>
                                   </a> 
                                   <a  class="btn btn-outline-dark btn-floating m-1" href="" role="button"
                                   > <i class="fa fa-heart"></i>
                                  </a>  
                                </figcaption>
                </figure>
            </article>
        </div>
</section>


<!-- footer -->
<?php
        include 'includes/footer.php';
    ?>
<section>
   
    
</body>
</html>
