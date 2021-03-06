<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="style.css">

    <title>My Web</title>
  </head>
  <body>
   
   <!-- navbar started -->


	<header  class="container-fluid nav_style mx-auto">
	   	<div >
	   	   <div class=" mx-auto">
	   	   	<nav class="navbar navbar-expand-lg navbar-light ">
			  <div class="container-fluid">
			    <a class="navbar-brand " id="header_name" href="#">Dream Developer</a>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="#">HOME</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#about_id">ABOUT</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#">SERVICES</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#">PORTFOLIO</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="#contact_id">CONTACT</a>
			        </li>
			      </ul>
			      
			    </div>
			  </div>
			</nav>
	   	  </div>
	   	</div>
	</header><!-- /header -->


     <!-- navbar ended -->


     <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>




     <!-- main header start -->

     <div class="container-fluid">
     	<div>

     		<div class="row">
     			<div class="col-md-6 col-12">
     				<p class="header-text"> Hi Dear ,
     					<br>
     				    Lorem ipsum dolor sit amet,<span class="span_header_text"> consectetur adipisicing elit, </span>
     				    <br>
     				    sed do eiusmod tempor incididunt <span class="span_header_text"> ut labore </span>
     				</p>

	     			<div class="d-flex justify-content-around align-items-center">
		     			<div >
		     			 <button class="hire_me"> <i class="fa fa-check"></i> Hire me</button>
		     			</div>

		     			<div>
		     			  <button class="about_me"> <i class="fa fa-user"></i> About me</button>
		     			</div>
		     		</div>

		     		<div class="text-center header_mail">
		     			<p class="font-weight-bold header_email_para">
		     				Email
		     			</p>
		     			<p>saucom99@gmail.com</p>	
		     		</div>
	     		</div>

     			<div class="header_text2 col-md-6 col-12">
     				<div class="float-right">
     					<figure>
     						<img src="images/header.png" alt="main img">
     					</figure>
     				</div>	
     			</div>
     		</div>	
     	</div>
     </div>


     <!-- main header end -->


     <!-- about section -->

     <div class="container-fluid about_section bg-light" id="about_id">
     	<div class="row">
     		<div class="col-12 col-md-10 mx-auto">
     			<div class="main_title">
     				<h1>About Me</h1>
     			</div>
		     	<div class="row">
		     		<div class="col-md-6 col-12 about_img">
		     			<img  src="images/about.png" alt="About">
		     		</div>
		     		<div class="col-md-6 col-12 about_text d-flex justify-content-center align-items-start flex-column">
		     			<p>Hello,</p>
		     			<h1>I am a Passionate Developer</h1>
		     			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		     			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		     			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		     			consequat.</p>
		     		</div> 		
		     	</div>	
     		</div>
     	</div>
     </div>



     <!-- work expertise -->


     <div class="container-fluid expertise_section " id="about_id">
     	<div class="row">
     		<div class="col-11 col-md-10 mx-auto">
     			<div class="main_title">
     				<h1>Work Expertise</h1>
     				<p class="text-center">Obviously I'm a Software Developer, <br> Experienced  with all the stages of the development cycle with every projects</p>
     			</div>
		     	<div class="row">		
		     		<div class="common_div col-md-6 col-12 about_text d-flex justify-content-center align-items-start flex-column">
						<div class="w-100">
							<h5 class="expertise_h1 ">Python</h5>
							<div class="progress">
								<div class="progress-bar pb_1" role="progressbar"></div>
							</div>	
						</div>
						<div class="w-100 my-4">
							<h5 class="expertise_h2">Java</h5>
							<div class="progress">
								<div class="progress-bar pb_2" role="progressbar"></div>
							</div>	
						</div>
						<div class="w-100">
							<h5 class="expertise_h3">C++</h5>
							<div class="progress">
								<div class="progress-bar pb_3" role="progressbar"></div>
							</div>	
						</div>


		     			
		     		</div>	
		     		<div class="col-md-6 col-12 about_img">
		     			<img  src="images/expertise.png" alt="About">
		     			
		     		</div>
		     	</div>
     		</div>
     	</div>
     </div>



<!-- services section -->


<!-- CONTACT US SECTION -->

<div class="container-fluid bg-light contact_me" id="contact_id">
	<div class="row">
		<div class="col-12 col-md-10 mx-auto">
			<div class="main_title">
				<h1>Contact Me</h1>
				<p>Feel free to contact Me anytime</p>
			</div>
			<div class="row mt-3 gy-3">
				<div class="col-md-3 col-12 contact_img">
					<img src="images/contact.png" class="img-fluid" alt="">		
				</div>
				<div class="col-md-6 col-12 contact_inner">
					<form action="#" method="post">
						  <div class="form-group mb-3">
						    <input type="text" class="form-control" name="yname" id="exampleFormControlInput1" placeholder="Enter Your Name" required>
						  </div>
						  <div class="form-group mb-3">
						    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter your E-mail" required>
						  </div>
						  <div class="form-group mb-3">
						    <input type="number" class="form-control" name="cnum" id="exampleFormControlInput1" placeholder="Enter Your Contact Number" required>
						  </div>
						  <div class="form-group mb-3">
						    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" placeholder="Write Some Message here" rows="3"></textarea>
						  </div>

						  <div class="text-center">
						    <button class="hire_me" name="send"> Hire me</button>
						  </div>
					</form>
				</div>
			</div>	
		</div>		
	</div>	
</div>



<!-- SOCIAL BAR LINKS -->


<section class="my-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-facebook-f fa-2x"></i>
			</div>
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-linkedin fa-2x"></i>
			</div>
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-instagram fa-2x"></i>
			</div>
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-whatsapp fa-2x"></i>
			</div>
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-twitter fa-2x"></i>
			</div>
			<div class="col-2 col-lg-1 social_sites">
				<i class="fab fa-youtube fa-2x"></i>
			</div>
			
		</div>
		
	</div>
	
</section>


<!-- footer section -->

<section class="footer pt-3 pb-3">
	<p class="text-center">@Name 2020  | All Rights Reserved</p>
</section>
		

<!-- scroll to top button  -->

<script>
	
	var mybutton = document.getElementById("myBtn");
	
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}

</script>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>


<?php 

if (isset($_POST['send'])) {
	
	$name = $_POST['yname'];
	$email = $_POST['email'];
	$num = $_POST['cnum'];
	$msg = $_POST['msg'];

	$data = "insert into message(name, email, contact_number, message) values ('$name', '$email', '$num', '$msg')";

	$query = mysqli_query($conn, $data);

	if ($query) {
		
		echo "<script> alert('Message sent successfully!'); </script>";

	}

	else {

		echo "<script> alert('Please, check your internet connectivity!'); </script>";

	}

}


 ?>