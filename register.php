<?php 
session_start();
     require("includes/init.php");
     include('filters/guest_filter.php');
     require('config/database.php');
     require('includes/functions.php');
     require('includes/constants.php');
     
     //si le formulaire a ete soumis
   if (isset($_POST['register'])) {
   	
   	       // si tous les champs ont ete remplis
   	    if (not_empty(['name','pseudo','email','password','password_confirm']))  {
   		
            $errors = [];//Tableau contenant l'ensemble de erreurs

            extract($_POST);

            if (mb_strlen($pseudo) < 3) {
            	$errors[] ="Pseudo trop court ! (Minimum 3 caractéres)";
            }

            if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            	$errors[] ="Adresse email invalide!";
            }

             if (mb_strlen($password) < 6) {
            	$errors[] ="Mot de passe trop court ! (Minimum 6 caractéres)";
            }else{
            	if ($password != $password_confirm) {
            		$errors[] = "Les mot de passe ne concordent pas!";
            	}

            }
        if (is_already_in_use('pseudo', $pseudo,'users')) {
        	$errors[] = "Pseudo déja utilisé; ";
        }

         if (is_already_in_use('email', $email,'users')) {
        	$errors[] = "Adresse email déja utilisé; ";
        }

        if (count($errors) == 0) {
        	//Envoie d'un mail d'activation
        	$to = $email;
        	$subject = WEBSITE_NAME. " - ACTIVATION DE COMPTE";
            $password = password_hash($password, PASSWORD_BCRYPT);
        	$token = sha1($pseudo.$email.$password);

            $headers = 'MIME-Version: 1.0'."\r\n";
            $headers .='Content-type: text/html; charset=iso-8859-1'."\r\n";

            //Recuperation du mail formaté
        	ob_start();
            require('templates/emails/activation.tmpl.php');
        	$content = ob_get_clean();

        	//Envoi du mail d'activation
        	mail($to, $subject, $content, $headers);
        	//Informer l'utilisateur pour qu'il verifie sa boite de reception
        	set_flash("Mail d'activation envoye!", 'success');
        	//enregistre l'utilisateur dans la base de donne
        	$q = $db->prepare('INSERT INTO users(name, pseudo, email, password)
        		               VALUES(:name, :pseudo, :email, :password)');
        	$q->execute([
                 'name' => $name,
                 'pseudo' => $pseudo,
                 'email' => $email,
                 'password' => $password
        		]);
        	redirect('index.php');
        }else{
        	save_input_data();
        }

   	    }else{
   	    	$errors[]= "Veuillez SVP remplir tous les champs!";
   	    	save_input_data();
   	    }
   }else{
   	clear_input_data();
   }

?>

<?php require('views/register.views.php'); ?>