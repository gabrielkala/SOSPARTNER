<?php
session_start();
require('includes/functions.php');
require("includes/init.php");
require('config/database.php');




if(isset($_GET['id']) && !empty($_GET['id'])){
    if(isset($_POST['submit'])){
        if(isset($_POST['sujet']) AND isset($_POST['message'])){
            if(!empty($_POST['sujet']) AND !empty($_POST['message'])){
                $sujet = $_POST['sujet'];
                $message = $_POST['message'];

            }
        }
    }
}else{
    header("Location:list_users.php");
}











 require('views/new_message.views.php');

