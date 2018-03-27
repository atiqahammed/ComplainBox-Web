<!DOCTYPE html>
<html>
<head>
	<title>Complain Box</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!-- customized -->
	<link rel="icon" href="SERVER_PHP/pictures/icon/complain.png">
	<link rel="stylesheet" type="text/css" href="SERVER_PHP/myCss/style002.css">

</head>
<body>


	<!--<nav class="navbar navbar-light navbar-fixed-top" style="background-color: rgb(41, 36, 61);"> -->
	<nav class="navbar navbar-light" style="background-color: rgb(41, 36, 61);">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
	     		<a class="navbar-brand" href="index.php"><img src="SERVER_PHP/pictures/icon/complain.png" id="indexLogo-complain-box"></a>
	    	</div>
	    
	    	<ul class="nav navbar-nav">				
	      		<li><a href="#complainBoxDev" class="nev-custom-css">Complain Box</a></li>
	      		<li><a href="#description-div-custom" class="nev-custom-css" id="ourAppAnc">Our App</a></li>
	      		<li><a href="#purpose-container" class="nev-custom-css">Purpose</a></li>
	      		<li><a href="#developers-container" class="nev-custom-css">Supervisor & Developers</a></li>
	    	</ul>
	    	
	    	<ul class="nav navbar-nav navbar-right">
	      		<li><a href="SERVER_PHP/serverHTML/login.php" class="nev-custom-css"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    	</ul>
	  </div>
	</nav>


	<div class="container-fluid" id="complainBoxDev">
  		<div class="row">
	   		<div class="col-sm-6 col-md-6 col-lg-6">
	   			<h1>What is Complain Box ?</h1>
	   			<p style="text-align: justify;">
	      		Complain Box is an online based complaint (problem) collection system. Using this system, people living in DSCC will be able to submit those problems that they face in their daily city life to notify DSCCA. On the other hand, DSCCA will be able to view those submitted problems and take necessary steps to solve those problems.</p>
	    	</div>
   		
	   		<div class="col-sm-6 col-md-6 col-lg-6" style="border-radius: 7%;">
	   			<div id="googleMap" style="width:100%;height:400px;"></div>
	   			<script>
					function myMap() {
					var mapProp= {
    						center:new google.maps.LatLng(23.7237546, 90.40848970000002),
    						zoom:17,
						};
						var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkKmJPK0oh9K4yGU1USSj7MJpzFWN9LeE&callback=myMap"></script>
	    	</div>
 		</div>

 		<hr>

 		<div class="row" id="description-div-custom">
 			<div class="col-sm-6 col-md-6 col-lg-6" id="paragraph-white-writing">
 				<h3>Our App</h3>
 				<p style="padding-top: 15px; text-align: justify;">
	   			The people of DSCC use our andeoid based web application to submit their problems. Besides submiting their city problems, the people living in the Dhaka south city corporation can get other facilities. All facilities that our mobile application provides are given here.  </p>


	   			<div class="row">
	   				    <div class="col-md-6 i"><img id="screenShot-image" src="SERVER_PHP/pictures/serverSiteImages/screenShot.png"></div>
    					<div class="col-md-6">
    						<h4 style="padding-top: 20px;">User Manual</h4>
    						<video width="320" height="240" controls style="padding-right: 20px;">
  								<source src="SERVER_PHP/pictures/complainBoxVedio.mp4" type="video/mp4">				
							</video>

							<a href="" download="SERVER_PHP/pictures/IMG_20180212_173356.jpg">
							<button type="button" class="btn btn-success" style="margin-top: 20px;">Download Complain Box apk</button>
							</a>
    					</div>
	   			</div>
	    	</div>


   		
	   		<div class="col-sm-6 col-md-6 col-lg-6" style="border-radius: 7%;">
	   			<div class="row">
	   				    <div class="col-md-2 icon-image-Div"><img class="description-icon" src="SERVER_PHP/pictures/serverSiteImages/icon/complain.png"></div>
    					<div class="col-md-10 description-div">
    						<h4>Problem Submission</h4>
    						<p>Using our mobile application, user can submit their city problem. To submit their problem they have to select problem category, then take a photo of the problem, add problem description and add problem location. The city corporation authority will take necessary steps to solve their submitted problem.</p>


    					</div>
	   			</div>

	   			<div class="row">
	   				    <div class="col-md-2 icon-image-Div"><img class="description-icon" src="SERVER_PHP/pictures/serverSiteImages/icon/emergency.png"></div>
    					<div class="col-md-10 description-div">
    						<h4>Emergency Support</h4>
    						<p>Our mobile application also provides information of emergency support institution such as police station, fire station, hospital and provide necessary environment to communicate with those institution directly.</p>


    					</div>
	   			</div>

	   			<div class="row">
	   				    <div class="col-md-2 icon-image-Div"><img class="description-icon" src="SERVER_PHP/pictures/serverSiteImages/icon/notice.png"></div>
    					<div class="col-md-10 description-div">
    						<h4>Notice</h4>
    						<p>People can view current notice provide by Dhaka south city corporation using our mobile appkicatoin.</p>


    					</div>
	   			</div>

	   			<div class="row">
	   				    <div class="col-md-2 icon-image-Div"><img class="description-icon" src="SERVER_PHP/pictures/serverSiteImages/icon/event.png"></div>
    					<div class="col-md-10 description-div">
    						<h4>Event</h4>
    						<p>Authority of Dhaka south city corporation often arrange events. Using our mobile application user can have the current update of events of DSCCA.</p>


    					</div>
	   			</div>

	   			<div class="row">
	   				    <div class="col-md-2 icon-image-Div"><img class="description-icon" src="SERVER_PHP/pictures/serverSiteImages/icon/applicationForm.png"></div>
    					<div class="col-md-10 description-div">
    						<h4>Application Form</h4>
    						<p>Dhaka south city corporation provide necessary application forms for public. User of our complain Box mobile application can download those application from our application easily.</p>


    					</div>
	   			</div>
	   			
	    	</div>
 		</div> <!-- end of our app section-->
 		<hr>


 		<div class="row" id="purpose-container"> <!-- start of purpose section -->
 			<div class="col-sm-8 col-md-8 col-lg-8">
 				<h3>Purpose</h3>
 				<p style="padding-top: 15px; text-align: justify;">
	   			We developed this project for our academic purpose.We would like to express our deepest gratitude to all those who provided us the support and encouragement to complete this project. Thanks to our supervisor teacher Shah Mostafa Khaled, Associate Professor, Institute of Information Technology, University of Dhaka, whose continuous suggestions and guidance has been invaluable to us. Without such stimulating suggestions, the project could not have made this much progress. We are grateful to the Institute of Information Technology for giving us the opportunity to do such a project. </p>
	    	</div>


   		
	   		<div class="col-sm-4 col-md-4 col-lg-4" style="border-radius: 7%; text-align: center;" >
	   			<img src="SERVER_PHP/pictures/iitlogo-blue.png" style="height: 100px; padding-top: 20px;">
	   			
	    	</div>
 		</div> <!-- end of purpose section -->


 		<div class="row" id="developers-container" style="background-color: rgb(41, 36, 61);"> <!-- start of developer section -->
 			
 			<div class="col-sm-4 col-md-4 col-lg-4" style="color: white;">
 				<h3 style="text-align: center;">Supervisor</h3>
 				<hr>
 				<p style="padding-top: 15px; text-align: justify; text-align: center;">Shah Mostafa Khaled</p>
 				<p style="text-align: justify; text-align: center;">Associate Professor</p>
 				<p style="text-align: justify; text-align: center;">Institute of Information Technology</p>
 				<p style="text-align: justify; text-align: center;">University of Dhaka</p>

	    	</div>



	    	<div class="col-sm-8 col-md-8 col-lg-8" style="color: white;">
 				<h3 style="text-align: center;">Developers</h3>
 				<hr>

 				<div class="col-sm-6 col-md-6 col-lg-6" style="">
	 				<p style="padding-top: 15px; text-align: justify; text-align: center;">Atiq Ahammed</p>
	 				<p style="text-align: justify; text-align: center;">BSSE0817</p>
	 				<p style="text-align: justify; text-align: center;">Institute of Information Technology</p>
	 				<p style="text-align: justify; text-align: center;">University of Dhaka</p>
	    		</div>
	    		<div class="col-sm-6 col-md-6 col-lg-6" style="">
	 				<p style="padding-top: 15px; text-align: justify; text-align: center;">Khayrul Islam</p>
	 				<p style="text-align: justify; text-align: center;">BSSE0822</p>
	 				<p style="text-align: justify; text-align: center;">Institute of Information Technology</p>
	 				<p style="text-align: justify; text-align: center;">University of Dhaka</p>
	    		</div>

	    	</div>
 		</div> <!-- end of developer section -->










	</div>
	
		






	</div>






</body>
</html>