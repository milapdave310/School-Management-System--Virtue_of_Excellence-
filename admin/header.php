<?php
$site_url = 'http://localhost/Virtue_of_Excellence/';
  session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE)
  {
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin')
    {
      $user_type = $_SESSION['user_type'];
    header('Location: /Virtue_of_Excellence/'.$user_type.'/dashboard.php');
    }
  }
  else{
    header('Location:/../login.php'); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"  >
<div class="wrapper">