<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ;?>
</head>
<body>
<div class="wrapper">
    <div class="section-logo">
         <div class="logo"><span class="color__add">Simple</span>code</div>
         <div class="menu-btn"> <i class="fas fa-bars"></i></div>
    </div>
      <div class="menu">
        <div class="close-menu"><i class="fas fa-times"></i></div>
         <nav class="nav">
            <ul class="main-menu">
                <li class="main-menu-item"> 
                     <a href="<?php echo site_url(); ?>">Home</a>
                 </li>
                 <li class="main-menu-item"> 
                    <a href="<?php echo site_url('/sklep'); ?>">Shop</a>
                 </li>
                 <li class="main-menu-item"> 
                    <a href="<?php echo site_url('/blog');?>">Blog</a>
                 </li>
                 <li class="main-menu-item"> 
                    <a href="">Contact</a>
                 </li>
            </ul>
        </nav>
    </div> 
</div>  
