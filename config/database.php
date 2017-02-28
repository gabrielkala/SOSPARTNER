<?php
  //datebase credentials
  //define('DB_HOST', 'db642581748.db.1and1.com');
  //define('DB_NAME', 'db642581748');
  //define('DB_USERNAME', 'dbo642581748');
  //define('DB_PASSWORD', 'mariejeanne1');

  define('DB_HOST', 'localhost');
  define('DB_NAME', 'boom');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');



try{

$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);

   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $db->query('SELECT * FROM users');

}catch(PDOException $e)
{
	die('Erreur: '.$e->getMessage());
}
