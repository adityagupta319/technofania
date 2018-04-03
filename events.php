<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="OsOc website">
  <meta name="author" content="OsOc Team">
  <title>Events|OSOC</title>
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
      <li class="active"><a href="#" style="color:white;acitive:none;">Events</a></li>
      <li><a href="about.php" style="color:white;">About Us</a></li>
      <li><a href="#" data-toggle="modal" data-target="#result" style="color:white;">Result</a>
      <div class="modal fade" id="result" role="dialog" >
    <div class="modal-dialog " >
    
<div class="modal-content"  style="color:white;text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h3>Black Run</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h4><b>First position   -</b>   Neelam Gour   
              
              <h4><b>Second Position  -</b>   Pankaj Dhakad  
              
           </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">JAM</h3>  <hr></p>
		 <p ><h4><b>First position   - </b></h4> 
      Lokesh Sharma   <br/>
      Abhishek Rustagi    
              <h4><b>Second Position  -</b></h4>  
               Ravi Kumar    <br/>
               Hardik Sharma  
              <h4><b>Third Position  -</b></h4>  
               Gaurav Matani  <br/>
               Ashish Rathore 
           </p>
        </div>
        <div class="modal-body" id="event" >
          <p><h3 style="">Open Talk On Open Source</h3>  <hr></p>
		 <p ><h4><b>First position   - </b></h4> 
      Devkaran         
              <h4><b>Second Position  -</b></h4>  
               Udit Narayan Vyas      <br/>
               Sunil Verma     
              <h4><b>Third Position  -</b></h4>  
                Ravi Kumar    <br/>
               Hardik Sharma  
           </p>
        </div>
        <div class="modal-body" id="event" >
          <p><h3 style="">Agamya(Project Review)</h3>  <hr></p>
		 <p ><h4><b>First position   - </b></h4> 
      Pal Sanjay Harivilas <br/>
      Mohit Mandloi       
              <h4><b>Second Position  -</b></h4>  
               Parmanand Kumar     <br/>
              <h4><b>Third Position  -</b></h4>  
                 Jitendra Yadav    <br/>
               Abhishek Rustagi  
           </p>
        </div>
        <div class="modal-body" id="event" >
          <p><h3 style="">Concevoir le web</h3>  <hr></p>
		 <p ><h4><b>First position   - </b></h4> 
      Ravi Kumar     <br/>
      Hardik Sharma   
              <h4><b>Second Position  -</b></h4>  
             Nivedita Jha     <br/>
             Shweta Jawra     
   
           </p>
        </div>
         <p><h3 style="">Code Conclave</h3>  <hr></p>
		 <p > <h4>This Result will be upadte soon... </h4></p>
        </div>
		
      </div>
      
    </div>
  </li>
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
            <a href="#" data-toggle="modal" data-target="#result" style="background-color:transparent;border-style:none;margin-top:50px;"><h3>Result <span class="ti-arrow-right"></a><hr>
            
          </div>
          <div class="col-md-5 hidden-xs">
            <img src="1/img/tech2.png" class="rocket animated bounce" id="logo1">
          </div>
        </div>
      </div>
      <div class="container">
  
        <div class="row me-row content-ct" style="color:white;">
          <h2 class="row-title">What New Things this Event Contains ?</h2>
          <div class="col-md-4 feature">
          <span class="ti-tumblr"></span>
		<a href="#" data-toggle="modal" data-target="#myModal" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h3>Project Submission</h3>
                    </a>
					<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Project Submission</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>Technofania 18 presents to you , an Inter-Department technical event and competition, aimed at providing a platform for the students of NIT Trichy to transform their ideas into tangible creations and showcase their innovations to the outside world.
		  Every Single Idea Can make a lot change in the society</h3>  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <p ><h4>Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</h4></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Must be within the realm of science and technology.</li>
<li>The end result of the project must be a tangible product.</li>
<li>Must be presentable during Technofania as a working model or demonstration along with visualization (Presentations).</li>
</li>Must be original, and addressing social problems, industrial needs, day-to-day utilities or recreational activities</li>
<li>A panel will scrutinize the idea, and if deemed feasible and worthy, you will be given the green light to pursue the idea.</li>
<li>After systematic reviews, the complete presentation along with the working model or demonstration must be ready by 11th March 2018, following which it will be showcased during Technofania 18.</li>
</ul>
        </div>
		
      </div>
      
    </div>
  </div>  
          </div>
          <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
           <a href="#" data-toggle="modal" data-target="#myModal02" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h3>Open Talk On Open Source</h3>
                    </a>
					<div class="modal fade" id="myModal02" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="" style=""><h2>Open Talk On Open Source</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>Winners of Quizzards of Oz will be given specific topic of Open source to talk on .</h3></p>
        </div>
			<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <p ><h4>Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</h4></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Maximum time limit is 5 minutes .</li>
<li>Decision of judges will be final and abiding.</li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Mayank Songara  -9993814848
</h3>
        </div>
		
		
      </div>
      
    </div>
          </div>
		  </div>
          <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <a href="#" data-toggle="modal" data-target="#myModal3" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h3>Workshop on web extension</h3>
                    </a>
			  	<div class="modal fade" id="myModal3" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Mozilla Workshop</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>This event posses a workshop on Web Extensions which will:</h3>  
		  <div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Let you gain the knowledge of development of add-ons.</li>
<li>Creates a new dimension of work for all. </li>
<li>Provides you knowledge of how web extensions work</li>

</ul>
        </div></p>
		
      </div>
      
    </div>
  </div>
          </div>
        </div>
        </div>


        



        

      <div class="container">
        <div class="row me-row schedule" id="schedule">
          <h2 class="row-title content-ct" style="color:white;">Event Schedule</h2>
          <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">Day 00 <small class="hidden-xs">(10<sup>th</sup>, March)</small></a></li>
              <li role="presentation"><a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">Day 01 <small class="hidden-xs">(11<sup>th</sup>, March)</small></a></li>
            </ul>
            <div class="tab-content" style="margin-left:70px;color:white;margin-right:70px;">
              <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
         
                      <div class="media-body">
                        <h4 class="media-heading">10:20am to 10:50am</h4>
                       <a href="#" data-toggle="modal" data-target="#myModal6" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5> Quizzards of OS</h5></a>
                       	<div class="modal fade" id="myModal4" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
     
          <h4 class="modal-title"><h2>Code Conclave (Prelims)</h2>
               <button type="button" class="modal-title btn btn-primary" onclick="check2()" id="1">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>This event will take your breathe away by some awesome coding which will test:</h3> 
 <ul  style="list-style-type:disc;margin-left:10px;">
 <li>Your concepts</li>
  <li>Your logic</li>
   <li>Your problem solving skills</li>
    <li>Your approach</li>
	 <li>Your mindset</li>
	 </ul>
		  		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		
		<li>Leader-board runs on the no. test cases passes  </li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Harmit Singh   -  8085748671</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                        <h4 class="media-heading">10:50am to 11:45am</h4>
<a href="#" data-toggle="modal" data-target="#myModal4" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Code Conclave</h5>
</a>
 	<div class="modal fade" id="myModal5" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Just A Minute (Prelims)</h2>
          <button type="button" class="modal-title btn btn-primary" onclick="check1()" id="2">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p >A rapid fire quiz round which will test you :
          <ul  style="list-style-type:disc;margin-left:10px;">
 <li>General Knowledge</li>
  <li>Thinking ability</li>
   <li>Awareness and perseverance</li>
	 </ul>

		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>There will be 30 Question .</li>
<li>Each question have a One minute to solve.</li>
<li>Question Pattern Will be based On MCQ</li>

        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Surendra Lodhi   -  8719051672</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                         <h4 class="media-heading">11:30am to 12:30pm</h4>
                 <a href="#" data-toggle="modal" data-target="#myModal8" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Black Run</h5></a>
                        	<div class="modal fade" id="myModal6" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Quizzards of Os (Prelims)</h2>
          <button type="button" class="modal-title btn btn-primary" onclick="check2()" id="3">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>An open source based quiz which will test your:</h3>
      <ul  style="list-style-type:disc;margin-left:10px;">
 <li>Open source knowledge</li>
  <li>Decision making skills</li>
   <li>Open source work</li>
    <li> General thinking</li>
	 </ul>		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>There Will be 45 Question.</li>
<li>One Hour for this event</li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Mayank Songara   -  9993814848</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                       <h4 class="media-heading">01:30pm to 02:00pm</h4>
                          <a href="#" data-toggle="modal" data-target="#myModal5" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>JAM</h5></a>
                        	<div class="modal fade" id="myModal7" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
         
          <h4 class="modal-title"><h2>Concevoir le web</h2>
           <button type="button" class="modal-title btn btn-primary" onclick="check2()" id="4">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>A unique event based on Web Designing .Which will tests your:</h3> 
           	  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Web Designing skills</li>
<li>Instantaneous ability to develop Web-pages</li>
<li>Adaptability to Web Designing </li>

</ul>
		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Participant can use any web based language</li>
<li>Participant can use canvas ,svg etc</li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Aditya Gupta   -  7880647206</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                        <h4 class="media-heading">02:40pm to 03:10pm</h4>
<a href="#" data-toggle="modal" data-target="#myModal7" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Concevoir le web</h5></a>
                      	<div class="modal fade" id="myModal8" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Black Run</h2>
          <button type="button" class="modal-title btn btn-primary" onclick="check2()" id="5">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>This event Is based on coding.This event will test your:</h3>
		   <ul  style="list-style-type:disc;margin-left:10px;">
		   <li>Ability to code with precision</li>
<li>Your compatibility with compiler</li>
<li>Your hand eye co-ordination </li>

</ul>
		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Screen will be off while coding .</li>
<li>It will be strictly on DEV C++ only. </li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Ankita Gupta   -  7880647206</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
				  
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                         <h4 class="media-heading">03:30pm to 5:00pm</h4>
<a href="#" data-toggle="modal" data-target="#myModal9" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Code Conclave</h5></a>
<div class="modal fade" id="myModal9" role="dialog" >
						<div class="modal-dialog " >
						 <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
						 <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Code Conclave (Finale)</h2>
          <button type="button" class="modal-title btn btn-primary" onclick="check2()" id="6">Start</button>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>This event will take your breathe away by some awesome coding which will test:</h3>
		   <ul  style="list-style-type:disc;margin-left:10px;">
		   <li>Your concepts</li>
<li>Your logic</li>
<li>Your problem solving skills </li>
<li>Your approach</li>
<li>Your mindset </li>

</ul>
		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
`
<li>Leader-board runs on the no. test cases passed . </li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Harmit Singh   -  7880647206</h3>
        </div>
                      </div>
					  </div>
                    </div>
                       	<div class="modal fade" id="myModal001" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
     
          <h4 class="modal-title"><h2>Finalist Of Quizzards Of Os </h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3> This event must have team of two members </h3> 
 <ul  style="list-style-type:disc;margin-left:10px;">
 <li>Manish Yadav - Neha Majlikar</li>
  <li>Udit Narayan Vyas - Sunil Verma</li>
   <li>Swapnil Ojha - Priyanka Kaushal </li>
   <li>Swapnil Ojha - Priyanka Kaushal </li>
   <li>Ashish Rathore - Mayuri Raghuvanshi </li>
   <li>Swapnil Ojha - Riya Yadav </li>
    <li>Your approach</li>
	 <li>Your mindset</li>
	 </ul>
		  		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
  		<ul  style="list-style-type:disc;margin-left:10px;">
		
		<li>Leader-board runs on the no. test cases passes  </li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Harmit Singh   -  8085748671</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                  </div>
                </div>
              </div>
			  </div>
			  </div>
              <div role="tabpanel" class="tab-pane fade" id="day-2">
                <div class="row">
                <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                         <h4 class="media-heading">09:30am to 10:00pm</h4>
                         <a href="#" style="color:white;" ><h5>Inauguration </h5></a>
	                       
      </div>
      
    </div>
  </div>

               <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                         <h4 class="media-heading">10:00am to 11:50pm</h4>
                         <a href="#" data-toggle="modal" data-target="#myModal10" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>WorkShop Of Web Extension</h5></a>
                       	<div class="modal fade" id="myModal10" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Mozilla Workshop</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>This event posses a workshop on Web Extensions which will:</h3>  
		  <div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Let you gain the knowledge of development of add-ons.</li>
<li>Creates a new dimension of work for all. </li>
<li>Provides you knowledge of how web extensions work</li>

</ul>
        </div></p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Requirement</h3>  <hr></p>
		  <p ><h4>Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</h4></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
<li>. You should bring your laptop fully charged .</li>
<li>You should bring your charger too along with laptop.</li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Kshitiz Arora   -  8058365540</h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                 
                 <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                         <h4 class="media-heading">12:00am to 1:00pm</h4>
                         <a href="#" data-toggle="modal" data-target="#myModal11" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>JAM (Finale)</h5></a>
                       	<div class="modal fade" id="myModal11" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>JAM (Finale)</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>Winners of Prelims will be taken up to stage for the final round</h3> 
 
		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <p></p>
		  < <ul  style="list-style-type:disc;margin-left:10px;">
		   <li>Your concepts</li>
<li>Stage competition </li>
<li>Questions will be from diversified genre  </li>
</ul>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Surendra Lodhi 8719051672 </h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                        <h4 class="media-heading">2:00pm to 03:30pm</h4>
<a href="#" data-toggle="modal" data-target="#myModal13" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Agamya(Project Review)</h5></a>
                        	<div class="modal fade" id="myModal13" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align:left;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Agamya (Project Review)</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>Selected projects for Agamya will have to showcase their project idea in front of judges panel:</h3>  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Contact Us-</h3>  <hr></p>
		 <h3>Shubham Sharma  - 9039965642
 </h3>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-body">
                        <h4 class="media-heading">03:30pm to 04:30pm</h4>
<a href="#" data-toggle="modal" data-target="#myModal14" style="color:white;background-color:transparent;border-style:none;margin-top:50px;"><h5>Quizzards of Oz</h5></a>
                       	<div class="modal fade" id="myModal14" role="dialog" >
    <div class="modal-dialog " >
    
      <div class="modal-content" style="text-align;overflow-y: scroll;overflow-x: hidden;background-color:#00111a;margin-top:50px;height:600px;width:auto;margin-left:-0px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title"><h2>Quizzards of Os(Finale)</h2>
        </div>
        <div class="modal-body" id="event">
          <p ><h3>Winners of Quizzards of Oz will be given specific topic of Open source to talk on.</h3>
		  </p>
        </div>
		<div class="modal-body" id="event" >
          <p><h3 style="">Rules</h3>  <hr></p>
		  <ul  style="list-style-type:disc;margin-left:10px;">
		  
<li>Maximum time limit is 5 minutes .</li>
<li>Decision of judges will be final and abiding .</li>
</ul>
        </div>
		
      </div>
      
    </div>
  </div>
                      </div>
                    </div>
                  </div>
                </div>
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
 var margintop = -640;
  var h = window.innerHeight;
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
 i=i-748;
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
function check()
{
    var x= "<?php echo $_SESSION['log'];?>";
	 if(x == 1)
	 {
    document.getElementById("b1").style.display = 'none';
  
  
	 }
   else
   document.getElementById('b1').style.display='visible';


}
check();
function check1()
{
 //alert('Event is going to start');

  // window.location.href='https://www.hackerearth.com/challenge/college/os-quizz';
     // window.location.href='https://www.hackerrank.com/code-conclave-1';
       window.location.href=' https://www.hackerearth.com/challenge/college/TF-JAM9';
}
function check2()
{
alert('Event is going to start');

}


      </script>
    </body>
    </html>