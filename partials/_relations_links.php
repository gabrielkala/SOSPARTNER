<?php if(a_friend_request_has_already_been_sent($_GET['id']) == CANCEL_RELATION_LINK):  ?>
 
 <p>Demande déjà envoyée. <a class="btn btn-primary pull-right" href="delete_friend.php?id=<?=$_GET['id'] ?>">Annuler la demande</a> </p>
  
  <?php elseif(a_friend_request_has_already_been_sent($_GET['id']) == ACCEPT_REJECT_RELATION_LINK):  ?>
     
     <a class="btn btn-primary" href="accept_friend_request.php?id=<?=$_GET['id'] ?>">Accepter</a>
     <a class="btn btn-danger" href="delete_friend.php?id=<?=$_GET['id'] ?>">Décliner</a>
  
  <?php elseif(a_friend_request_has_already_been_sent($_GET['id']) == DELETE_RELATION_LINK):  ?>
  Vous êtes déja amis.
  <a class="btn btn-primary pull-right" href="delete_friend.php?id=<?=$_GET['id'] ?>">Retirer de ma liste d'amis</a>
 
 <?php elseif(a_friend_request_has_already_been_sent($_GET['id']) == ADD_RELATION_LINK) : ?>
 
 <a href="add_friend.php?id=<?= $_GET['id'] ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ajouter comme ami<a/>
                          
  <?php endif; ?>