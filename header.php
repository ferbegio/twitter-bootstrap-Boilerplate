<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fisheye Media House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.fullPage.css" rel="stylesheet">
    <style>
      body {
        padding-top: 50px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  
  <script src="js/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fullPage.min.js"></script>
    
    <script type="text/javascript">
		$(document).ready(function() {
			var pepe = $.fn.fullpage({
				slidesColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
				menu: '#menu'
			});
			
		});
	</script>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Fisheye Media House</a>
          <div class="nav-collapse collapse">
            <ul class="nav" id="menu">
	              <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
				<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
				<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
				<li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
