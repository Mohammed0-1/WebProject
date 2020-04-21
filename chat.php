<<?php 
session_start();
 ?>
<!DOCTYPE html>

<html>
<head>
<title>Chat ! </title>
<link type="text/css" rel="stylesheet" href="chat.css" />

<script type="text/javascript">
    
    function getmsgs(){
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
            if(ajax.readyState == 4 && ajax.status == 200){
                var workArea = document.getElementById("chatbox");
                workArea.innerHTML = ajax.responseText;
            }
        };
        var msg = document.getElementById("usermsg").value;
        var recName = document.getElementById("recName").value;
        var recEmail = document.getElementById("recEmail").value;
        ajax.open("GET","messages.php?msg="+msg+"&name="+recName+"&email="+recEmail,true);
                ajax.send();
        
    }
</script>
</head>

     

 <body class="bg-img" >
<div  id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b></b></p>
        <a  onclick="closeWin()" id="exit" href="close">Exit Chat</a>
        <div style="clear:both"></div>

    </div>
     
    <div id="chatbox">   <?php
     $sender = $_SESSION['email'];
$receiver = $_GET['email'];
$con = mysqli_connect('localhost','root','','e-commerce');
$select = "SELECT * FROM message WHERE (Sender = '$sender' AND Receiver = '$receiver') OR (Sender = '$receiver' AND Receiver = '$sender')";
$result = mysqli_query($con,$select);
    for($i =0; $i<mysqli_num_rows($result);$i++){
        $row = mysqli_fetch_row($result);
        $sndr = $row[0];
        $rcvr = $row[1];
        $cont = $row[2];
        $time = $row[3];
        echo '['.$time.'] '.$sndr.': '.$cont.'<br>';
    }
    mysqli_close($con);
     ?></div>

    <form name="message">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" onclick="getmsgs()" type="button"  id="submitmsg" value="Send" />
    </form>
    <?php
    echo'<form> <input type="hidden" id="recName" value="'.$_GET['name'].'"> <input type="hidden" id="recEmail" value="'.$_GET['email'].'"></form>';?>
    </div>
      




        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <script type="text/javascript">
// jQuery Document
        $(document).ready(function(){
 
                            });
        

        function closeWin() {
         myWindow = window.close("chat.html")
            }

</script>
</div>
</div>
</body>
</html>