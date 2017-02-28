<?php
session_start();

require("includes/init.php");
require('config/database.php');
require('includes/functions.php');
include('filters/auth_filter.php');





if(!empty($_GET['id']) && $_GET['id'] !== get_session('user_id')){ 
	if(!checks_if_a_friend_request_has_already_been_sent(get_session('user_id'), $_GET['id']
	)){
	
	$id = $_GET['id'];

	$q = $db->prepare('INSERT INTO friends_relationships(user_id1, user_id2)
						VALUES(:user_id1, :user_id2)');
	$q->execute([
		'user_id1' => get_session('user_id'),
		'user_id2' => $id
		]);

	set_flash('demande envoyée!');
	redirect('profile.php?id='.$id);
}else {
	set_flash("Cet utilisateur vous a déja fait une demande ");
	redirect('profile.php?id='.$_GET['id']);
}

} else {
	redirect('profile.php?id='.get_session('user_id'));
}