<html>

	<head>

		 <title> Hotel Reservation System </title>
		 <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">

	</head>

	<body> 
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>/post">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')) :?>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login </a>
      </li>
      <?php endif;?>
       <?php if($this->session->userdata('logged_in')) :?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout </a>
      </li>
         <?php endif;?>
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<div class="container">

  <?php if($this->session->flashdata('user_registered')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif;?>

     <?php if($this->session->flashdata('user_loggedin')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_loggedin').'</p>';?>
    <?php endif;?>

    <?php if($this->session->flashdata('user_loggedout')):?>
    <?php echo '<p class="alert alert-success">'
.$this->session->flashdata('user_loggedout').'</p>';?>
    <?php endif;?>




     

   