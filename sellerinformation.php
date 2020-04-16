<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mondy | HomePage</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="homepage-User/css/HPstyle.css"/>
	<!-- <link rel="stylesheet" href="homepage-User/css/menustyle.css"/> -->
	<!-- <link rel="stylesheet" href="test123/Seller_info/sellerinfo.css"/> -->




</head>
<body class="hero-section set-bg" data-setbg="img/pic2.jpg"> >
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="redirectToIndex.php" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="redirectToIndex.php" class="active">Seller info</a></li>
			</ul>
			<div class="header-right">
				<div class="user-panel">
					<a href="Logout.php" class="register">Logout</a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<!-- <section class="hero-section set-bg" data-setbg="pic2.jpg"> -->
		<!-- Here Menu Items -->

			 <!-- <div class="row"> -->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              
              <div class="card-body">
            <h3 class="card_title" style="color: blue"> <center> Seller Contact information </center></h3>

                  <h3 id="seller_name">Seller Name : </h3>
                  <h3 id="seller_mail">Seller Email :</h3>
                  <h3 id="seller_num">Seller Number :</h3>
                  
  					 <button class="chat_btn" >Chat!</button>
              </div>
            </div>
          </div>

          
         <script>
        function interestpage() {
        var sellerwindowinformation = window.open("img/pic2.jpg", "input", "width=500px,height=500px");
                              }
                            
          </script>
		</div>
		</div>

		

	</section>
	<!-- Hero Section end -->
	<!-- <section class="hero-section set-bg" data-setbg="pic2.jpg"> -->

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
