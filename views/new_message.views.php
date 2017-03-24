<?php
require('includes/functions.php');
include('includes/constants.php');
include('partials/_header.php');





$q = $db->prepare("SELECT pseudo FROM users WHERE id = :id");
$q->execute(array(
'id' => $_GET['id']
));
$users = $q->fetch(PDO::FETCH_ASSOC);




?>



<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title">Envoyez un message</h3>
                </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                            <label for="a" class="col-sm-2 control-label">à :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="a" name="a" value="<?= ucfirst($users['pseudo'])?>" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sujet" class="col-sm-2 control-label">Sujet</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sujet" name="sujet" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Votre message</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="4" name="message" id="message>"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

