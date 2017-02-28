<?php 
session_start();
     require("includes/init.php"); 
     include('filters/guest_filter.php');
     require('config/database.php');
     require('includes/functions.php');
     require('includes/constants.php');
     
     //si le formulaire a ete soumis
   if (isset($_POST['login'])) {
   	
   	       // si tous les champs ont ete remplis
   	    if (not_empty(['identifiant','password']))  {
   		    extract($_POST);
            $q = $db->prepare("SELECT id, pseudo, password AS hashed_password, email FROM users WHERE (pseudo = :identifiant OR email = :identifiant)  AND active ='1'");
            $q->execute([
                 'identifiant' => $identifiant,
                 
                ]);

            $user = $q->fetch(PDO::FETCH_OBJ);

            if($user && password_verify($password, $user->hashed_password)){ 
                
                $_SESSION['user_id'] =$user->id;
                $_SESSION['pseudo'] =$user->pseudo;
                $_SESSION['email'] =$user->email;

                //Si l'utilisateur a choisi de garder sa session active
                if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
                  setcookie('pseudo', $user->pseudo, time()*3600*24*365, null, null, false, true);
                  setcookie('user_id', $user->id, time()*3600*24*365, null, null, false, true);
                }

                redirect_intent_or('profile.php?id='.$user->id);
            }else{
                set_flash('Identifiant ou mot de passe incorrecte', 'danger');
                save_input_data();
            }

         }
   }else{
   	clear_input_data(); //s'il vient d'arriver, les champs ne seront pas pre-remplis
   }

?>

<?php require('views/login.views.php'); ?>