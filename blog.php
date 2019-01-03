<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Nishant Sharma">
<link rel="icon" href="images/logo.png">
<title>Blog | Call Data Recovery</title>
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
img{
  width:300px;
  height:200px;
}
   </style>
</head>
<body data-spy="scroll" data-target="#navbar-example2">

<section class="content" style="float:left;width:100%;margin-top:90px;background:#eee;">
  <div class="container">
    <div class="row" style="background:#eee;font-family: 'Roboto Condensed';padding:40px;">
      <div class="col-sm-8">
      <h3 >Blog</h3>
      <?php
      include "connect.php";

      $sql="SELECT * from websolblog";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        $counter=1;
          while($row = mysqli_fetch_assoc($result)) {
              echo("<div class=\"card\" style=\"margin-top:20px;\">");
               echo("<div class=\"card-header\">");
               echo($row['title']);
               echo("</div>
               <div class=\"card-body\">
                 <p class=\"card-text\">".substr($row['article'], 0, 200)."</p>")  ;
                    echo("<a href=\"read.php?var=".$row['id']."&topic=".$row['title']."\" class=\"btn btn-primary\">Read Blog</a>");
                    echo(  "</div>
                    </div>");
          }
      } else {
          echo "No Blog";
      }
       ?>








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
