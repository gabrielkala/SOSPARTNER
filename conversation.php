<?php
session_start();
require("includes/init.php");
require("config/database.php");
include('partials/_header.php');
?>
<div id="wrapper-message" class="col-xs-6 col-xs-offset-3">
<?php
$my_id = $_SESSION['user_id'];
if(isset($_GET['hash']) && !empty($_GET['hash'])){
    $hash = $_GET['hash'];
    $message_query = $db->query("SELECT from_id, message FROM messages WHERE group_hash='$hash' ");
    while ($run_message = $message_query->fetch()){
        $from_id = $run_message['from_id'];
        $message = $run_message['message'];

        $user_query = $db->query("SELECT pseudo FROM users WHERE id='$from_id' ");
        $run_user = $user_query->fetch();
        $from_username = $run_user['pseudo'];
        echo "<p><b> $from_username : </b> $message</p>";
    }
    ?>
</div>
    <form method="post" class="haut">
        <?php
        if(isset($_POST['message']) && !empty($_POST['message'])){
            $new_message = $_POST['message'];
            $insertmsgs = $db->prepare("INSERT INTO messages VALUES('', '$hash', '$my_id', '$new_message')");
            $insertmsgs->execute(array($hash, $my_id, $new_message,));
        }
        ?>

        Entrer votre message : <br />
        <textarea name="message" rows="6" cols="50"></textarea>
        <br/><br/>
        <input type="submit" name="submit" value="Envoyer" />

    </form>

    <?php

    }else {
    echo "<h3>Vos conversations</h3>";
    $q = $db->query("SELECT `hash`, `user_one`, `user_two` FROM inbox WHERE user_one='$my_id' OR user_two='$my_id' ");
    while($run_con = $q->fetch()){
        $hash = $run_con['hash'];
        $user_one = $run_con['user_one'];
        $user_two = $run_con['user_two'];

        if($user_one == $my_id){
            $select_id = $user_two;
             }else {
            $select_id = $user_one;
        }
            $user_get = $db->query("SELECT pseudo FROM users WHERE id='$select_id' ");
            $run_user = $user_get->fetch();
            $select_username  = $run_user['pseudo'];

            echo "<p><a href='conversation.php?hash=$hash'>$select_username</a></p>";

    }
}

?>





















































