<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="OsOc website">
  <meta name="author" content="OsOc Team">
  <title>About US|OSOC</title>
    <script src="1/js/jquery.js"></script>
		<script src="1/js/modernizr.js"></script>
  	<script src="1/js/particles.js"></script>
	<link rel="stylesheet" href="1/css/style1.css" />
	<script src="1/js/jquery-2.1.1.js"></script>
<script src="1/js/main.js"></script> 

  <link href="1/css/bootstrap.min.css" rel="stylesheet">
  <link href="1/css/style.css" rel="stylesheet">
  <link href="1/css/themify-icons.css" rel="stylesheet">
  <link href='1/css/dosis-font.css' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
      <?php
session_start();
?>
    </head>
    <body>
	<canvas id="particles" style="">
		</canvas>

		<script src="1/js/basic.js"></script>
    <nav class="navbar navbar-default"  id ="nav" style="margin-top:-600px;background-color:#00111a;border-style:none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="background-color:#00111a;font-size:28px;color:white;cursor:default;">OSOC</a>
    </div>
    <ul class="nav navbar-nav" >
      <li><a href="index.php" style="color:white;" >Home</a></li>
      <li ><a href="events.php" style="color:white;acitive:none;">Events</a></li>

      <li class="active"><a href="#" style="color:white;">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li><a href="#"style="color:white;acitive:none;margin-right:20px;" onclick="myfun()"><?php if($_SESSION['log']==1){echo "Sign-Out";}else{echo "Sign-In";}?></a></li>

      </ul>
  </div>
</nav>
<div class="container-fluid">
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <h1>Attend the Technical Event Of 2018</h1>
            <h3>To Inhance Your Technical Skills </h3>
            <h4>10<sup>th</sup> - 11<sup>th</sup>  March, 2018</h4>

          </div>
          <div class="col-md-5 hidden-xs">
            <img src="" class="rocket animated bounce" id="logo1" style="margin-top:50px;">
          </div>
        </div>
       <div class="row me-row content-ct speaker" id="speakers" style="color:white;margin-left:10px;">
          <h2 class="row-title">Meet the Team 2k17</h2>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/3.jpg" class="speaker-img">
            <h3>Shubham Sharma</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/9669051971sss"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/4.jpg" class="speaker-img">
            <h3>ATHEEK MOHAMMAD</h3>
           <ul class="speaker-social">
              <li><a href="https://www.facebook.com/atheek.mohammad"><span class="ti-facebook"></span></a></li>
            
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/11.png" class="speaker-img" style="height:150px;">
            <h3>KHUSHALI  PORWAL</h3>
           <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/10.png" class="speaker-img" style="height:150px;">
            <h3>DIMPLE MAHESHWARI</h3>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/dimple.maheshwari.904"><span class="ti-facebook"></span></a></li>
             
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/16.jpg" class="speaker-img" style="border-radius:50%;height:150px;">
            <h3>VIVEK XESS</h3>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/Vivekxess1995"><span class="ti-facebook"></span></a></li>
              
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature" >
            <img src="1/img/8.jpg" class="speaker-img" style="height:px;">
            <h3>HARMIT SINGH </h3>
           <ul class="speaker-social">
              <li><a href="https://www.facebook.com/harmitsingh.bhatia"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
            <div class="col-md-4 col-sm-6 feature" style="margin-left:00px;">
            <img src="1/img/15.jpg" class="speaker-img" style="height:150px;">
            <h3>PAL SANJAY</h3>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/sanjay.pal.146612"><span class="ti-facebook"></span></a></li>
             
            </ul>
          </div>
        </div>
        <div class="row me-row content-ct speaker" id="speakers" style="color:white;margin-left:10px;">
          <h2 class="row-title">Meet the Team 2k18</h2>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/kaa.jpg" class="speaker-img">
            <h3>Kshitiz Arora</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/kshitizaol"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/ak1.jpg" class="speaker-img" style="height:150px;">
            <h3>Ankita Gupta</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/ankita.gupta.98434"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
            <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/pg.jpg" class="speaker-img" style="height:150px;">
            <h3>Prajjwal Gupta</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/prajjwal.gupta.3781"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
            <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/sl.jpg" class="speaker-img" style="height:150px;">
            <h3>Surendra Lodhi</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="https://www.facebook.com/surendra.lodhi.399"><span class="ti-facebook"></span></a></li>

            </ul>
          </div>
             <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/ms.jpg" class="speaker-img" style="height:150px;">
            <h3>Mayank Songara</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
           <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/nj1.jpg" class="speaker-img" style="height:150px;">
            <h3>Namarta Jaiswal</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
             
            </ul>
          </div>
           <div class="col-md-4 col-sm-6 feature">
            <img src="1/img/ag.jpg" class="speaker-img" style="height:150px;">
            <h3>Aditya Gupta</h3>
            <p></p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
            </ul>
          </div>
          
        </div>
        </div>
        </div>
        </div>
         <div class="container-fluid footer">
        <div class="row contact">
          <div class="col-md-6 contact-form">
            <h3 class="content-ct"><span class="ti-email"></span> Contact Form</h3>
            <form class="form-horizontal" data-toggle="validator" role="form">
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
         <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" placeholder="you@youremail.com" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Your Message<sup>*</sup></label>
                <div class="col-sm-9">
                  <textarea id="message" class="form-control" rows="3" required></textarea>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" id="submit" name="submit" class="btn btn-yellow pull-right">Send <span class="ti-arrow-right"></span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-md-offset-1 content-ct">
            <h3><span class="ti-github"></span> Github Feed</h3>
            <hr>
            <p> <a href="#">#Technofania</a> is Organized By <a href ="#"> Open Source Open Community.</a><br/> </p>

            </div>
        </div>
        <div class="row footer-credit">
          <div class="col-md-6 col-sm-6"> 
            <ul class="footer-menu">
              
            </ul>
          </div>
        </div>
      </div>
      <script src="1/js/jquery.min.js"></script>
      <script src="1/js/bootstrap.min.js"></script>
      <script src="1/js/jquery.easing.min.js"></script>
      <script src="1/js/scrolling-nav.js"></script>
      <script src="1/js/validator.js"></script>
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {


}
else if(screen.height<=768){
 var margintop = -650;
 for(var i=768;i<=screen.height;i++)
 {
  }

  $('#nav').css("margin-top",margintop);
}
else if(screen.height>768)
{
 var i=768;
 for(i=768;i<=screen.height;i++)
 {
 }
 i=i-768;
 i=-650-i;

 $('#nav').css("margin-top",i);

//alert(top);
}

function myfun()
{
  var x= "<?php echo $_SESSION['log'];?>";
  if( x==1)
  {
    window.location.href='signout.php';
}
else
window.location.href='signin.html';
}

      </script>
    </body>
    </html>