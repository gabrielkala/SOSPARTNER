<?php 
session_start();

 $title ="Recherche";

 require("config/database.php");
 require("includes/functions.php"); 
 require('includes/constants.php'); 
 include('partials/_header.php'); 
 include('partials/_nav.php');
 
 include('filters/auth_filter.php'); 


 	if(isset($_POST['ok'])){
 		$q = $db->prepare("SELECT id, name, pseudo, email FROM users WHERE sport = :sport");

		$q->execute([
                'sport' => $_POST['sport']
                ]);
		$result = $q->fetch(PDO::FETCH_ASSOC);

		foreach ($result as $joueurs) {
		            	
		            	echo '<div class="col-md-3 user-block">
        <a href="profile.php?id=<?= $user->id ?>"><img src="<?= get_avatar_url($user->email, 70) ?>" 
          alt="<?= e($user->pseudo) ?>" class="avatar img-circle">
      </a>';
		            }            
          }

       

?>