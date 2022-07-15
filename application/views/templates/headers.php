<html>
 <head> 
    <title>ciBlog</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"> 
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">ciBlog
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
        </li>

        <?php endif; ?>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
        </li>
        <?php if($this->session->userdata('logged_in')) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container"> 

  <!-- Flash messages -->
  <?php if($this->session->flashdata('user_registered')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('user_registered'). ' </p>' ;?>
  <?php  endif; ?>  

  <?php if($this->session->flashdata('post_created')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('post_created'). ' </p>' ;?>
  <?php  endif; ?> 

  <?php if($this->session->flashdata('post_updated')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('post_updated'). ' </p>' ;?>
  <?php  endif; ?> 

  <?php if($this->session->flashdata('category_created')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('category_created'). ' </p>' ;?>
  <?php  endif; ?> 

  <?php if($this->session->flashdata('category_deleted')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('category_deleted'). ' </p>' ;?>
  <?php  endif; ?> 

  <?php if($this->session->flashdata('post_deleted')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('post_deleted'). ' </p>' ;?>
  <?php  endif; ?>  

  
  <?php if($this->session->flashdata('user_loggedin')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('user_loggedin'). ' </p>' ;?>
  <?php  endif; ?>  

  <?php if($this->session->flashdata('login_failed')):  ?>
    <?php  echo '<p class="alert alert-danger">' .$this->session->flashdata('login_failed'). ' </p>' ;?>
  <?php  endif; ?>

  <?php if($this->session->flashdata('user_loggedout')):  ?>
    <?php  echo '<p class="alert alert-success">' .$this->session->flashdata('user_loggedout'). ' </p>' ;?>
  <?php  endif; ?>


  


 

 