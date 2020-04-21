<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Mondy | HomePage</title>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
  <!--this is a test-->
	<!-- Google font -->
	

 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/HPstyle.css"/>
	<link rel="stylesheet" href="css/menustyle.css"/>
<script type="text/javascript">
  
function getRes(){
 var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200){
                var workArea = document.getElementById("mainContent");
                workArea.innerHTML = ajax.responseText;
            }
        };
        var query = document.getElementById("searchBar").value;
        ajax.open("GET","vsearchResult.php?q="+query,true);
                ajax.send();

}

</script>


</head>
<body >
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
				<!-- <li><a href="about-us.html">About</a></li> -->
				<!-- <li><a href="#">Buy</a></li> -->

				
				<!-- <li><a href="contact.html">Contact</a></li> -->

			</ul>
			<div class="header-right">
				<div class="user-panel">
					<a href="LoginPage.php" class="login">Sign in</a>
					<a href="SignUp.php" class="register">Join us</a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Hero Section end -->
	<section class="hero-section set-bg" data-setbg="img/pic2.jpg">
		<div class="container">
			<div class="hero-warp">
<form class="main-search-form" >
          <div class="search-type">
            <div class="st-item">
              
            </div>                                                           
          </div>
          <div class="search-input">
            <input name ="search" type="text" id="searchBar" placeholder="Search for something to buy">
            <button class="site-btn" type="button" onclick="getRes()">Search</button>
          </div>
          <div class="all">

          </div>
          
        </form>
			</div>
		</div>

		<!-- Here Menu Items -->
		
		<!-- Here Menu Items -->
		


			 <div class="row" id="mainContent">

          <?php 
          $con = mysqli_connect('localhost','root','','e-commerce');
          if(mysqli_errno($con)){
            header('location:index.php?errordb=can not connect to database');
          } 
          $query = "SELECT * FROM product ";
          $result = mysqli_query($con,$query);
            for ($i =0; $i < min(9, mysqli_num_rows($result));$i++){
                 $row = mysqli_fetch_row($result);
              $itemID = $row[0];
              $itemname = $row[1];
              $itemPrice = $row[2];
              $itemDiscription = $row[3];
              $itempic = $row[4];
              $itemSeller = $row[5];
              echo'<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#" id="ItemName">'.$itemname.'</a>
                </h4>
                <p class="discription">'.$itemDiscription.'</p>
              </div>
              <div class="card-footer">
              </div>
            </div>
          </div>';
        }
        mysqli_close($con);
              ;?>

        </div>
		</div>
		</div>

		

	</section>
	<!-- Hero Section end -->
	<section class="hero-section set-bg" data-setbg="img/pic2.jpg">
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
