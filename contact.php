<?php 
error_reporting(0);
//require "quickcache/quickcache.php"; ?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="robots" content="index, follow" />
        <title>Contact - Wilkołek Damian - Java, PHP - developer, coder, freelancer</title>
        <meta name="description" content="I'm Java, PHP, Javascript developer. Also I help as freelancer on few mobile projects. Need a succesful coder? Contact with me!">
        <!--<meta name="keywords"  content="coder, developer, freelancer, java, php, mvc, resume, contact, portfolio, website, design, www" />-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="/icon.png" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/icons.css">
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
    <body>
          <?php
        $navbar = file_get_contents('edit/navbar.php');
        $navbar = str_replace("{active3}", "active", $navbar);
        $navbar = str_replace("{active2}", "", $navbar);
        $navbar = str_replace("{active1}", "", $navbar);
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
        <div class="container rounded">
            <h1 id="title">Contact</h1>
            <hr />

            <div class="row">
                
                <div class="col-md-6">
                    <form role="form" method="post" action="libs/submit.php">
                        <?php if (isset($_GET["e"])) { ?>
                        <?php if ($_GET["e"] == "f") { ?>
                            <div id="msgStatus" class="alert alert-success alert-dismissable text-center">Massage have been sent</div>
                        <?php } ?>
                        <?php if ($_GET["e"] == "t") { ?>
                            <div id="msgStatus" class="alert alert-danger alert-dismissable text-center">Massage have <b>NOT</b> been sent</div>
                        <?php } ?> 
                        <?php } ?>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Message</label>
                            <textarea name="message" class="form-control" ></textarea>
                        </div>

                        <input type="submit" class="my-submit btn btn-success right text-right" value="Send it!" />
                    </form>
                    <div class="clearfix"></div>
                </div>
<div class="col-md-6">

                    <address class="address">
                        <strong class="adress-me">Damian Wilkołek</strong><br />
                        <?php /* <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:d.wilkolek@hotmail.com">d.wilkolek(at)hotmail.com</a><br />
                        <span class="glyphicon glyphicon-phone"></span> (+48) 531 000 605<br /> 
                        <span class="glyphicon glyphicon-globe"></span>  Siemianowice Śląskie<br /> 
                        <a href="/vCard.vcf" class="btn btn-success">Download my vCard</a>
                        <br /><br />
*/ ?>
                        <p class="alert alert-warning"><strong>You can also check out: </strong>
                            <a href="https://www.facebook.com/Slishu297" title="Polub na Facebooku" target="_blank" class="contact-icon facebook tooltip-trigger " data-placement="top"><i class="icon-facebook"></i></a>
                            <a href="http://gplus.to/slishu" title="Dodaj mnie do swego kręgu" target="_blank" class="contact-icon facebook  googleplus tooltip-trigger " data-placement="top"><i class="icon-google-plus"></i></a>
                            <a href="http://lnkd.in/iKrqR4" title="Profil na LinkedIN" target="_blank" class="contact-icon facebook  linkedin tooltip-trigger " data-placement="top"><i class="icon-linkedin"></i></a>
                        </p>
                        <br />
                        <p class="text-center">

                        </p>


                    </address>
                </div>
            </div>
            <!--koniec spamu-->



            <hr>
            <footer class="">
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
