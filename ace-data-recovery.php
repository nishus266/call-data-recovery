<html lang="en">
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
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.callda{
color:#444;margin-left:35%;padding :25px;
}
#contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}
@media screen and (max-width: 480px) {
  .callda{
  color:#444;margin-left:20%;padding :25px;font-size:30px;
  }
.contact-form .btnContact {
  width:60%;
}


}
</style>
</head>
<body style="background:#DDDDDD;">
<section style="width:99%;float:left;background:#EEE;margin-top:90px;">
  <section id="contact" style="margin-top:40px;">
      <div class="container">
          <h3 class="text-center text-uppercase">contact us</h3>

          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">call us</h4>
                   <p>+18706399441</p>
                 </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">office loaction</h4>
                  <address>3350 Riverwood Pkwy. Suite 1900 GA Atlanta, US</address>
                 </div>
               </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
              <div class="card border-0">
                 <div class="card-body text-center">
                   <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                   <h4 class="text-uppercase mb-5">email</h4>
                   <p>info@calldatarecovery.com</p>
                 </div>
               </div>
            </div>
          </div>
      </div>
   </section>
  <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="submit.php">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="uname" class="form-control" placeholder="Your Name *" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                      </div>
                    </div>
                </div>
            </form>
</div>
</section>






  <?php include 'nav.php'; ?>

  <?php include 'footer.php' ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="script/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
