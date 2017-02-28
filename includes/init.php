<?php

if(!empty($_COOKIE['pseudo']) && !empty($_COOKIE['user-id'])){
	$_SESSION['pseudo'] = $_COOKIE['pseudo'];
	$_SESSION['user-id'] = $_COOKIE['user_id'];
}