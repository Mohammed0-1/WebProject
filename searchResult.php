<?php
session_start();
if(!isset($_GET['q'])){
  header('location:HomePage-user.php');
  exit();
}
			 $q = $_GET['q'];
			 $con = mysqli_connect('localhost','root','','e-commerce');
			 if(mysqli_errno($con)){
			 	header('location:HomePage-user.php');
			 }
			 $query = "SELECT * FROM product WHERE ProductName LIKE '%".$q."%' ";
          $result = mysqli_query($con,$query);
            for ($i =0; $i < min(6, mysqli_num_rows($result));$i++){
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
             <button>Find Out More</button></form></p>
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

			 ?>   