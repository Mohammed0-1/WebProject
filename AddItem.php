<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('location:index.html');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Add item </title>
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
				<li><a href="redirectToIndex.php" class="active">Home</a></li>
				<li><a href="#" class="active">Add item</a></li>

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
		
      <p id="hellodear">Hello dear : Adidas seller</p>

		<!-- Here Menu Items -->
		

		 <form method="post" action="insertItem.php">
			 <div class="row">

          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card h-100">
                <h4 class="card-title">
                  Add Item
                </h4>
                <?php
    if (isset($_GET['inserted'])) {
        echo "<div class='alert alert-success' role='alert'>" . $_GET['inserted'] . " !</div>";
    }
    ?>
                <?php
					if(isset($_GET['error'])){
						echo "<div class='alert alert-danger' role='alert'>" . $_GET['error'] . " !</div>";
				}
					?>

           <input id="ItemName" type="text" name="ItemName" placeholder=" Item name" required="required" style="text-align: center" >


          <input type="number" min="0" max="1000" step="1" name="Price" class="inputprice" required="required" placeholder="Price $ ">

           <input id="discription" type="text" name="discription" placeholder="Discription" required="required" style="text-align: center" >
            
            <h6 style="color: red"> Please enter img URL</h6>
           
           <input id="uploadimglink"  type="url" name="uploadimglink" placeholder="URL" required="required" style="text-align: center" >
              <div class="card-footer">
  					 <div>
                <button id="addbtn" type="submit" >Submit</button>
             </div>
             
              </div>
          </form>
            </div>
          </div>
          </form>
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
