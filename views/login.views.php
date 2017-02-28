     <?php $title ="Connexion";?>
     <?php include('partials/_header.php'); ?>


<div class="main-content">
    <div class="container">
       <h1 class="lead">connexion</h1>

       <?php include('partials/_errors.php') ?>

       <form data-parsley-validate method="post"  class="well col-md-6">
             <!-- Identifient field -->
         	<div class="form-group">
         	   <label class="control-label" for="identifiant">Pseudo ou Adresse electronique:</label>
       		   <input type="text" value="<?= get_input('identifiant') ?>" class="form-control" id="identifiant" name="identifiant" required="required"/>
         	</div>

       
         	 <!-- Password field -->
         	<div class="form-group">
         	   <label class="control-label" for="password">Mot de passe:</label>
       		   <input type="password" class="form-control" id="password" name="password" required="required"/>
         	</div>

           <!-- Remember me field -->
          <div class="form-group">
             <label class="control-label" for="remember_me">
                <input type="checkbox" name="remember_me" id="remember_me" />
                se souvenir de moi
             </label>
             
          </div>

            <input type="submit" class="btn btn-primary" value="Connexion" name="login" />


       </form>
    </div><!-- /.container -->
</div>


   <?php include('partials/_footer.php');?>