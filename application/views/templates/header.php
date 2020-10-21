<!DOCTYPE html>

<html>

    <head>
        <title> Footworld </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

        		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
				<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
				<script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>	
				<script src="<?php echo base_url(); ?>assets/js/sweetalert-master/dist/sweetalert.min.js"></script>
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/sweetalert-master/dist/sweetalert.css">
		</head>

    <body>

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
	<h2 class="navbar-brand">Footworld</h2>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="navbarColor01">
	  <ul class="navbar-nav mr-auto">
		<li class="nav-item ">
			<a class="nav-link" href="<?php echo base_url();?>home">Početna</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url();?>about">Info</a>
			<?php if(!empty($this->session->id))
		 {
		   echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'klubovi">Klubovi </a></li>';
	 
		}?>
			<?php if(!empty($this->session->id))
		 {
		   echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'posts">Blog </a></li>';
	 
		}?> 
		
	  </ul>
	  <ul class="navbar-nav navbar-right">
		<?php if(empty($this->session->id))
		 {
		 echo '<li class="nav-item"><a class="nav-link" href="' . base_url().'user/login">Login</a></li>';
		 echo '<li class="nav-item"><a class="nav-link" href="' . base_url().'user/register">Register</a></li>';
		 } ?>
		 <?php
		 if($this->session->ovlast == 1)
		 	{	
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'admin/view">Admin</a></li>';	
			}?>
		<?php
		 if($this->session->ovlast== 2)
		 	{	
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'moderator/view">Moderator</a></li>';	
			}?>
		 
		 <?php if(!empty($this->session->id))
		 {
		  	echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'user/logout">Logout </a></li>';
		 }?>
		 
		 </ul>
	</div>
	</nav>
	<div style="margin-bottom:40px;"></div>
<br>
<div class="container">
  