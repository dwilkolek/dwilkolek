<?php // require "quickcache/quickcache.php"; ?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="robots" content="index, follow" />
        <title>Portfolio - Wilkołek Damian - Java, PHP - developer, coder, freelancer</title>
        <meta name="description" content="I'm Java and PHP developer. Also I help as freelancer on few mobile projects. Need a succesful coder? Contact with me!">
        <meta name="keywords" content="coder, developer, freelancer, java, php, mvc, resume, contact, portfolio, website, design, www" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="/icon.png" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/icons.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-25788805-9', 'wilkolek.eu');
            ga('send', 'pageview');

        </script>
    </head>
    <body style="min-height: 1081px;">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        $navbar = file_get_contents('edit/navbar.php');
        $navbar = str_replace("{active2}", "active", $navbar);
        $navbar = str_replace("{active1}", "", $navbar);
        $navbar = str_replace("{active3}", "", $navbar);
		function isSecure() {
		  return
			(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
			|| $_SERVER['SERVER_PORT'] == 443;
		}
		
		if (isSecure()){
			$navbar = str_replace('<li><a href="https://www.wilkolek.eu/" title="Secured version" >Secure version</a></li>', "", $navbar);
		}
        echo $navbar;
        ?>
        <div class="container">
            <h1 id="title">Portfolio</h1>
            <hr />
            <br /><br />
        </div>
        <div class="jumbotron" style="padding: 0px; display: none;" >
            
               <?php
               for ($i = 1; $i < 7; $i++){
                echo '<div class="AjaxO" id="'.$i.'AjaxO">';
                echo file_get_contents($i.'AjaxO.html'); 
                echo "</div>";
               }
                ?>
        
        </div>
        <div class="container my-portfolio">


            <div class="herb img img-circle" onclick="go(1)">
                <img class="img img-circle" style="width: 100%;" src="/img/bb.png" />
            </div>

            <div class="herb img img-circle" onclick="go(2)">
                <img class="img img-circle" style="width: 100%;" src="/img/cp.png" />
            </div>

            <div class="herb img img-circle" onclick="go(3)">
                <img class="img img-circle" style="width: 100%;" src="/img/cl.png" />
            </div>

            <div class="herb img img-circle" onclick="go(4)">
                <img class="img img-circle" style="width: 100%;" src="/img/dz24.png" />
            </div>
			<div class="herb img img-circle" onclick="go(5)">
                <img class="img img-circle" style="width: 100%;" src="/img/dis.png" />
            </div>
            <div class="herb img img-circle" onclick="go(6)">
                <img class="img img-circle" style="width: 100%;" src="/img/ww.png" />
            </div>
			
        </div>

        <div class="container rounded">



            <hr>
            <footer class="" style="">
                <p>&copy; Wilkolek.eu 2014
                    <a href="https://www.facebook.com/Slishu297" title="Polub na Facebooku" target="_blank" class="contact-icon facebook tooltip-trigger " data-placement="top"><i class="icon-facebook"></i></a>
                    <a href="http://gplus.to/slishu" title="Dodaj mnie do swego kręgu" target="_blank" class="contact-icon facebook  googleplus tooltip-trigger " data-placement="top"><i class="icon-google-plus"></i></a>
                    <a href="http://lnkd.in/iKrqR4" title="Profil na LinkedIN" target="_blank" class="contact-icon facebook  linkedin tooltip-trigger " data-placement="top"><i class="icon-linkedin"></i></a>

                </p>
            </footer>

        </div>



        <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.js"><\/script>')</script>

        <script src="/js/vendor/bootstrap.min.js"></script>

        <script src="/js/main.js"></script>


    </body>
</html>
