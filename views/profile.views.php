
<?php $title ="Page de Profile";?>
<?php include('partials/_header.php'); ?>



    

<div class="main-content">
    <div class="container">
      <div class="row">
    	<div class="col-md-6">
    		 <div class="panel panel-default">
                   <div class="panel-heading">
                      <h3 class="panel-title">Profil de <?= e($user->pseudo) ?> (
                          <?= friends_counts($_GET['id'])?> ami <?= friends_counts($_GET['id']) == 1 ? '' : 's'?>)
                      </h3>
                   </div>

                <div class="panel-body">
                   <div class="row">
                     <div class="col-md-5">
                       <img src="<?= get_avatar_url($user->email, 100) ?>" alt="Image de Profil de <?= e($user->pseudo) ?>" class="img-circle">
                     </div>
                     <div class="col-md-7">
                        <?php if(!empty($_GET['id']) && $_GET['id'] !== get_session('user_id')): ?>
                        <?php include('partials/_relations_links.php'); ?>
                      <?php endif; ?>

                     </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <strong><?= e($user->pseudo)?></strong><br>
                          <div>
                              <?php if(!empty($_GET['id']) && $_GET['id'] !== get_session('user_id')): ?>
                              <a href="message.php?id=<?= $_GET['id'] ?>" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Envoyer un message<a/>
                                  <?php endif; ?>
                        </div>


<a href="mailto:<?= e($user->email) ?>"><?= e($user->email) ?></a><br>
<?=
$user->ville && $user->adresse
    ? '<i class="fa fa-location-arrow"></i>&nbsp'.e($user->ville).' - '.e($user->adresse).'<br/>':'';
?>
<?=
$user->code_postal ? '<strong>✉ '.e($user->code_postal).'</strong><br>':'';
?>

<?=
$user->telephone ? '<strong>☎ '.e($user->telephone).'</strong><br>':'';
?>
<a href="https://www.google.com/maps?q=<?= e($user->ville).''.e($user->adresse) ?>" target="_blank"><i class="fa fa-globe"></i> Voir sur Google Maps</a>
</div>
<div class="col-sm-6">

    <?=
    $user->sport ? '<strong>⛹ ' .e($user->sport). '</strong><br>':'';
    ?>

    <?=
    $user->niveau ? '<strong>☰ ' .e($user->niveau). '</strong><br>':'';
    ?>

    <?=
    $user->jour ? '<strong>⚅ ' .e($user->jour). '</strong><br>':'';
    ?>

    <?=
    $user->disponibilite ? '<strong>⛅ ' .e($user->disponibilite). '</strong><br>':'';
    ?>

    <?=
    $user->sex=='H' ? '<i class="fa fa-male"></i>' : '<i class="fa fa-female"></i>';
    ?>

    <?=
    $user->disponible ? 'Disponible pour jouer' : 'Pas Disponible pour jouer';
    ?>

</div>
</div>
<div class="row">
    <div class="col-md-12 well">
        <h5>A propos de <?= e($user->name) ?></h5>
        <p>
            <?= $user->bio ? nl2br(e($user->bio)) : "Aucune description pour le moment..."; ?>
        </p>
    </div>
</div>

</div>
</div>
</div>

<!--ici -->
<div class="col-md-6">
    <?php if(!empty($_GET['id']) && $_GET['id'] === get_session('user_id')): ?>
        <div class="status-post">
            <form action="microposts.php" method="post" data-parsley-validate>
                <div class="form-group">
                    <label for="content" class="sr-only">Statut:</label>
                    <textarea name="content" id="content" rows="3" class="form-control" placeholder="Alors quoi de neuf?" data-parsley-minlength="3" required="required" data-parsley-maxlength="140"></textarea>
                </div>
                <div class="form-group status-post-submit">
                    <input type="submit" name="publish" value="Publier" class="btn btn-default btn-xs">
                </div>
            </form>
        </div>
    <?php endif; ?>

    <!--Affichage des statuts -->
    <?php if(count($microposts) != 0): ?>
        <?php foreach ($microposts as $microposts): ?>
            <?php include('partials/_microposts.php'); ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p> Cet utilisateur n'a encore rien posté pour l'instant... </P>
    <?php endif; ?>
</div>



<!--Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.timeago.js"></script>
<script src="assets/js/jquery.timeago.fr.js"></script>
<script src="assets/js/jquery.livequery.min.js"></script>
<script src="libraries/parsley/parsley.min.js"></script>
<script src="libraries/parsley/i18n/fr.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="libraries/sweetalert/sweetalert.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">
    window.ParsleyValidator.setlocale('fr');
    $(document).ready(function() {
        $(".timeago").timeago();

        $(".timeago").livequery(function(){
            $(this).timeago();
        });
    });
</script>


<!--Scripts -->
<?php include('partials/_footer.php');?>
</div>
</div>
