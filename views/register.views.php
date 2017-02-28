     <?php $title ="Inscription";?>
     <?php include('partials/_header.php'); ?>


<div class="main-content">
    <div class="container">
      <h2>Inscription</h2>
       <p class="lead">C'est gratuit (et ça le restera tourjours)</p>

       <?php include('partials/_errors.php') ?>

       <form data-parsley-validate method="post"  class="well col-md-6">
             <!-- Name field -->
         	<div class="form-group">
         	   <label class="control-label" for="name">Nom:</label>
       		   <input type="text" value="<?= get_input('name') ?>" class="form-control" id="name" name="name" required="required"/>
         	</div>

         	 <!-- Pseudo field -->
         	<div class="form-group">
         	   <label class="control-label" for="pseudo">Pseudo:</label>
       		   <input type="text" class="form-control" id="pseudo" name="pseudo" data-parsley-minlength="3" value="<?= get_input('pseudo') ?>" required="required"/>
         	</div>

         	 <!-- Email field -->
         	<div class="form-group">
         	   <label class="control-label" for="email">Adresse Email:</label>
       		   <input type="email" class="form-control" id="email" name="email" data-parsley-trigger="keypress" value="<?= get_input('email') ?>" required="required"/>
         	</div>

         	 <!-- Password field -->
         	<div class="form-group">
         	   <label class="control-label" for="password">Mot de passe:</label>
       		   <input type="password" class="form-control" id="password" name="password" required="required"/>
         	</div>

         	<!-- Password Confirmation field -->
         	<div class="form-group">
         	   <label class="control-label" for="password_confirm">Confirmer votre mot de passe:</label>
       		   <input type="password" class="form-control" id="password_confirm" name="password_confirm" required="required" data-parsley-equalto="#password"/>
         	</div>

          <div class="_58mu" id="u_0_i">

                <p>En cliquant sur Inscription, vous acceptez nos <a href="conditions.php"> conditions </a>
                    et indiquez que vous avez lu notre
                    <a href="data_policy.php"> Politique d'utilisation des données </a> y compris notre <a href="utilisation_cookies.php"> utilisation des cookies </a>.
                 </p>
          </div>

        <input type="submit" class="btn btn-primary" value="Inscription" name="register" />

  </form>
    </div><!-- /.container -->
</div>


   <?php include('partials/_footer.php');?>