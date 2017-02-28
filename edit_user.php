<?php
session_start();

require("includes/init.php");
include('filters/auth_filter.php');
require("config/database.php");
require("includes/functions.php");
require("includes/constants.php");


if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')){
	//Recuperer les infos sur l'user en base de donnee en utilisant son id
	$user = find_user_by_id($_GET['id']);

    
      
	if(!$user) {
		redirect('index.php');
	}
}else{
	redirect('profile.php?id='.get_session('user_id'));
}
//si le formulaire a ete soumis
   if (isset($_POST['update'])) {

   	      $errors = [];
   	       // si tous les champs ont ete remplis
   	    if (not_empty(['name','ville','adresse','sex','bio', 'sport', 'jour', 'niveau', 'disponibilite']))  {
   		    extract($_POST);
            $q = $db->prepare("UPDATE users
            	              SET name = :name, ville = :ville, adresse = :adresse, sex = :sex, code_postal = :code_postal, telephone = :telephone, disponible = :disponible, bio = :bio, sport = :sport, jour = :jour, niveau = :niveau, disponibilite = :disponibilite WHERE id = :id");
            $q->execute([
                 'name' => $name,
                 'ville' => $ville,
                 'adresse' => $adresse,
                 'sex' => $sex,
                 'code_postal' => $code_postal,
                 'telephone' => $telephone,
                 'disponible' => !empty($disponible) ? '1':'0',
                 'bio' => $bio,
                 'sport' => $sport,
                 'jour' => $jour,
                 'niveau' => $niveau,
                 'disponibilite' => $disponibilite,
                 'id' => get_session('user_id'),
                ]);
            set_flash("Felicitation, votre profil a été mis à jour!");
            redirect('profile.php?id='.get_session('user_id'));
          }else{
          	save_input_data();
          	$errors[]="Veuille remplir tous les champs marqués d'un (*)";
          }
   }else{
   	clear_input_data();//s,il vient d'arriver, les champs ne seront pas pre-remplis
   }



require("views/edit_user.views.php");