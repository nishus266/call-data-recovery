<style>
input{
width:80%;
border: none;
height: 30px;
margin-left: 10px;
}

#call{
  position: fixed;
  top:69%;
  right:1%;
  display: none;
  background: #00838f;
  animation-name:hjk;
  animation-duration: 1s;
animation-iteration-count: infinite;
}
#call1{
  position: fixed;
  top:80%;
  right:1%;
  background: #00838f;

}
.hoo{
  animation-name:hjki;
  animation-duration: 3s;
animation-iteration-count: infinite;
}
@keyframes hjk {
from{
  background-color: #00838f;
}
  to{
    background-color: #FF0044;
  }
}
@keyframes hjki {
from{
  color: white;
}
  to{
    color: #FF0044;
  }
}

@media screen and (max-width: 480px) {
  .open{
    display: none;
  }
  #call{
    display: block;
  }
  #navbarNav{
background-color: black;
width:100%;
padding:40px;

}
  #navbarNavAltMarkup{
background-color: black;
width:100%;
padding:40px;

}
#navdef a{
  margin-left:1%;
}


}
.sidenav {
    height: 80%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 13%; /* Stay at the top */
    right: 0;
    background-color: #eee; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}

}
.open{
  position: fixed;
  top:69%;
  right:1%;
  color:white;
  background: #00838f;
  animation-name:hjk;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  width:160px;
  font-size:16px;
  padding: 10px;
  padding-left: 30px;
  cursor: pointer;
  border-radius: 5px;
  height:50px;
}
.open:hover{
  background: black;
}

@media screen and (max-width: 480px) {
.open{
  background-color: green;
  position:fixed;
  top:72%;
  right:0%;
  color:white;

  width:110px;
  font-size:14px;
  padding: 10px;
  padding-left: 30px;
  cursor: pointer;
  border-radius: 5px;
}
.open:hover{
  background: black;
}
}

</style>

<a class="btn btn-sucess" href="tel:+18706399441" id="call" style="color:white;height:50px;width:160px;font-size:20px;"><i class="fas fa-phone" style="color:white;"></i> CALL US</a>
<a class="btn btn-sucess" href="location.php" id="call1" style="color:white;height:70px;width:160px;font-size:17px;"><i  class="fas fa-map-marker-alt" style="color:white;"></i> Our Services</br> Network</a>
<span onclick="openNav()" class="open">LETS CONNECT</span>


<nav class="navbar navbar-expand-lg"  id="navfg">
  <a class="navbar-brand" href="index.php"><h3 class="hoo">Calldatarecovery.com</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:white;font-size:30px;"></i></br><p style="font-size:12px;color:white;">Menu</p></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" id="navdef">
      <a class="nav-item nav-link" href="index.php" style="color:white;">Home </a>
      <a class="nav-item nav-link" href="products.php" style="color:white;">Hard Drive Data Recovery</a>
      <a class="nav-item nav-link" href="ssd-data-recovery.php" style="color:white;">SSD Data Recovery</a>
      <a class="nav-item nav-link" href="apple-mac-data-recovery-services.php" style="color:white;">Apple Data Recovery</a>
      <a class="nav-item nav-link" href="data-recovery-services-for-android-smartphones-and-tablets.php" style="color:white;">Android Phone and Tablets</a>
      <a class="nav-item nav-link" href="ace-data-recovery.php" style="color:white;">Contact Us</a>
      <a class="nav-item nav-link" href="blog.php" style="color:white;">Blog</a>

    </div>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<form action="submit.php" method="post">
</br>
  <input type="text" placeholder="  Your Name*" name="uname" required>
</br></br>
  <input type="email" placeholder="  E-mail*" name="email" required>
</br></br>
  <input type="text" placeholder="  Phone*" name="phone" required>
</br></br>
  <input type="text" placeholder="  Subject*"  name="subject" required>
</br></br>
  <input type="text" placeholder="  Message*" name="message" style="height:70px;"required>
</br></br>
  <button class="btn btn-primary" style="margin-left:5%;"><span>Submit </span></button>
</form>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
