<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:42:38 GMT -->
	<?php
	error_reporting(0);
	include('module/myClass.php');
	$p=new myClass();
	
	session_start();
	
	?>
<head>
<meta charset="utf-8">
<title>Webmarket HTML Template - Checkout Step 1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ProteusThemes">
 
<script type="text/javascript">
        WebFontConfig = {
            google : {
                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
 
<link href="stylesheets/bootstrap.css" rel="stylesheet">
<link href="stylesheets/responsive.css" rel="stylesheet">
 
<link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
 
<link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
 
<link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
 
<link href="stylesheets/main.css" rel="stylesheet">
 
<script src="js/modernizr.custom.56918.js"></script>
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
<link rel="shortcut icon" href="images/apple-touch/57.png">
</head>
	
	
<body class=" checkout-page">
<div class="master-wrapper">
<div class="container">
<div class="row">
 
 
 
<section class="span12">
<div class="checkout-container">
<div class="row">
<div class="span10 offset1">
 
 
 
<header>
<div class="row">
<div class="span2">
<a href="index.php"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48"/></a>
</div>
<div class="span6">
<div class="center-align">
<h1><span class="light">Review</span> Shopping Cart</h1>
</div>
</div>
<div class="span2">
<div class="right-align">
<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65"/>
</div>
</div>
</div>
</header>
 
 
 
<div class="checkout-steps">
<div class="clearfix">
<div class="step active">
<div class="step-badge">1</div>
Shopping Cart
</div>
<div class="step">
<div class="step-badge">3</div>
Shipping Address
</div>
<div class="step">
<div class="step-badge">2</div>
Payment Method
</div>
<div class="step">
<div class="step-badge">4</div>
Confirm &amp; Pay
</div>
</div>
</div>  
 
 
 
<table class="table table-items">
<thead>
<tr>
<th colspan="2">Item</th>
<th><div class="align-center">Quantity</div></th>
<th><div class="align-right">Price</div></th>
</tr>
</thead>
<tbody>
	

	<?php
	 $p->xuatGioHangNew();
	?>
	
	
	
<td colspan="2" rowspan="2">
<div class="alert alert-info">
<button data-dismiss="alert" class="close" type="button">×</button>
Shipping costs are calculated based on location. <a href="#">More information</a>
</div>
</td>
	

	
</tr>
	
<tr>
<td class="stronger">Subtotal:</td>
<td class="stronger"><div class="size-16 align-right">$<?php $p->tienGioHangNew() ?></div></td>
</tr>
	
</tbody>
</table>
<hr/>
<p class="right-align">
In the next step you will choose your shipping address &nbsp; &nbsp;
<a href="checkout-step-2.php" class="btn btn-primary higher bold">CONTINUE</a>
</p>
</div>
</div>
</div>
</section>  
</div>
</div>  
</div>  
 
 
 
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../connect.facebook.net/en_US/all.html#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
 
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.html"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
 
<script src="js/underscore/underscore-min.js" type="text/javascript"></script>
 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
 
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
 
<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
 
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
 
<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>
 
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>
 
<script src="js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:42:43 GMT -->
</html>
