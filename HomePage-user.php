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
	<link rel="stylesheet" href="homepage-User/css/menustyle.css"/>
	<link rel="stylesheet" href="homepage-User/css/seller information.css"/>
<script type="text/javascript">
  
function getRes(){
 var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200){
                var workArea = document.getElementById("pageContent");
                workArea.innerHTML = ajax.responseText;
            }
        };
        var query = document.getElementById("searchBar").value;
        ajax.open("GET","searchResult.php?q="+query,true);
                ajax.send();

}

</script>

<script type="text/javascript">
  
  function remove(id){
   var action = window.confirm("Are you sure you want to delete the selected Item?");
   if(action){
    var item = id;
    window.location='delete.php?PID='+item;
   }
  }
</script>

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
        <li><a href="sellerHomepage.php" class="active">Manage Items</a></li>

				<!-- <li><a href="about-us.html">About</a></li> -->
				<!-- <li><a href="#">Buy</a></li> -->
				<!-- <li><a href="contact.html">Contact</a></li> -->

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
		<div class="container">
      <p class="hellodear">Hello: " <?php echo $_SESSION['name'];?>"</p>
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
		


			 <div id ="pageContent" class="row">

          <?php 
          $con = mysqli_connect('localhost','root','','e-commerce');
          if(mysqli_errno($con)){
            header('location:HomePage-user.php?errordb=can not connect to database');
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
              if(strcasecmp($itemSeller,$_SESSION['email']) != 0){
              echo'<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="'.$itempic.'" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#" id="ItemName">'.$itemname.'</a>
                </h4>
                <h5>$'.$itemPrice.'</h5>
                <p class="discription">'.$itemDiscription.'</p>
              </div>
              <div class="card-footer">
                  <p><button>Add to Cart</button></p>
             <p id="interests"><form action="sellerinformation.php" method="get"><input type="hidden" name="itemseller" value = "'.$itemSeller.'">
             <input type="hidden" name="itemid" value = "'.$itemID.'">
             <button style="background-color:red;">Find Out More</button></form></p>
              </div>
            </div>
          </div>';
        }else {
          echo'<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" style="max-width:100% ; hight:200px" src="'.$itempic.'" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#" id="ItemName">'.$itemname.'</a>
                </h4>
                <h5>$'.$itemPrice.'</h5>
                <p class="discription">'.$itemDiscription.'</p>
              </div>
              <div class="card-footer"><form action="EditItem.php" method="get">
              <input type="hidden" name="PID" value="'.$itemID.'">
                  <p><button>Edit Item</button></p></form>
            <p id="interests"><button onclick="remove('.$itemID.')">Delete Item</button></p>
              </div>
            </div>
          </div>';
        }
             
        }
        mysqli_close($con);
              ;?>
          
<div class="sellerwindowinformation"  > </div>
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
