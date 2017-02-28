         <?php $title ="Accueil";?>
         <?php include('includes/constants.php'); ?>
         <?php include('partials/_header.php'); ?>

         
         

    <div class="main-container">
        <div class="container">

          <div class="jumbotron">

          <h1><?php echo WEBSITE_NAME ;?>?</h1>
          <p>
            <?php echo WEBSITE_NAME ;?> est le réseau social de la Maison de Ligue de Lorraine. <br />

                    Avec SOS Partners, vous pouvez jouer et rester en contact avec votre entourage. <br />

                    Grâce à cette plateforme, vous avez la possibilité de jouer, tisser des liens
                    d'amitiés avec d'autres personnes et bien plus encore ! <br />

                    Alors n'hésitez plus et <a href="register.php">rejoingez dès maintenant la communauté SOS Partners</a> ! ☺
          </p>

            <a href="register.php" class="btn btn-primary btn- lg">Créer un compte</a>
          </div>

        </div><!-- /.container -->
        </div>

        <div class="cookie" id="cookie">
          En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies afin de réaliser des statistiques d'audiences et vous proposer une navigation optimale, 
          la possibilité de partager des contenus sur des réseaux sociaux ainsi que des services et offres adaptés à vos centres d'intérêts. <a href="#">En savoir plus</a>
          <div class="cookie_btn" id="cookie_btn">OK</div>
        </div>

       

        
       <?php include('partials/_footer.php');?>