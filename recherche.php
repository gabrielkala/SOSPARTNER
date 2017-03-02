<?php
session_start();

 $title ="Recherche";

 require("config/database.php");
 require("includes/functions.php");
 require('includes/constants.php');
 include('partials/_header.php');
 include('partials/_nav.php');
 
 include('filters/auth_filter.php');
