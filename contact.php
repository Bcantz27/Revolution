<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Workplace Logistics Revolution Enterprises LLC is built on a foundation of experienced people offering sustainable solutions and practices. We are committed to restoring the underlying principle of business; service. We are in business to form partnerships with other businesses that can assist in meeting your needs.">
    <meta name="author" content="Bryan Cantz">

    <title>Revolution Enterprises - Contact</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
	<link rel="icon" href="./favicon.png" />

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-63178464-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <!-- Navigation -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="index.html"><img src="images/Revolution%20Logo.jpeg" class="img-responsive"></a>
        </div>
    </div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav-list">
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="./about.html">About</a>
                    </li>
                    <li>
                        <a href="./services.html">Services</a>
                    </li>
                    <li>
                        <a href="./contact.php" class="active">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us!
                    <!--<small>Subheading</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <img class="img-responsive" src="./images/contact.JPG" alt="">
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h2>Contact Details</h2>
                <hr>
                <h4>Natalie Mele</h4>
<!--                <p>
                    17 Cambridge Rd.<br>Broomall, PA 19008<br>
                </p>-->
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (865) 371-3387</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">nmele@revolutionllc.net</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 7:00 AM to 6:00 PM EST</p>
                <hr>
                <h4>Edward Cantz</h4>
<!--                <p>
                    17 Cambridge Rd.<br>Broomall, PA 19008<br>
                </p>-->
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (484) 753-3087</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">ecantz@revolutionllc.net</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 7:00 AM to 6:00 PM EST</p>
                <hr>
            </div>
        </div>
        <!-- /.row -->

<!--        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>

                <?php
                //init variables
                $cf = array();
                $sr = false;

                if(isset($_SESSION['cf_returndata'])){
                    $cf = $_SESSION['cf_returndata'];
                    $sr = true;
                }
                ?>

                <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
                <form method="post" action="process.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="done" id="submit" class="btn btn-primary" value="Submit">
                </form>
                <?php unset($_SESSION['cf_returndata']); ?>
            </div>
        </div>-->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Revolution Enterprises 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
