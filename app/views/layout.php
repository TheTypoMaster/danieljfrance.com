<!doctype html>
<html>
<head>
	  <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<title><?= $title ?> | Daniel France</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
  
    <!-- favico -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/vendor/venobox/venobox.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- JS -->
    <script src="js/jquery.js"></script>
	<?= Assets::output() ?>
</head>
<body class="<? if(isset($body_classes)) echo $body_classes ?>" itemscope="Person" >
	<? if(isset($admin_navigation)) echo $admin_navigation ?>
	 <? if(isset($message)) echo $message ?> 
	 <? if(isset($page_settings)) echo $page_settings ?> 
	 <nav id="menu" class="panel sidebar" role="navigation" style="">
      <a href="#menu" class="menu-link"><i class="close icon"></i></a>
      <a data-scroll-nav="1" class="item"> Experience</a>
      <a data-scroll-nav="2" class="item"> Work</a>
      <a data-scroll-nav="3" class="item"> Contact</a>
      <div class="divider"></div>
        <div class="link ss-icon">
        <a href="https://www.facebook.com/pages/DMartify/1428018170776785"><i class="facebook icon"></i></a>
        <a href="https://twitter.com/dmartify"><i class="twitter icon"></i></a>
        <a href="http://www.linkedin.com/company/dmartify/"><i class="linkedin icon"></i></a>
      </div>
    </nav>
	 <header id="header" class="animate push slideUp" style="-webkit-transition: right 300ms ease; transition: right 300ms ease; right: 0px;">
        <div class="wrapper">
          <div class="ui two column grid">
            <div class="column">
            <div class="logo"><a href="index.html" data-scroll-nav="0">Daniel France</a></div>
          </div>
            <div class="column">
              <nav>
                <div class="desktop">
                <a data-scroll-nav="1" class="item"> Experience</a>
                <a data-scroll-nav="2" class="item"> Work</a>
                <a data-scroll-nav="3" class="item"> Contact</a>
              </div>              
              <a href="#menu" class="mobile menu-link"><i class="reorder icon"></i></a>
            </nav>
          </div>
        </div>
      </div>
    </header>
	<div id="page-content">
		<?= $yield ?>
	</div>
	
    <script src="js/vendor/scrollIt.js"></script>
    <script src="js/vendor/semantic.js"></script>
    <script type="text/javascript" src="js/vendor/Headroom.js"></script>
    <script type="text/javascript" src="js/vendor/bigslide.js"></script>
    <script type="text/javascript" src="js/vendor/venobox/venobox.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>