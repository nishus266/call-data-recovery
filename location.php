
<?php echo('<?xml version=\"1.0\" encoding=\"utf-8\"?'); ?>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="Nishant Sharma" />
<link rel="icon" href="images/logo.png" />
<title>Call Data Recovery </title>
    <!-- CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="svg/main.css" />
<style>

.callda{
color:#444;
margin-left:35%;
padding :25px;
}
.expand1{
  display:none;
}
.expand{
  float:right;margin-right:50px;
  width:400px;
}
@media screen and (max-width: 480px){
  .callda{
  color:#444;
  margin-left:20%;
  padding :25px;
  font-size:30px;
  }
  .expand{
    display: none;
  }
  .expand1{
    display: block;
    float:left;margin-left:50px;
    margin-top:-150px;
    width:50%;
  }

}
</style>
</head>
<body style="background:#DDDDDD;">

<section style="float:left;width:99%;background:#EEE;margin-top:90px;">
      <h3 class="text-center text-uppercase " style="margin-top:20px;font-size:25px;font-weight:25px;">Our Services Locations</h3>
<img src="images/23-f.png" class="expand">
      <div id="info-box"></div>

  <?php include 'svg.php'; ?>
<img src="images/23-f.png" class="expand1">
</section>





  <?php include 'nav.php'; ?>

  <?php include 'footer.php' ?>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="svg/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="script/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
