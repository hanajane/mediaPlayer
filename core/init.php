<?php
session_start();
$_SESSION['message'] = '';
?>
<?php
    include 'databases/db_connection.php';
    include 'databases/db.php';
    include 'databases/Database.php';
    include 'functions/users.php';
    include 'functions/general.php';
?>
<?php
    $errors = array();
?>