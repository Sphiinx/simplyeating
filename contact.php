<!--Start of the HTML document-->
<!DOCTYPE html>

<!--Start of the Head-->
<head>
<!--Start of the website title-->
    <title>SimplyEating - Contact</title>
<!--Website SEO Description-->
    <meta charset="utf-8" name="description" content="SimplyEating is a healthy eating website built for the use of everyone. We offer a large variety of information, guides and more on the subject of fitness and healthy eating. Anyone from young to old can browse our easily navigable website to find what they need.">
<!--Website Scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Import for Bootstrap CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
<!--Import for Main CSS-->
    <link href="css/main.css" rel="stylesheet">
<!--Import for Website Responsive CSS-->
    <link href="css/responsive.css" rel="stylesheet">
<!--Import for Website Homepage Smoothscroll CSS-->
    <link href="css/scrolling-nav.css" rel="stylesheet">
<!--Import for Website Homepage CSS-->
    <link href="css/header.css" rel="stylesheet">
<!--Import for Contact CSS-->
    <link href="css/contact.css" rel="stylesheet">
<!--Import for Website Favicon-->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<!--Import for Google Font-->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC' rel='stylesheet' type='text/css'>
<!--Import for Google Font-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<!--Google Analytics Tracking-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76638400-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<!--End of the Head-->

<!--Start of the Body-->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
<!--Social Button Sidebar-->
    <aside class="social-sidebar">
        <ul class="social-list">
            <a href="https://www.facebook.com/OFCSimplyEating" target="_blank">
                <li class="facebook">
                    <img class="social-button" src="images/social-buttons/Facebook.png"/>
                </li>
            </a>
            <a href="https://plus.google.com/114902411548945294415/posts" target="_blank">
                <li class="google">
                    <img class="social-button" src="images/social-buttons/Google.png" target="_blank"/>
                </li>
            </a>
            <a href="https://twitter.com/OFCSimplyEating" target="_blank">
                <li class="twitter">
                    <img class="social-button" src="images/social-buttons/Twitter.png"/>
                </li>
            </a>
            <a href="https://www.pinterest.com/simplyeating/" target="_blank">
                <li class="pinterest">
                    <img class="social-button" src="images/social-buttons/Pinterest.png" target="_blank"/>
                </li>
            </a>
        </ul>
    </aside>
<!--End of the Social Button Sidebar-->

<!--Start of the NavBar-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid header-navbar-container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="page-scroll" href="index.html#intro">
                    <img class="logo" src="images/logos/mainlogo.png" alt="SimplyEating" height="65" width="65">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="index.html#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#eathealthy">EAT HEALTHY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#fitness">FITNESS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#lifestyle">LIFESTYLE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--End of the NavBar-->
    
<!--Intro Section-->
    <section id="intro" class="intro-header" data-bg-color="#111" data-overlay-opacity="0.8">
        <div class="container">
            <div class="row come-in">
                <div class="col-lg-12">
                    <h1>
                        CONTACT US!
                    </h1>
                    <div class="local-scroll">
                        <a class="page-scroll scroll-down text-effect glyphicon-size-big" href="#main">
                            <span class="glyphicon-up-size glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of the Intro Section-->
    
<!--Contact Form Section-->
    <section class="container" id="main">
        <div class="jumbotron">
            <div class="contact-container">
                <h2 class="">
                    Contact Form
                </h2>
                <hr class="hr-style"/>
                <form class="contact-form" action="php/mail.php" method="POST">
                    <div class="smallContainer">
                        <div class="contactLeft">
                            <h6>Name</h6>
                        </div>
                        <input class="contact-input" name="name" type="text" required></input>
                    </div>
                    <div class="smallContainer">
                        <div class="contactLeft">
                            <h6>E-mail</h6>
                        </div>
                            <input class="contact-input" name="email" type="text" required></input>
                    </div>
                    <div class="smallContainer">
                        <div class="contactLeft">
                            <h6>Subject</h6>
                        </div>
                        <input class="contact-input" name="subject" type="text" required></input>
                    </div>
                    <div class="smallContainer">
                        <div class="contactLeft">
                            <h6>Your Message</h6>
                        </div>
                        <textarea class="contact-textarea" name="message" rows="6" required></textarea>
                    </div>
                    <input class="submit button_sliding" type="submit" value="SEND"></input>
                </form>
                <div class="contact-social">
                    <div class="contact-social-left">
                        <a href="https://www.facebook.com/OFCSimplyEating" target="_blank">
                            <img src="images/social-buttons/Facebook.png" class="social-btn" name="facebook-social"/>
                        </a>
                        <a href="https://plus.google.com/114902411548945294415/posts" target="_blank">
                            <img src="images/social-buttons/Google.png" class="social-btn" name="googleplus-social"/>
                        <a href="https://twitter.com/OFCSimplyEating" target="_blank">
                            <img src="images/social-buttons/Twitter.png" class="social-btn" name="twitter-social"/>
                        </a>
                        <a href="https://www.pinterest.com/simplyeating/" target="_blank">
                            <img src="images/social-buttons/Pinterest.png" class="social-btn" name="pinterest-social"/>
                        </a>
                    </div>
                    <div class="contact-social-right">
                        <h4>SimplyEating</h4>
                        <p>
                            <h4>1 (208) 557-3242</h4>
                            <h4>
                                <a class="a-new" href="mailto:simplyeatinghelp.co.nf">info@SimplyEating.co.nf</a>
                            </h4>
                        </p>
                            <h4>Coeur d'Alene, Idaho, United States</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End of the Contact Form Section-->
     
<!--Start of the footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 footer-logo">
                    <a class="page-scroll" href="index.html#intro">
                        <img class="logo" src="images/logos/mainlogo.png" alt="SimplyEating" height="65" width="65">
                    </a>
                </div>
                <div class="col-sm-6">
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/OFCSimplyEating" target="_blank">FACEBOOK</a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/114902411548945294415/posts" target="_blank">GOOGLE PLUS</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/OFCSimplyEating" target="_blank">TWITTER</a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/simplyeating/" target="_blank">PINTEREST</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                    <hr class="hr-style">
                <div class="col-sm-6 col-sm-offset-3 text-center footer-content">
                    <p class="navbar-text">Copyright © 2016 SimplyEating | <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-use.html">Terms of Use</a> | <a href="about.html">About</a> | <a href="contact.php">Contact</a></p>
                </div>
                <div class="col-sm-3">
                    <div class="pull-right">
                        <a class="page-scroll text-effect" href="#page-top">
                            <span class="glyphicon-size-big glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!--End of the Footer Section-->
    
<!-- Import for JQuery -->
    <script src="js/jquery.js"></script>
<!-- Import for Bootstrap Javascript -->
    <script src="js/bootstrap.min.js"></script>
<!-- Import for Homepage Smoothscroll Javascript -->
    <script src="js/jquery.easing.min.js"></script>
<!-- Import for Homepage Smoothscroll Javascript -->
    <script src="js/scrolling-nav.js"></script>
        
</body>
<!--End of the Body-->
</html>
<!--End of the HTML Document-->