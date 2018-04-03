<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <title>
          TechnoFania|OSOC
        </title><!-- Behavioral Meta Data -->
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta content="ThemeWagon" name="author">
        <meta content="The most spectacular coming soon template!" name="description">
        <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords">
        <meta content="The most spectacular coming soon template!">
        <meta content="ThemeWagon">
        <meta content="ThemeWagon">
        <meta content="website">
        <meta content="index.html">

        <link href="image/favicon.png" rel="shortcut icon" type="image/png">

       
        
       <link rel="stylesheet" href="css\bootstrap.min.css">
  <script src="js\jquery.min.js"></script>
  <script src="js\bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
        <link href="css/loader.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style2.css" rel="stylesheet" type="text/css">
         

        <script src="js/jquery.js"></script>
		<script src="js/modernizr.js"></script>
  	<script src="js/particles.js"></script>
	<link rel="stylesheet" href="css/style1.css" />
	<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> 
<?php
session_start();
?>
    </head>
    <body>
        <div class="preloader">
            <div class="loading">
                <h2>
                 Loading...
                </h2>
				
                <span class="progress"></span>
            </div>
        </div>

        <div class="wrapper">
            <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->

                <li class="layer" data-depth="0.10">
                    <div class="background">
						<canvas id="particles">
		</canvas>

		<script src="js\basic.js"></script>
                    </div>
                </li>

                <!-- Hero -->

                <li class="layer" data-depth="0.20">
                    <div class="title">
                        <h2 style="color:white;">
                          TECHNOFANIA<br/><br/>
                          
                          
                        </h2>
                        <span class="line" style="width:100px;"></span>
                    
                        <h4 style="color:white;">Result Uploaded On Event Page</h3>
                        <a href=""><h2 id="log" style="color:white;font-size:15px;"><span class="line" id="log1"style="width:200px;"></span>
                        </h2>
                    </div>
                </li>

                <li class="layer" data-depth="0.10">
                    <div class="sphere">
                        <img alt="sphere" src="images/new1.png" style="margin-top:150px;margin-left:-50px;">
                    </div>
                </li>

                <li class="layer" data-depth="0.30">
                    <div class="hero">

                    </div>
                </li>
                <!-- Flakes -->

                <li class="layer" data-depth="0.40">
                    <div class="depth-1 flake1">
                        <img alt="flake" src="images/flakes/depth1/1.png">
                    </div>

                    <div class="depth-1 flake2">
                        <img alt="flake" src="images/flakes/depth1/2.png">
                    </div>

                    <div class="depth-1 flake3">
                        <img alt="flake" src="images/flakes/depth1/3.png">
                    </div>

                    <div class="depth-1 flake4">
                        <img alt="flake" src="images/flakes/depth1/4.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.50">
                    <div class="depth-2 flake1">
                       <img alt="flake" src="images/flakes/depth2/10.png">
                    </div>

                    <div class="depth-2 flake2">
                        <img alt="flake" src="images/flakes/depth2/5.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.60">
                    <div class="depth-3 flake1">
                        <img alt="flake" src="images/flakes/depth3/6.png">
                    </div>

                    <div class="depth-3 flake2">
                        <img alt="flake" src="images/flakes/depth3/7.png">
                    </div>

                    <div class="depth-3 flake3">
                        <img alt="flake" src="images/flakes/depth3/8.png">
                    </div>

                    <div class="depth-3 flake4">
                        <img alt="flake" src="images/flakes/depth3/9.png">
                    </div>
                </li>

                <li class="layer" data-depth="0.80">
                    <div class="depth-4">
                      <img alt="flake" src="images/flakes/depth4/11.png">

                    </div>
					
                </li>

                <li class="layer" data-depth="1.00">
                    <div class="depth-5">
                       <img alt="flake" src="images/flakes/depth5/13.png">
                    </div>
					<div class="depth-5">
                       <img alt="flake" src="images/flakes/depth5/8.png">
                    </div>
                </li>
                <!-- Contact -->

               
            </ul>
        </div>
 <li class="layer" data-depth="0.00">
 <div class="title">
      <nav class="navbar navbar-default"  id ="nav" style="margin-top:-120px;background-color:#00111a;border-style:none;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="background-color:#00111a;font-size:28px;color:white;">OSOC</a>
    </div>
    <ul class="nav navbar-nav" >
     <li class="active"><a href="#" style="color:white;" >Home</a></li>
      <li><a href="events.php" style="color:white;">Events</a></li>
      <li><a href="about.php" style="color:white;">About Us</a></li>
      <li><a href="events.php" style="color:white;">Result</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
         <li><a href="#"style="color:white;acitive:none;margin-right:20px;" onclick="myfun()"><?php if($_SESSION['log']==1){echo "Sign-Out";}else{echo "Sign-In";}?></a></li>

      </ul>
  </div>
</nav>

 <li class="layer" data-depth="0.20">
                    <div class="contact">
                        <ul class="icons">
                            <li>
                                <a class="behance" href="https://www.facebook.com/groups/633779233333438/"><i class="fa fa-facebook" style="color:white;"></i></a>
                            </li>

                            <li>
                                <a class="twitter" href="https://osocnitt.wordpress.com/tag/osoc-nitt/"><i class="fa fa-wordpress" style="color:white;"></i></a>
                            </li>
                            <li>
                            <a class

                        </ul>
                      
                    </div>
                </li>
	  </div>
     

	  </li>
        <!-- Javascript -->
        <script src="js/plugins.js"></script> 
        <script src="js/jquery.countdown.min.js"></script> 
        <script src="js/main.js"></script>
<script>
function check()
{
    var x= "<?php echo $_SESSION['log'];?>";
    var y="<?php echo $_SESSION['roll'];?>";
	 if(x == 1)
	 {
    document.getElementById("log").innerHTML = "Welcome  "+y;
    document.getElementById('log').style.display='block';
  
  
	 }
   else
   document.getElementById('log').style.display='none';


}
check();
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

  var margintop = -50;
  $('#nav').css("margin-top",margintop);
 

}
else if(screen.height <=768){
 var margintop = -100;
  $('#nav').css("margin-top",margintop);
}
else if(screen.height >768){
 var margintop = screen.height;
  //$('#nav').css("margin-top",margintop);
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
function check1()
{
  // alert('Event is going to start');

   //window.location.href='https://www.hackerearth.com/challenge/college/os-quizz';
    //window.location.href='https://www.hackerrank.com/code-conclave-1';
   //window.location.href=' https://www.hackerearth.com/challenge/college/code_conclave';
}
</script>
    </body>
    
    
</html>