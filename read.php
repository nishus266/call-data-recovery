<?php

$var1=$_GET['var'];
include "connect.php";

$sql="SELECT * from websolblog where id='$var1';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $title=$row['title'];
       $article=$row['article'];

    }
} else {
    echo "No Blog";
}
 ?>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="Nishant Sharma">
 <link rel="icon" href="images/logo.png">
 <title><?php echo($title); ?> | Call Data Recovery</title>
     <!-- CSS -->

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="css/main.css" >
 <style>

 .callda{
 color:#444;margin-left:35%;padding :25px;
 }
 @media screen and (max-width: 480px) {
   .callda{
   color:#444;margin-left:20%;padding :25px;font-size:30px;
   }
   .title{
     color:white;
   font-size: 30px;
   }


 }
    .accordion {
       background-color: #eee;
       color: #444;
       cursor: pointer;
       padding: 18px;
       width: 100%;
       border: none;
       text-align: left;
       outline: none;
       font-size: 15px;
       transition: 0.4s;
   }

   .active, .accordion:hover {
       background-color: #ccc;
   }

   .panel {
       padding: 0 18px;
       display: none;
       background-color: white;
       overflow: hidden;
   }
#main img{
width:100% !important;
height:450px;
opacity: .7;
}
body{
  background: white;
}
.title{
  color:white;
font-size: 60px;
}
#titlediv{
  width:60%;
padding-top: 50px;
margin-top:100px;
  background-image: linear-gradient(to left bottom, #7e55bd, #3EA2EA);height:500px;
}
@media screen and (max-width: 480px) {
  .title{
    color:white;
  font-size: 30px;
  }
  #titlediv{
  padding-top: 0px;
  margin-top:100px;
  width:100%;
    background-image: linear-gradient(to left bottom, #7e55bd, #3EA2EA);height:300px;
  }
  #main img{
  width:100% !important;
  height:300px;
  opacity: .8;
  }
}

   </style>
</head>
<body data-spy="scroll" data-target="#navbar-example2">
<section class="content" style="float:left;width:100%;margin-top:90px;background-image: linear-gradient(to left bottom, #2DA2C5, #7e55bd);height:700px;text-align:center;">
<div class="container" id="titlediv">
</br></br></br></br>
  <h1 class="title"><?php echo($title) ?> </h1>
</div>
</section>
<section class="content" style="float:left;width:100%;margin-top:90px;">
  <div class="container">
    <div class="row" style="font-family: 'Roboto Condensed';padding:40px;">
<div class="row" id="main">
  <p style="margin-top:40px;font-size:30px;color:#333;width:90%;line-height: 1.6;
    margin-bottom: 1rem;
    text-rendering: optimizeLegibility;font-size: 1.5rem;"><?php echo($article); ?></p>
</div>








    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>
</section>




<?php include 'footer.php'; ?>
  <?php include 'nav.php'; ?>
       <!--script-->
       <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <script src="script/main.js"></script>
       <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
  </body>
  </html>
