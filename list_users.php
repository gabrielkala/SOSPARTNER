<?php
session_start();

require("config/database.php");
require("includes/functions.php");
require("includes/constants.php");
require("includes/init.php");

$none =  0;
if(isset($_POST['ok'])) {
    $q = $db->prepare("SELECT * FROM users WHERE sport = :sport AND niveau = :niveau");
    $q->execute(array(
        'sport' => $_POST['sport'],
        'niveau' => $_POST['niveau']
    ));
    $users = $q->fetchAll(PDO::FETCH_OBJ);
    if ($users == []) {
        $none = 1;
    }
} else {
    $q = $db->query("SELECT id, pseudo, email FROM users WHERE active='1' ORDER BY pseudo");
    $users = $q->fetchAll(PDO::FETCH_OBJ);
}

require("views/list_user.views.php");