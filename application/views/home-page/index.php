<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ana Sayfa | Gelir & Gider</title>
	<?php $this->load->view('partials/head'); ?>
</head>

<body id="mimin" class="dashboard">
      <?php $this->load->view('partials/header'); ?>
      <div class="container-fluid mimin-wrapper">
            <?php 
            	$this->load->view('partials/sidebar'); 
            	$this->load->view('home-page/content');
            ?>
      </div>
      <?php 
      	$this->load->view('partials/mobile_sidebar'); 
      	$this->load->view('partials/scripts'); 
      ?>
</body>
</html>