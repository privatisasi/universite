<!doctype html>
<html>
	<head>
		<title> <?php echo (isset($ap_title)) ? $ap_title : 'Universite'; ?> </title>
		<?php $this->render_css(array('bootstrap.min.css','bootstrap-responsive.min.css'));?>
		<?php $this->render_less('style') ?>
		<?php $this->render_js('jquery.js') ?>
		<?php $this->render_js('jquery.gal.min.js') ?>
	</head>
	<body>
		<div class="container main">
			<header class="row-fluid header">
				<!-- Header Logo -->
				<div class="span6">
					<p class="lead"><?php $this->render_img('sima.png') ?> <small><b><i>Sistem Informasi Mahasiswa</i></b></small></p>
				</div>
				<div class="span6">
					<nav class="navbar">
					  
					    <div class="container">
					 
					      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </a>

					      <!-- Everything you want hidden at 940px or less, place within here -->
					      <div class="nav-collapse collapse">
					        <!-- .nav, .navbar-search, .navbar-form, etc -->
					        <ul class="nav nav-pills">		
								<?php if($this->session->userdata('logged_in') == true) : ?>
								<li><?php echo anchor('user','<i class="icon-home"></i> Dashboard') ?></li>
								<li class="dropdown">
								    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope"></i> Message (4) <b class="caret"></b></a>
								    <ul class="dropdown-menu">
								    	<li><?php echo anchor('pengumuman',' + pengumuman') ?></li>
								    	<li><?php echo anchor('message',' + message') ?></li>
								    </ul>
								</li>
								<li class="dropdown">
								    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Akademik <b class="caret"></b></a>
								    <ul class="dropdown-menu">
								    	<li><?php echo anchor('portfolio',' + portfolio') ?></li>
								    	<li><?php echo anchor('keuangan',' + keuangan') ?></li>
								    	<li><?php echo anchor('nilai',' + nilai') ?></li>
								    	<li><?php echo anchor('krs',' + krs') ?></li>
								    </ul>
								</li>
								<li><?php echo anchor('logout','Logout') ?></li>
								<?php endif; ?>
							</ul>
					      </div>
					 
					    </div>
					  
					</nav>
				</div>
			</header>
		
