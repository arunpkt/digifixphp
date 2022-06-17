<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- title -->
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Arunkumar M">
    <!-- description -->
    <meta name="description"
        content="Digi fix media is good site for creating the digit works">
    <!-- keywords -->
    <meta name="keywords" content="Creative work, Cinema works">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
    <?php wp_head();?> 
</head>

<body>
  <!-- start header -->
  <header>
         <!-- start navigation -->
         <nav class="navbar navbar-default navbar-fixed-top background-transparent navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="/" title="" class="logo navbar-brand">
                            <img src="<?php echo get_template_directory_uri()?>/images/logo_bw.png" class="logo-dark" alt="Digi Fix Media Logo">
                            <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="Digi Fix Media Logo" class="logo-white">
                            <!-- <h6 class="logo-dark">DIGIFIX MEDIA</h6> -->
                        </a>
                    </div>
                    <!-- end logo -->
                    <div class="col-auto accordion-menu pl-lg-0">
                        <button type="button" class="navbar-toggler collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse alt-font" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav font-weight-700">
                                <li class="nav-item"><a href="#home" title="Home" class="nav-link inner-link active">Home</a></li>
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="serviceMenuLink" data-toggle="dropdown">
                                      Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="serviceMenuLink">
                                      <a class="dropdown-item" href="#services">Restoration</a>
                                      <a class="dropdown-item" href="#services">Digitization</a>
                                      <a class="dropdown-item" href="#services">VFX</a>
                                      <a class="dropdown-item" href="#services">Digit Intermediate(DI)</a>
                                      <a class="dropdown-item" href="#services">Web series</a>
                                      <a class="dropdown-item" href="#services">Production OTT</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="salesMenuLink" data-toggle="dropdown">
                                        Sales
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="salesMenuLink">
                                        <a class="dropdown-item" href="#feature">Telecine spares</a>
                                        <a class="dropdown-item" href="#feature">DI Suites</a>
                                        <a class="dropdown-item" href="#feature">RAID Storages</a>
                                    </div>
                                </li>

                                <li class="nav-item"><a href="#about" title="About us" class="nav-link inner-link">About us</a></li>
                                  
                                  
                                <li class="nav-item"><a href="#contact" title="Contact" class="nav-link inner-link">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->           
    </header>
    <!-- end header -->
