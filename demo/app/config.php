<?php

/**
  * Configuration for database connection
  *
  */
  require "/var/www/html/templates/vars.php";
$host       = "$dbhost";
$username   = "$db_user_name";
$password   = "$db_user_pass";
$dbname     = "$db_name"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

?>
