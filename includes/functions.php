<?php
//sanitizer
if(!function_exists('e')){
    function e($string){
     if($string){
     	return htmlspecialchars($string);
     }
    }
}

//Vérifie si une demande a été déja envoyé
if(!function_exists('checks_if_a_friend_request_has_already_been_sent')){
    function checks_if_a_friend_request_has_already_been_sent($id1, $id2){
      global $db;

      $q = $db->prepare("SELECT status FROM friends_relationships
          WHERE (user_id1 = :user_id1 AND user_id2 = :user_id2)
          OR (user_id1 = :user_id2 AND user_id2 = :user_id1)");

      $q->execute([
      'user_id1' => $id1,
      'user_id2' => $id2
      ]);

    $count = $q->rowCount();

    $q->closeCursor();

    return (bool) $count;

    }
}

//Compte le nombre d'amis
if(!function_exists('friends_counts')){
    function friends_counts($id){
     global $db;

    $q = $db->prepare("SELECT status FROM friends_relationships
      WHERE (user_id1 = :user_connected OR user_id2 = :user_connected)
      AND status = '1'");
    $q->execute([
      'user_connected' => $id
      ]);

    $count = $q->rowCount();

    $q->closeCursor();

    return $count;
    }
}

//Vérifie si une demande d'ami a été déja envoyé
if(!function_exists('a_friend_request_has_already_been_sent')){
    function a_friend_request_has_already_been_sent($string){
     global $db;
     $id = $_GET['id'];

     $q = $db->prepare('SELECT user_id1, user_id2, status FROM friends_relationships
          WHERE (user_id1 = :user_id1 AND user_id2 = :user_id2)
          OR (user_id1 = :user_id2 AND user_id2 = :user_id1)');
     $q->execute([
      'user_id1' => get_session('user_id'),
      'user_id2' => $id
      ]);

        $data = $q->fetch();

        if($data['user_id1'] == $id && $data['status'] == '0'){
          //Lien pour accepter ou refuser la demande
           return "accept_reject_relation_link";
         } elseif($data['user_id1'] == get_session('user_id') && $data['status'] == '0') {
            // la demande a déja été envoyé, lien pour annuler la demande
            return "cancel_relation_link";
         } elseif(($data['user_id1'] == get_session('user_id') OR $data['user_id1'] == $id) AND $data['status'] == '1') {
            // LIen pour supprimer la demande
             return "delete_relation_link";
         } else {
            //Lien pour ajouter l'utilisateur comme ami
             return "add_relation_link";
         }

        $q->closeCursor();

        die($data->status);
     }

    }


//Redirige vers l'url cliqué
if(!function_exists('redirect_intent_or')){
    function redirect_intent_or($default_url){
     if($_SESSION['forwarding_url']){
      $url = $_SESSION['forwarding_url'];

     } else {
      $url = $default_url;
     }
     $_SESSION['forwarding_url'] = null;

     redirect($url);
   }
}


//Get session value by key
if(!function_exists('get_session')){
    function get_session($key){
     if($key){
   return !empty($_SESSION[$key])
            ? e($_SESSION[$key])
             : null;
     }
  }
}

//verifie si l'utilisateur est connecte
if(!function_exists('is_logged_in')){
    function is_logged_in(){
    return isset($_SESSION['user_id']) || isset($_SESSION['pseudo']);
  }
}

//Get avatar URL
if(!function_exists('get_avatar_url')){
    function get_avatar_url($email, $size = 25){

  return "http://gravatar.com/avatar/".md5(strtolower(trim(e($email))))."?s=".$size;
     }
    }



//Find an user by id
if(!function_exists('find_user_by_id')){
    function find_user_by_id($key){
   global $db;

   $q = $db->prepare('SELECT name, pseudo, email, ville, adresse, sex, code_postal, telephone, disponible, jour, sport, disponibilite, niveau, bio FROM users WHERE id = ?');
   $id = $_GET['id'];
   $q->execute([$id]);

   $data = current($q->fetchAll(PDO::FETCH_OBJ));

   $q->closeCursor();

     return $data;
     }
    }


//Check si tous les champs existent et ne sont pas vides
if(!function_exists('not_empty')){
    function not_empty($fields = []){
      if(count($fields) != 0){
      	foreach ($fields as $field) {
      		if (empty($_POST[$field]) || trim($_POST[$field]) == ""){
      			return false;
      		}
      	}
      	return true;
      }
    }
}
//Verifie si une valeur pour un champs donne est deja present
//au niveau de la base de donnes
if (!function_exists('is_already_in_use')) {
	function is_already_in_use($field, $value, $table){
		global $db;

		$q = $db->prepare("SELECT id FROM users WHERE $field = ?");
		$q->execute([$value]);

		$count = $q->rowCount();

		$q->closeCursor();

		return $count;
	}
}

//Affiche un message flash
  if (!function_exists('set_flash')) {
       function set_flash($message, $type ='info'){
        $_SESSION['notification']['message'] = $message;
         $_SESSION['notification']['type'] = $type;
      }
   }

//Redirige l'utilisateur vers une page donnee
   if(!function_exists('redirect')){
   	    function redirect($page){
   	    	header('location: '. $page);
   	    	exit();
   	    }
   }

//Stoke des input venant d'un formulaire de maniere temporaire en SESSION
   if(!function_exists('save_input_data')){
   	    function save_input_data(){
   	    	foreach ($_POST as $key => $value) {
   	    		if(strpos($key, 'password') === false){
   	    		$_SESSION['input'][$key] = $value;
   	    	}
   	    	}
   	    }
   }

//Recupere des input de formulaire stockes de maniere temporaire en SESSION
    if(!function_exists('get_input')){
   	    function get_input($key){
   	    	return !empty($_SESSION['input'][$key])
   	    		? e($_SESSION['input'][$key])
   	    	   : null;
   	    	}
   }

//Supprime tous les input de formulaires stockes de maniere temporaire en SESSION
    if(!function_exists('clear_input_data')){
   	    function clear_input_data(){
   	    	if(!empty($_SESSION['input'])){
   	    		 $_SESSION['input'] = [];
   	    	}
   	    	}
   	   }

//Gère l'état actif de nos differents liens
if(!function_exists('set_active')){
    function set_active($file, $class="active"){
    //$page = array_pop(explode('/', $_SERVER['SCRIPT_NAME']));
    $page = trim(strrchr( $_SERVER['SCRIPT_NAME'], '/'), '/');
      if($page == $file.'.php') {
          return $class;
      }else{
        return "";
      }
     }
    }
