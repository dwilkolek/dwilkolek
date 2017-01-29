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
		<meta http-equiv="X-UA-Compatible" content="IE=edge" >
		<meta name="robots" content="index, follow" />
        <title>Wilkołek Damian - developer, coder, freelancer</title>
        <meta name="description" content="I'm Java, PHP, Javascript developer. Also I help as freelancer on few mobile projects. Need a succesful coder? Contact with me!">
        <!--<meta name="keywords" content="coder, developer, freelancer, java, php, mvc, resume, contact, portfolio, website, design, www" />-->
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
    <body class="workexp">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        $navbar = file_get_contents('edit/navbar.php');
        $navbar = str_replace("{active1}", "active", $navbar);
        $navbar = str_replace("{active2}", "", $navbar);
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
        <div class="jumbotron my-jumbotron-index">
            <div class="container">
                Do you need <h2>Java</h2>, <h2>PHP</h2>, <h2>JS</h2> developer? Here I am! :)
            </div>
        </div>

        <div class="container ">
            <h1 id="title">Resume</h1>
            <hr />
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-6 clearfix">
                    <!--                    <h3>My short story</h3>-->
                    <p class="text-justify about-me" ><img width="132" alt="My personal photography" src="/img/me.jpg" class="my-photo img-rounded img"  />

                        Hello! I am an enthusiastic coder who earned bachelor of science at Silesian University of Technology in Computer Science.
                        Information Technology is my passion which I develop every day.
                        The greatest advantages of my is conscientiousness. 
                        When I'm doing something, I'm doing everything possible to achieve the objectives in the shortest possible time, which is often connected with the sleepless nights and the mornings success.
                        I am a very open and willing to pick up new challenges as evidenced by the active websites and the existing good contact with former clients.

                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Work Experience</h3>	
                    <table id="workExpirience">
                        <tr>
                            <td>
                                <p>JAVA Developer</p>
                                <i>Teradata</i>
                            </td>
                            <td class="highlight-text">2015 - now</td>
                        </tr>
                        <tr>
                            <td>
                                <p>JAVA Developer</p>
                                <i>KAMSOFT</i>
                            </td>
                            <td class="highlight-text">2013 - 2015</td>
                        </tr>
                        <tr>
                            <td>
                                <p>PHP developer</p>
                                <i>Miastostrada</i>
                            </td>
                            <td class="highlight-text">2011 - 2013</td>
                        </tr>
<?php /*                       <tr>
                            <td>
                                <p>PHP developer - internship</p>
                                <i>LGBS Software</i>
                            </td>
                            <td class="highlight-text">2013</td>
                        </tr> */ ?>

                        <tr>
                            <td>
                                <p>Trainee - internship</p>
                                <i>IBM</i>
                            </td>
                            <td class="highlight-text">2012</td>
                        </tr> 
<?php /*                      <tr>
                            <td>
                                <p>Technical department trainee - internship</p> 
                                <i>Centrozłom</i>
                            </td>
                            <td class="highlight-text">2011</td>
                        </tr> */ ?>
                    </table>
                    <br />
                </div>

            </div>
        </div>

        <div class="container rounded">
            <div class="row">

                <div class="col-md-6">
                    <h3>Milestones</h3>
                    <div class="milestone">
                        <p>Graduated Silesian University of technology, Faculty of Materials Engineering and Metallurgy, Division of Industrial Informatics</p>
                        <span class="date btn btn-success">2014</span>
                    </div>
                    <div class="milestone">
                        <p>Earned title IBM DB2 Academic Associate: DB2 Database and Application Fundamentals.</p>
                        <span class="date btn btn-success">2013</span>
                    </div>
                    <div class="milestone">
                        <p>Earned Internal Auditor information security management system according to ISO 27001</p>
                        <span class="date btn btn-success">2012</span>
                    </div>
                    <div class="milestone">
                        <p>Earned European Computer Driving Licence - level expert</p>
                        <span class="date btn btn-success">2010</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <h3>How I feel about:</h3> 

                    <!-- BAR CHART >> START -->  
                    <div class="row">
                        <div class="col-md-5">
                            <h4>Data bases</h4> (73%)
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                                    <span class="sr-only">oracle, ibm db2, mysql, postgresql</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4>PHP</h4> (80%)
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">php, mvc, cms, backend, developer</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4>JavaScript</h4> (80%)
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">javascript, jquery, ajax</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4> HTML, CSS </h4>(90%)
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">html, css, web design, template</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4>JAVA</h4><span class="glyphicon glyphicon-heart-empty my-red" ></span>  (75%) 
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                    <span class="sr-only">java, spring, hibernate</span>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h4> Photoshop, Gimp</h4> (40%)
                        </div>
                        <div class="col-md-7">
                            <div class="progress ">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    <span class="sr-only">Graphic, design</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Key technologies</h3>
                    <div id="key-tech">
                        <ul>
                            <li>AJAX</li>
                            <!--<li>AJP Proxy</li>-->
                            <li>Angular 2</li>
                            <!--<li>Apache</li>-->
                            <!--<li>Aper recorders</li>-->
                            <!--<li>Archimate</li>-->
                            <li>Bootstrap 3</li>
                            <!--<li>CCTV</li>-->
                            <li>CSS3</li>
                            <!--<li>DD-WRT</li>-->
                            <!--<li>Dojo Toolkit</li>-->
                            <!--<li>Enterprise Architect</li>-->
                            <!--<li>Gimp</li>-->
                            <!--<li>Hibernate</li>-->
                            <li>HTML5</li>
                            <!--<li>IBM DB2 9</li>-->
                            <!--<li>IBM InfoSphere Streams</li>-->
                            <!--<li>IBM WebSphere</li>-->
                            <li>JAVA 7</li>
                            <!--<li>JBoss</li>-->
                            <li>JIRA</li>
                            <li>jQuery</li>
                            <li>JavaScript (ES 5/6)</li>
                            <!--<li>JSON</li>-->
                            <!--<li>JSP</li>-->
                            <li>jUnit 4</li>
                            <li>LESS</li>
                            <!--<li>Log4J</li>-->
                            <!--<li>Maven</li>-->
                            <!--<li>Microsoft Office</li>-->
                            <li>Mockito</li>
                            <li>MySQL</li>
                            <!--<li>Parallels Plesk Panel 11</li>-->
                            <li>Phonegap</li>
                            <!--<li>Photoshop CS</li>-->
                            <li>PHP5</li>
                            <li>PostgreSQL</li>
                            <!--<li>PRINCE2 </li>-->
                            <li>SoapUI</li>
                            <li>Spring</li>
                            <!--<li>Spring Web Flow 2.3.3</li>-->
                            <li>SVN / GIT</li>
                            <!--<li>UML</li>-->
                            <li>Web services</li>
                            <!--<li>X.509</li>-->
                            <!--<li>Zend</li>-->
                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Additional Skills</h3>
                    <ul>
                        <li>Designing websites with usage of HTML, CSS, JavaScript including jQuery library</li>
                        <li>Adaptations websites to SEO and compatibility to W3C requirements</li>
                        <li>Ability to code in Java, C#, PHP OOP</li>
                        <li>Practical knowledge about Spring framework and Web services in Java</li>
                        <li>Projecting and creating relational data bases in MySQL, DB2,Oracle and PostgreSQL</li>
                        <li>Basic skills at creating raster and vector graphics in Adobe software (Photoshop, Illustrator) and The Gimp</li>
                        <li>Practical knowledge about MVC projecting pattern</li>
                        <li>Creating web applications with usage Kohana framework and ASP.NET MVC 3</li>
                        <li>Configuring Operating systems like Windows and Linux especially Ubuntu distribution</li>
                        <li>Installation CCTV monitoring</li>      
                    </ul>
                </div>
            </div>


<?php /*
            <h3>Download my resume</h3>
            <div class="row">

                <div class="col-md-6">
                    <p class="text-justify">Please donwload my <span class="highlight">Resume</span> in PDF file, 
                        where is described in details my experience and education. You can print it out and pass directly to Your manager. :)
                    </p>

                </div>
                <div class="col-md-3">
                    <br />
                    <a target="_blank" href="/CV-Damian-Wilkolek-EN.pdf" title="Download CV - EN" class="btn-cv btn btn-success"><i class="icon-cloud"></i>  Download CV(en)</a> 


                    <!--                            <a target="_blank" href="/vCard.vcf" title="Pobierz vCard" class="btn-cv btn btn-info"><i class="icon-cloud"></i>  Pobierz vCard</a>
                    -->

                </div>
                <div class="col-md-3">
                    <br />
                    <a target="_blank" href="/CV-Damian-Wilkolek-PL.pdf" title="Download CV - PL" class="btn-cv btn btn-danger"><i class="icon-cloud"></i>  Download CV(pl)</a>

                </div>


            </div>
*/ ?>
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
