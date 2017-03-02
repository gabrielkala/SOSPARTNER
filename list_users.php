<?php
session_start();

require("config/database.php");
require("includes/functions.php");
require("includes/constants.php");
require("includes/init.php");

if(isset($_POST['ok'])) {
    $sport = $_POST['sport'];
    $niveau = $_POST['niveau'];

    $req = $db->prepare('SELECT * FROM users WHERE sport = :sport AND niveau = :niveau');

    $req->execute(array(
        'sport' => $sport,
        'niveau' => $niveau
    ));
    $users = $req->fetchAll(PDO::FETCH_OBJ);

} else {
    $q = $db->query("SELECT id, pseudo, email FROM users WHERE active='1' ORDER BY pseudo");
    $users = $q->fetchAll(PDO::FETCH_OBJ);
}



require("views/list_user.views.php");