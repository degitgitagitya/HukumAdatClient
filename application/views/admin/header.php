<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/simple-sidebar.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>/public/img/Notext.png">
    <title>Admin</title>

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <!--  <a href="<?php /*echo base_url(); */?>index.php/adminhome">-->
                    Admin
                <!--</a>-->
            </li>
            <!--<li>
                <a href="<?php /*echo base_url(); */?>index.php/adminhome">Dashboard</a>
            </li>-->
            <li>
                <a href="<?php echo base_url(); ?>index.php/adminpost">Post</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a href="#menu-toggle" class="btn btn-secondary navbar-brand" id="menu-toggle">Toggle Menu</a>
        </nav>
