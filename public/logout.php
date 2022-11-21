<?php

include_once __DIR__ .'/../includes/session_start.php';
if (!isset($_SESSION['id']))
  header('location: /login.php'); 

unset($_SESSION['id']);
session_destroy();
  header('location: /');

// Start the Output Buffer


  echo 'You are now logged out';