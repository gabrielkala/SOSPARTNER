<?php 
session_start();

 $title ="Recherche";

 require("config/database.php");
 require("includes/functions.php"); 
 require('includes/constants.php'); 
 include('partials/_header.php');
 
 include('filters/auth_filter.php'); 


 	if(isset($_POST['ok'])) {
        $q = $db->prepare("SELECT * FROM users WHERE sport = :sport AND niveau = :niveau");
        $q->execute(array(
            'sport' => $_POST['sport'],
            'niveau' => $_POST['niveau']
        ));
        $result = $q->fetch(PDO::FETCH_ASSOC);

if(isset($result))  {
    header("location : views/list_user.views.php");

}
    }
