<?php
session_start();
if(!$_SESSION['authenticate_admin_name']){
    header('location: ../index.php');
  }
  unset ($_SESSION['authenticate_admin_name']);
  header('location: ../index.php');
?>