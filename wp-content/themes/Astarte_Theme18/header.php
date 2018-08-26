<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>
">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <?php wp_head();?>
  </head>

  <body>

    <div class="top-header">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/astarte_logo.png" alt="astarte-logo" id="main-logo" />
      <div class="navbar">   
          <nav class="nav-items-container">
            <?php wp_list_pages( '&title_li=' ); ?>
          </nav>          
      </div>
      <a class="toggle-nav" href="#">
        <div id="menu">Menu</div>
        <!-- <svg width="30px" height="30px" viewBox="0 0 43 30">
            <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop-Copy-6" transform="translate(-922.000000, -59.000000)" fill="#000000">
                    <g id="Group" transform="translate(922.000000, 59.000000)">
                        <rect id="Rectangle-6-Copy-3" x="0" y="0" width="43" height="7"></rect>
                        <rect id="Rectangle-6-Copy-4" x="0" y="11" width="43" height="7"></rect>
                        <rect id="Rectangle-6-Copy-5" x="0" y="23" width="43" height="7"></rect>
                    </g>
                </g>
            </g>
        </svg> -->
<!-- 
        <svg height="45px" width="45px">
            <g id="hamburger" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group-3" fill="#7F7F7F">
                    <g id="Group-Copy-4">
                        <rect id="top-line" x="0" y="0" width="41" height="7" rx="3.5"></rect>
                    </g>
                    <g id="Group-Copy-5" transform="translate(0.000000, 12.000000)">
                        <rect id="middle-line" x="0" y="0" width="41" height="7" rx="3.5"></rect>
                    </g>
                    <g id="Group-Copy-6" transform="translate(0.000000, 24.000000)">
                        <rect id="bottom-line" x="0" y="0" width="41" height="7" rx="3.5"></rect>
                    </g>
                </g>
            </g>
        </svg> -->

        <div id="nav-icon1">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
    </div>
     
      <div class="navbar-mobile">   
          <nav class="nav-items-container-mobile">
            <?php wp_list_pages( '&title_li=' ); ?>
          </nav>          
      </div>

    <div class="content-container">