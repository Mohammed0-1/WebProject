<?php
session_start();
echo "string";
if (!isset($_SESSION['email'])) {
  header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mange items for seller</title>
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
	<link rel="stylesheet" href="css/HPstyle.css"/>
	<link rel="stylesheet" href="css/menustyle.css"/>
	<link rel="stylesheet" href="css/seller information.css"/>




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
				<li><a href="redirectToIndex.php"  class="active">Home</a></li>
        <li><a href="#" class="active">Seller Page</a></li>

				<!-- <li><a href="about-us.html">About</a></li> -->
				<!-- <li><a href="#">Buy</a></li> -->
				<!-- <li><a href="contact.html">Contact</a></li> -->

			</ul>
			<div class="header-right">
				<div class="user-panel">

					<a href="#" class="login">interests</a>
					<a href="Logout.php" class="register">Logout</a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<!-- <section class="hero-section set-bg" data-setbg="pic2.jpg"> -->
		<div class="container">
      <p id="hellodear">Hello dear : Adidas seller</p>
            <button onclick="additem()" class="site-btn">Add Item</button>

			<div class="hero-warp">
				<form class="main-search-form">
					<div class="search-type">
						<div class="st-item">
							
						</div>                                                           
					</div>
					<div class="search-input">
						<input type="text" placeholder="Search for something ">
						<button class="site-btn">Search</button>
					</div>
					<div class="all">

					</div>
					
				</form>
			</div>
		</div>

		<!-- Here Menu Items -->
		


			 <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/adidastshirt.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Adidas tshirt</a>
                </h4>
                <h5>$24.99</h5>
                <p class="discription"> All cotton , Black Logo at front!</p>
              </div>
              <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					 <p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/pumashoes.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Puma shoes</a>
                </h4>
                <h5>$34.99</h5>
                <p class="discription">Extractor Walking Shoes For Men  (Grey) </p>
              </div>
              <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					<p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/nbshort.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">NB short</a>
                </h4>
                <h5>$16.99</h5>
                <p class="discription">men's lounge short from New Balance , black !</p>
              </div>
               <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					<p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/niketshort.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Nike tshirt</a>
                </h4>
                <h5>$19.99</h5>
                <p class="discription"> Nike Mens AIR MAX , blue</p>
              </div>
               <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					<p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/adidasshooes.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Adidas Shoes</a>
                </h4>
                <h5>$44.99</h5>
                <p class="discription"> est adidas running shoes – 2019 </p>
              </div>
               <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					<p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="(from seller )" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                	<p><button>Edit Item</button></p>
  					<p id="interests"><button>Delete Item</button></p>
              </div>
            </div>
          </div>
			 
		</div>
		</div>

		 <script>
        function additem() {
        var sellerwindowinformation = window.open("AddItem.html", "input", "width=500px,height=740px");
                              }
                            
          </script>

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
