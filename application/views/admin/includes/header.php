<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>LMS - Admin Dashboard</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/app.min.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/components.css">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/css/custom.css">
      
	  <link href="<?php echo base_url() ?>adminasstes/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/bootstrap-social/bootstrap-social.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/summernote/summernote-bs4.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/dropzonejs/dropzone.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>adminasstes/bundles/jquery-selectric/selectric.css">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>adminasstes/images/favicon.ico" />
      <link href="<?php echo base_url() ?>adminasstes/pnotify/pnotify.custom.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="loader"></div>
      <div id="app">
         <div class="main-wrapper main-wrapper-1" >
            <div class="navbar-bg"> </div>
            <nav class="navbar navbar-expand-lg main-navbar sticky" >
               <div class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                     <li>
						 <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
							 <i data-feather="align-justify"></i>
						 </a>
					 </li>
                  </ul>
               </div>
               <ul class="navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
						 <img alt="image" src="<?php echo base_url() ?>adminasstes/images/logo/logo.png" class="user-img-radious-style">
						 <span class="d-sm-none d-lg-inline-block"></span>
					  </a>
                     <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello LMS</div>
                        <a href="#" class="dropdown-item has-icon"> 
							<i class="far fa-user"></i> Profile
                        </a>
						<a href="#" class="dropdown-item has-icon"> 
							<i class="fas fa-cog"></i>Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo base_url() ?>logout" class="dropdown-item has-icon text-danger"> 
							<i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>