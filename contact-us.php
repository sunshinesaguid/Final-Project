<?php
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['submit'])) {
    //Verifying CSRF Token
    if (!empty($_POST['csrftoken'])) {
        if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['message'];
            $st1 = '1';
            $query = mysqli_query($con, "insert into tblcontact(name,email,comment,status) values('$name','$email','$comment','$st1')");
            if ($query):
                echo "<script>alert('Message Sent Successfully');</script>";
                //   unset($_SESSION['token']);
            else:
                echo "<script>alert('Something went wrong. Please try again.');</script>";

            endif;

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <title>Contact US - CurdOperation </title>
    <meta name="description"
        content="Contact to CurdOperation Have questions about background screening? Our entire team receives specialized training regularly to ensure you’re receiving the best information possible. " />
    <meta name="keywords" content="contact CurdOperation , Contact CurdOperation.com" />


    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://s.w.org/" />

    <link rel="stylesheet" href="./css/bootstarp.css" media="all" />
    <link rel="stylesheet" href="./css/style.css" media="all" />

    <meta name="generator" content="php" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- extra lunk -->
    <meta name="apple-mobile-web-app-title" content="Contact US - CurdOperation" />

</head>

<body class="home blog custom-background wp-custom-logo full-width font-family hfeed">
    <!--Skippy-->
    <a id="skippy" class="visually-hidden-focusable" href="#content">
        <div class="container">
            <span class="skiplink-text">Skip to content</span>
        </div>
    </a>

    <div class="bg-image"></div>

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!--Header start-->
        <?php include("./includes/header.php"); ?>

        <!-- main menu -->
        <?php include("./includes/navbar.php"); ?>

        <main id="content">
            <div class="container">
                <div class="row">
                    <!--breadcrumb-->
                    <div class="col-12">
                        <div class="breadcrumb u-breadcrumb  pt-3 px-0 mb-0 bg-transparent small"><a
                                class="breadcrumb-item" href="#">Home</a>&nbsp;&nbsp;»&nbsp;&nbsp;Contact Us</div>
                    </div>
                </div>


                <div class="row">
                    <!-- main content -->
                    <div class="col-md-8">


                        <article class="post-782 page type-page status-publish hentry" id="post-782">

                            <header class="entry-header post-title">

                                <h1 class="entry-title h1 display-4-md display-3-lg mt-2">Contact Us</h1>
                            </header><!-- .entry-header -->


                            <div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</div>
        
        <div class="section section-map">


	        		<div class="col-sm-12" style="padding:0;">
	        			<!-- Map -->
	        			<div id="contact-us-map">
                        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.457655013178!2d121.8287969027637!3d13.44342939936615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab08e071e6f9d3%3A0x0!2sTanza%2C%20Boac%2C%20Marinduque%2C%20Philippines!5e0!3m2!1sen!2sus!4v1620215072761!5m2!1sen!2sus"></iframe>
							<br />
							<small>
								<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.457655013178!2d121.8287969027637!3d13.44342939936615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab08e071e6f9d3%3A0x0!2sTanza%2C%20Boac%2C%20Marinduque%2C%20Philippines!5e0!3m2!1sen!2sus!4v1620215072761!5m2!1sen!2sus"></a>
							</small>
							</iframe>
	        			</div>
	        			<!-- End Map -->
					</div>


	    </div>

        <div class="section">
	    	<div class="container">
	        	<div class="row">
					<h3>Get in Touch with Us</h3>
					</hr>
	        		<div class="col-sm-6">
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Address:</b> Tanza, Boac, Marinduque<br/>
	        				<b>Phone:</b> +63 992 665 775<br/>
	        				<b>Email:</b> <a href="myblog@gmail.com">myblog@gmail.com</a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-6">

	        		</div>
	        	</div>
	    	</div>
	    </div>


                            <footer class="entry-footer">


                            </footer><!-- .entry-footer -->

                        </article><!-- #post-## -->

                    </div>
                    <!-- left sidebar check -->

                    <!-- right sidebar check -->


                    <aside class="col-md-4 widget-area end-sidebar-lg" id="right-sidebar" style="position: relative;">

                        <div class="" style="position: static; left: auto; width: 281px;">
                            <?php include("./supportpage/socialmedia.php"); ?>
                            <?php include("./supportpage/people-liked.php"); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </main>

        <!--Footer start-->
        <?php include("./includes/footer.php") ?>
    </div>
    <!-- ========== END WRAPPER ========== -->

    <!--Back to top-->
    <a class="back-top btn btn-light border position-fixed r-1 b-1" href="#">
        <svg class="bi bi-arrow-up" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <script async src="js/bundle.min.js" id="bootnews-scripts-js"></script>
    <script async src="./js/embed.min.js" id="wp-embed-js"></script>
</body>

</html>