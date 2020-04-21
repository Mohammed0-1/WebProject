<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','e-commerce');
          if(mysqli_errno($con)){
            header('location:index.php?errordb=can not connect to database');
          } 
          $query =  "SELECT * FROM product WHERE ProductName LIKE '%".$q."%' ";
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
  ?>