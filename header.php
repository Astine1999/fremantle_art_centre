<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@800&family=PT+Sans+Caption&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>
<?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>
  <header class="container-fluid bg-1">   <!-- div for the main image the stretches to the edge of the page- -->
    
    <nav class="navbar navbar-expand-md navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="index.html"><span class="FAC">Fremantle Arts Centre</span></a>
    
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="home-nav-item text-right">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="home-nav-item text-right">
            <a class="nav-link" href="events.html">Events</a>
          </li>
          <li class="home-nav-item text-right">
            <a class="nav-link" href="#">Blog</a>
            <li class="home-nav-item text-right">
              <a class="nav-link" href="contact.html">Contact</a>
               </li>
        </ul>
      </div>
    </nav>

  <div class="container-fluid bg-2 text-center">   <!-- div for the main image the stretches to the edge of the page- -->
    <div class="container"><!-- div that holds the content in the middle of the page-->
              <h1 class="head-1" style="font-size:10vw"> Events on <br>this Week </h1><!--  the main tag line-->
          </div><!-- container-->
          <a href="events.html" class="btn btn-info btn-lg" role="button">Explore</a>
        </div>
        <?php wp_head(); ?> <!-- very important that this is added--> 
      </header>