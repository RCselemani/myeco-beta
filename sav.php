<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire service après-vente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   <!--- icon logo library bootstrap--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!--- icon logo library bootstrap--> 
    <link rel="stylesheet" href="base.css">
    
  
  </head>
  <body>
  <?php
        include 'includes/header.php';
    ?>
    <main>
    <!-- Formulaire service après-vente -->


    <div class="about-section">
        <div class="inner-width">
              
        <h1>Service après-vente MyEco Montre</h1>
    
        <div class="border"></div>
        <div class="about-section-row">
        <div class="about-section-col">
        <div class="about">
    </div>   
    <form>
        <h3>Formulaire d'avis clients</h3> <br>
        <h5>Nous serions ravis de connaitre votre avis pour nous aider à améliorer notre service !</h5>
        
        <div class="formulaire">
            <div class="gauche">
                <div class="box">
                    <label>Nom</label>
                    <input type="text">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="box">
                    <label>Prénom</label>
                    <input type="text">
                    <i class="fa-solid fa-user"></i>
                </div>  
                <div class="box">
                    <label>E-mail</label>
                    <input type="text">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="box">
                    <label>Téléphone</label>
                    <input type="text">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div> 
            </div>
            <div class="droite">
                <div class="box">
                    <label>Expliquez-nous votre retour</label>
                    <textarea>Saisissez ici...</textarea>
                </div>
            </div>
        </div>   
        <div class="bouton-envoi" align="center"> 
            <button>Soumettre</button>
        </div>
    </form>
    </main>
<?php
        include 'includes/footer.php';
    ?>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>

</html>
