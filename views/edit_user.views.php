      <?php $title ="Modification profile";?>
     <?php include('partials/_header.php'); ?>
    

<div class="main-content">
    <div class="container">
      <div class="row">

      <?php if(!empty($_GET['id']) && $_GET['id'] == get_session('user_id')): ?>
    	<div class="col-md-6 col-md-offset-3">
    		 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h3 class="panel-title">Editer mon profil</h3>
                   </div>
                <div class="panel-body">
                <?php include('partials/_errors.php'); ?> 
                    <form data-parsley-validate method="post" autocomplete="off">
                      <!-- input NAME -->
                      <div class="row">
  		                  	<div class="col-md-6">
  		            	   	 		<div class="form-group">
  		            	   	 			<label for="name">Nom<span class="text-danger">*</span></label>
  		            	   	 			<input type="text" name="name" id="name" class="form-control" placeholder="Nom" value="<?= get_input('name') ? get_input('name') : e($user-> name) ?>" required="required"/>
  		                            </div>
  		                        </div>
                        <!-- input ville -->
  		            <div class="col-md-6">
  		          	    <div class="form-group">
  		          	        <label for="ville">Ville<span class="text-danger">*</span></label>
  		          	        <input type="text" name="ville" id="ville" class="form-control" value="<?= get_input('ville') ? get_input('ville') : e($user-> ville) ?>" required="required"/>
  		          	    </div>
  		          	</div>
                          <!-- input upload -->
                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="avatar">Modifier mon profil</label>
                                    <input type="file" name="avatar" id="avatar"/>
                                </div>
                            </div>
                          </div>
                     <!-- input Adresse -->
  		          	<div class="col-md-6">
  		          	 	<div class="form-group">
  		          	 		<label for="adresse">Adresse<span class="text-danger">*</span></label>
  		          	 		<input type="text" name="adresse" id="adresse" class="form-control" value="<?= get_input('adresse') ? get_input('name') : e($user-> ville) ?>" required="required"/>
  		          	    </div>
  		          	 </div>
                      <!-- input Sex -->
  		          	<div class="col-md-6">
  		          	 	<div class="form-group">
  		          	 		<label for="sex">Sexe<span class="text-danger">*</span></label>
  		          	 		    <select required="required" name="sex" id="sex" class="form-control">
  		          	 			    <option value="H" <?= $user->sex == 'H' ? "selected" : "" ?>>
  		          	 				    Homme
  		          	 			    </option>
  		          	 			    <option value="F" <?= $user->sex == 'F' ? "selected" : "" ?>>
  		          	 				    Femme
  		          	 			    </option>
  		          	 		    </select>
  		          	 	</div>
  		          	</div>
   </div>
                     <!-- input Code_postal -->
  		<div class="row">
  		          	    <div class="col-md-6">
  		          		    <div class="form-group">
  		          			    <label for="code_postal">Code Postal</label>
  		          			    <input type="text" name="code_postal" id="code_postal" value="<?= get_input('code_postal') ? get_input('code_postal') : e($user-> code_postal) ?>" class="form-control"/>
  		          		    </div>
  		          	    </div>
                       <!-- input Telephone -->
  		          	    <div class="col-md-6">
  		          		    <div class="form-group">
  		          			    <label for="telephone">Téléphone</label>
  		          			    <input type="text" name="telephone" id="telephone" value="<?= get_input('telephone') ? get_input('telephone') : e($user-> telephone) ?>" class="form-control"/>
  		          		    </div>
  		          	    </div>
  		            </div>
                  <!-- Sport -->
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="sport">Votre sport<span class="text-danger">*</span></label>
                          <select required="required" name="sport" id="sport" class="form-control">
                             <option>badminton</option>
                             <option >squash</option>
                            <option >tennis</option>
                            <option>handball</option>
                            <option>basket</option>
                            <option>foot</option>
                            <option>volley</option>
                            <option>judo</option>
                            <option>golf</option>
                          </select>
                    </div>
                  </div>
                  <!-- Fin Sport -->

                  <!-- Niveau -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="niveau"> Votre niveau:<span class="text-danger">*</span></label>
                          <select required="required" name="niveau" id="niveau" class="form-control">
                             <option>débutant</option>
                             <option >amateur</option>
                            <option >compétiteur</option>
                            <option>professionnel</option>
                          </select>
                    </div>
                  </div>
                  <!-- Fin Niveau -->

                  <!-- Jour -->
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="jour">Vous êtes disponible le:<span class="text-danger">*</span></label>
                          <select required="required" name="jour" id="jour" class="form-control">
                             <option>lundi</option>
                             <option>mardi</option>
                            <option>mercredi</option>
                            <option>jeudi</option>
                            <option>vendredi</option>
                            <option>samedi</option>
                            <option>dimanche</option>
                          </select>
                    </div>
                  </div>
                  <!-- Fin Jour -->

                  <!-- Tranche horraire -->
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="disponibilite">De:<span class="text-danger">*</span></label>
                          <select required="required" name="disponibilite" id="disponibilite" class="form-control">
                             <option selected>8h-10h</option>
                            <option>10h-12h</option>
                            <option>12h-14h</option>
                            <option>14h-16h</option>
                            <option>16h-18h</option>
                            <option>18h-20h</option>
                            <option>20h-22h</option>
                          </select>
                    </div>
                  </div>
                  <!-- Fin Tranche horraire -->

                  <!-- dario Disponible -->
  		<div class="row">
  		          	<div class="col-md-12">
  		          		<div class="form-group">
  		          			<label for="disponible">
  		          				<input type="checkbox" name="disponible" id="disponible" <?= $user->disponible ? "checked" : "" ?>/>
  		          					Disponible ?
  		          			</label>
  		          		</div>
  		          	</div>
  		</div>
  		            <!-- Textarea biographie -->
  		<div class="row">
  		          	<div class="col-md-12">
  		          		<div class="form-group">
  		          			<label for="bio">A propos de moi<span class="text-danger">*</span></label>
  		          			<textarea name="bio" id="bio" cols="30" rows="5" class="form-control" required="required" placeholder="Je suis....."> <?= get_input('bio') ? get_input('bio') : e($user-> bio) ?></textarea>
  		          		</div>
  		          	</div>
  		</div>
  		         <input type="submit" class="btn btn-primary" value="Valider" name="update"/>
  		    </form>
                </div>
             </div>
    	</div>
        <?php endif; ?>
    </div>
     

    </div><!-- /.container -->
   </div>
 </div>
</div>
</div>

      <!-- scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="libraries/uploadify/jquery.uploadify.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

      <script src="libraries/parsley/parsley.min.js"></script>

      <script src="libraries/parsley/i18n/fr.js"></script>
      <script type="text/javascript">
          window.ParsleyValidator.setLocale('fr');

          $(function() {
              $('#avatar').uploadify({
                  'buttonText' : 'Parcourir',
                  'swf'      : 'libraries/uploadify/uploadify.swf',
                  'uploader' : 'libraries/uploadify/uploadify.php'
                  // Put your options here
              });
          });
      </script>

      </body>
      </html>