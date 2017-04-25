<?php
session_start();
require("includes/init.php");
require('filters/auth_filter.php');

//On récupère les notifications
$q = $db->prepare(
     "SELECT users.pseudo, users.email,
 notifications.subject_id,
 notifications.name, notifications.user_id,
 notifications.seen, notifications.created_at
 FROM notifications
 LEFT JOIN users ON users.id = user_id
 WHERE subject_id = ?
         ORDER BY notifications.created_at DESC");

$q->execute([get_session('user_id')]);

 // Nous les stockons au niveau de la variable $notifications
 $notifications = $q->fetchAll(PDO::FETCH_OBJ);

 // Après avoir récupéré les notifications de l'utilisateur connecté,
 // nous modifions la valeur de leur attribut 'seen' afin d'indiquer que
 // l'utilisateur vient de lire ces notifications.
 $q = $db->prepare("UPDATE notifications SET seen = '1' WHERE subject_id = ?");
 $q->execute([get_session('user_id')]);

// Nous affichons ensuite le contenu de notre fichier notifications.view.php

require("views/notifications.views.php");