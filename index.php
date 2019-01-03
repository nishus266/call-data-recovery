<!doctype html>
<html lang="en">
<?php
$cookie_name = "websiteurl";
$cookie_value = "www.calldatarecovery.com";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$rt=get_client_ip();
include "connect.php";
$sql = "INSERT INTO webip (ip) VALUES ('$rt');";
mysqli_query($conn, $sql);
mysqli_close($conn);
  ?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Nishant Sharma">
<link rel="icon" href="images/logo.png">
<title>Call Data Recovery</title>
    <!-- CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css" >
<style>
#modal-content {
  display: none;
  width:60%;
  position: absolute;
  top:35%;
  background: black;
  opacity: .8;
  left:20%;

  border-radius: 10px;
  animation-name:hjkoj;
  animation-duration: 3s;
animation-iteration-count: infinite;
}
#imge{
  cursor: pointer;
}
#imge:hover{
  opacity:0.6;
  cursor:pointer;
}
.tech{
  float:left;
  width:100%;
  height:700px;
  background: url('images/7.png') no-repeat center;
  margin-top: 80px;
}
.tech1{
  float:left;
  width:100%;
  height:700px;
  background: url('images/8.jpg') no-repeat center;
  margin-top: 80px;
}
#ghjab{
  height:700px;
}
#ghjab1{
  height:700px;
}
#ghjab2{
  height:700px;
}
.helloj{
  margin-top:20px;
  margin-left: 10px;
  font-size:28px;
}
.hellod{
  background-color: black;
  opacity:.7;
  height:150px;
  padding:10px;
  padding-top: 15px;
  border-radius:10px;
  animation-name:hjkoj;
  animation-duration: 3s;
animation-iteration-count: infinite;
}
@keyframes hjkoj {
from{
  background-color: orange;
  opacity:.7;
}
  to{
    background-color: #7D3C98;
    opacity:1;
  }
}
@media screen and (max-width: 480px) {
.tech1{
  display:none;
}
.tech{
  float:left;
  width:100%;
  height:1000px;
  background: url('images/7.png') no-repeat center;
  margin-top: 80px;
}

#modal-content {
  display: none;
  width:70%;
  position: absolute;
  top:35%;
  background: black;
  opacity: .8;
  left:15%;
  padding: 20px;
  border-radius: 40px;
}
.helloj{
  font-size:20px;
}
#ghjab{
  height:450px;
}
#ghjab1{
  height:450px;
}
#ghjab2{
  height:450px;
}
}
</style>
</head>
<body style="background:#DDDDDD;">



<section style="float:left;width:100%;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="position:absolute;top:0px;width:100%;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/2.jpg" alt="First slide" style="width:100%;opacity:.8;" id="ghjab">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/17.jpg" alt="First slide" style="width:100%;opacity:.8;" id="ghjab1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/1.jpg" alt="First slide" style="width:100%;opacity:.8;" id="ghjab2">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<section style="float:left;width:100%;margin-top:700px;">
     <div class="row" style="margin-top:40px;">
       <h2 style="color:#333;margin-left:10%;">High end <span style="color:blue;">Data Recovery</span>
     </div>
     <div class="row" style="margin-top:40px;">
       <div class="col-sm-6">
         <p style="color:#333;margin-left:10%;margin-left:20px;margin-right:20px;" align="left"> Calldatarecovery Data Recovery—established in 1989—is a Professional Data Recovery organization serving corporations, IT professionals, small businesses, and consumers nationwide.</p>
        <img src="images/2.jpg" id="imge" style="width:90%;height:500px;margin-left:10%;" >
       </div>
       <div class="col-sm-5">
         <p style="color:#333;margin-left:5%;margin-left:20px;margin-right:20px;" align="left">Calldatarecovery restores lost, deleted, reformatted, corrupted files, and inaccessible data from various types of digital media, including RAID failure, hard drive crashes, data backup failure, and physical damage, as well as data losses from natural disasters of fire, water, and/or power surges.</p>
          <div class="row">
            <div class="col-sm-5">
            <div class="card" style="width: 88%;margin-left:10%;" id="imge" >
  <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-title">RECOVERY FOR: Android Phone</h6>
  </div>
</div></div>
<div class="col-sm-5">
<div class="card" style="width: 88%;margin-left:10%;" id="imge" >
<img class="card-img-top" src="images/5.jpg" alt="Card image cap">
<div class="card-body">
<h5 class="card-title">RECOVERY FOR: iPhones</h5>
</div>
</div></div>
          </div>

          <div class="row" style="margin-top:12px">
            <div class="col-sm-5">
            <div class="card" style="width: 88%;margin-left:10%;" id="imge" >
  <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
  <div class="card-body">
    <h6 class="card-title">RECOVERY FOR: Macbook</h6>
  </div>
</div></div>
<div class="col-sm-5">
<div class="card" style="width: 88%;margin-left:10%;" id="imge" >
<img class="card-img-top" src="images/6.jpg" alt="Card image cap">
<div class="card-body">
<h6 class="card-title">RECOVERY FOR: iPad</h6>
</div>
</div></div>
          </div>
       </div>
     </div>



</section>

<section class="tech">
  <div class="row">
  <div class="col-sm-6">
  </div>
  <div class="col-sm-6">
  <!--  <h2 style="  margin-top: 10px;">Technology</h2>
  </br></br>
  <i class="fas fa-cog" style="font-size:80px;color:blue;"></i>
</br></br>
<h3 style="color:#333;">Quick Help</h3>
</br>
<p style="color:#333;margin-left:20px;margin-right:20px;"><b>Act with confidence to avoid permanent data loss. Contact Calldatarecovery Data Recovery Atlanta about your failed device.</b></p>
</br></br>
<div class="row">
<div class="col-sm-6">
  <i class="fas fa-trophy" style="font-size:50px;color:blue;"></i>
</br></br>
<h3 style="color:#333;">Our Process</h3>
</br>
<p style="color:#333;margin-left:20px;margin-right:20px;"><b>We provide industry-leading procedures in data recovery services & successfully complete every data recovery job possible.</b></p>
</div>
<div class="col-sm-5">
<i class="fas fa-drafting-compass" style="font-size:50px;color:blue;"></i>
</br></br>
<h3 style="color:#333;">Contact Us</h3>
</br>
<p style="color:#333;margin-left:20px;margin-right:20px;"><b>We are here to help, so let Calldatarecovery be your support for all data recovery needs. We are your trusted data recovery experts.</b></p>
</div>
</div>
</div>-->
</br></br>
<img src="images/21.jpeg" style="width:90%;height:700px;margin-left:5%;">
</div>
</section>
<section class="tech1">
  <div class="col-sm-6" style="margin-top:120px;color:white;margin-left:5%;">
  <h2>What Makes</br>
Our Data Recovery Special</h2>
</br></br>
<p align="left" style="font-size:18px;font-weight:20px;margin-left:20px;margin-right:20px;">
  Go behind the scenes at Calldatarecovery on a special TV broadcast to see how our special processes and tools enable us to recover the “lost data” sent to our lab. Learn about the security measures we take to protect your data like it’s ours, and hear why clients trust us with their clients’ data. See it now.
</br></br>
  Worldwide Business with Kathy Ireland – Fox Business Network. Calldatarecovery Data Recovery is the premier provider of Data Recovery Services for the Southeastern USA. Our Hard Drive Recovery (HDD Recovery) skills are unmatched in the industry. What we do is very simple: We recover data from any digital media. We recover data from RAID Arrays, RAID Corruption, from hard drives such as Samsung, Seagate, and Western Digital, perform flash drive recovery, SD Card Recovery, hard drive repair, iPhone data recovery, MAC Data Recovery.


</p>
  </div>
</section>
<?php include 'footer.php' ?>
  <div id="modal-content">
<div class="hellod">
<h4 style="color:white;font-family:'Trocchi', serif;" class="helloj">Our  Hard  Drive  Recovery  Skills  Are  Unmatched  In  The  Industry</h4>
  </div>


</div>

<?php include 'nav.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="script/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
