<?php
 require_once 'admincp/config/config.php';
 session_start();
 unset($_SESSION['user']);
 header('location: index.php');   
?>