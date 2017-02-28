<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><?php echo WEBSITE_NAME;?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="list_users.php">Liste des membres</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="<?= set_active('index') ?>"><a href="index.php">Accueil</a></li>

            <?php if( is_logged_in()): ?>
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <img src="<?= get_avatar_url(get_session('email')) ?>" alt="Image de Profil de <?= get_session('pseudo') ?>" class="img-circle">
               <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="<?= set_active('profile') ?>">
                              <a href="profile.php?id=<?= get_session('user_id') ?>">Mon profil</a>
                            </li>
                            <li class="<?= set_active('edit_user') ?>">
                              <a href="edit_user.php?id=<?= get_session('user_id') ?>">Editer mon profil</a>
                            </li>
                            <li class="divider"></li>
                            <li class="<?= set_active('logout_user') ?>">
                              <a href="logout.php?id=<?= get_session('user_id') ?>">Deconnexion</a>
                            </li>
                          </ul>
                        </li>
            <?php else: ?>
            <li class="<?= set_active('login') ?>"><a href="login.php">Connexion</a></li>
            <li class="<?= set_active('register') ?>"><a href="register.php">Inscription</a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>