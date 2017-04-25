<?php
session_start();
require("includes/init.php");
include('filters/auth_filter.php');
require("config/database.php");
require("includes/functions.php");




                        if(isset($_POST['message']) && !empty($_POST['message'])) {
                            $my_id = $_SESSION['user_id'];
                            $user = $_GET['id'];
                            $random_number = rand();
                            $message = $_POST['message'];

                            $q = $db->query("SELECT `hash` FROM `inbox` WHERE (`user_one` =  '$my_id' AND `user_two` =  '$user')
                            OR (`user_one` =  '$user' AND `user_two` =  '$my_id' )");
                            if ($q->fetch()) {
                                set_flash("Message envoyé!");
                                redirect('profile.php?id='.$_GET['id']);
                            } else {
                                $db->query("INSERT INTO inbox VALUES('$my_id', '$user', '$random_number') ");
                                $db->query("INSERT INTO messages VALUES('', '$random_number', '$my_id', '$message')" );
                                set_flash("Message envoyé!");
                                redirect('profile.php?id='.$_GET['id']);
                            }
                        }
require("views/message.views.php");