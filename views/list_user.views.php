
     <?php $title = "Liste des membres"; ?>
     <?php include('partials/_header.php'); ?>
    <?php require("includes/functions.php"); ?>



    

<div id="main-content">
    <div class="container">

      <h4>Rechercher un partenaire</h4>

       <form class="form-inline" action="<?= WEBSITE_URL?>list_users.php" method="post"
  style="margin-bottom: 50px">

  <div>
    <label class="control-label">sport: </label> <select
      class="form-control" name="sport" id="sport">
      <option  selected>tous</option>
      <option>badminton</option>
      <option >squash</option>
      <option >tennis</option>
      <option>handball</option>
      <option>basket</option>
      <option>foot</option>
      <option>volley</option>
      <option>judo</option>
      <option>golf</option>
    </select> <label class="control-label">niveau: </label> <select
      class="form-control" name="niveau" id="niveau">
      <option  selected>tous</option>
      <option >debutant</option>
      <option >amateur</option>
      <option >competiteur</option>
      <option >professionnel</option>
    </select>
    <button type="submit" class="btn btn-primary btn-xs" name="ok">OK</button>
  </div>
</form>

    <h3>Liste des membres</h3>
    <?php foreach (array_chunk((array)$users, 4) as $user_set): ?>
    <div class="row users">
    <?php foreach ($user_set as $user): ?>
      <div class="col-md-3 user-block">
        <a href="profile.php?id=<?= $user->id ?>"><img src="<?= get_avatar_url($user->email, 70) ?>"
          alt="<?= e($user->pseudo) ?>" class="avatar img-circle">
      </a>

        <h4 class="user-block-username">
          <a href="profile.php?id=<?= $user->id ?>">
          <?= e($user->pseudo) ?>
          </a>

        </h4>
      </div>
      <?php endforeach ?>
    </div>
      <?php endforeach ?>
  </div>
</div>


   <?php include('partials/_footer.php');?>