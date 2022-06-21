
<?php
include('db.php');

?>


<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CASTLE </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

  <!-- Favicons -->
  <link href="assets/img/castle.png" rel="icon">
  
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<style type="text/css">
   #content{
   	width: 80%;
   	margin: 20px auto;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 25px;
   }
   
   form{
   	width: 80%;
   	margin: 20px auto;
   }
   
   form div{
   	margin-top: 5px;
   }
   
   #img_div{
   	width: 100%;
   	padding: 0px;
   	margin: 15px auto;
   	border: 0px solid #cbcbcb;
   }
   
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   
   img{
   	
   	margin: 5px;
   	width: 270px;
   	height: 150px;
   }
   

   
.read {
	text-align: right;
    margin-top: 5px;
    padding: 0px;
    background-color: ;
   
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
    color: #009900;
	font-size: 27px;
}

.name {
     text-align: center;
    padding: 3px;
    background-color: ;
	text-decoration: underline;	
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
    color: #b30000;
	font-size: 40px;
}



   
</style>
</head>
<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container" >
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.html"><span>CASTLE INVESTMENT (PVT) LTD</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block" >
          <ul>
            <li class="active" ><a href="#header">Home</a></li>
			
            <li><a href="#about">News Feed</a></li>  
			 <li><a href="post/page.html">PUBLICATIONS</a></li>  
            <li><a href="#contact">Contact</a></li>
			

            <li class="get-started"><a href="#header">Get Started</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>CASTLE INVESTMENT (PVT) LTD</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  


 <section id="about" class="about">
 <div class="container">
	  

<div id="content">
<?php
			$link_address = 'formpage/formpage.html';
        	$get_data = "SELECT * FROM news";
        	$run_data = mysqli_query($con,$get_data);

        	while($row = mysqli_fetch_array($run_data))
        	{
        		$id = $row['id'];
        		$name = $row['name'];
        		$description = $row['description'];
        		$image = $row['image'];

        		echo "

        		
				
				<div class=\"name\">$name</div>
				<br>
				
				
				<div class='text-center'><img src='images/$image' style='width:400px; height:250px;'></div>
				
				<br>
				
				<div class='text-center'>$description   
				
				<div class=\"read\"> <a href='$link_address'>Read More » </a> </div>
				
				</div>
				
				<br>	
			
				
				
				
				
				
			


        		";
        	}

        	?>

  
   </div>
    </section><!-- End About Section -->
  

</div>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Why Choose for your investment </h3>
              <p>
                <img src="assets/img/data.jpeg"  alt="Castle">
              </p>
            
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>SERVICES</h4>
                    
					Public Opinion Research<br>  <br>
					Media Research  <br> <br>
					Marketing Research  <br> <br>
					Advertising Research  
					
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>PUBLICATIONS</h4>
                    <p>‘Castle Publications’ is the key that communicates the outputs of the research and surveys conducted by Castle Survey and Research. </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>RESEARCH PUBLICATIONS</h4>
                    <p>Castle publications promotes the research findings of the company academically. This section presents the latest research publications </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in" style="font-size: 16px;">
          <h3>Call To Action</h3>
          <p> Join with us & get more research data </p>
          <a class="cta-btn" href="formpage/formpage.html">JOIN</a>
        </div>

      </div>
    </section><!-- End Cta Section -->



  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="font-size: 15px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>About Us</h2>
              <p>We are Castle Research (Pvt) Ltd., a research company in Sri Lanka, providing the clients with firm and trustworthy research outputs. Concerning the interest and the demand of the client, we research with accurate data, gained through appropriate and innovative research procedures and strategies.</p> <br> <p> Moreover, focusing on the contemporary social trends and changing research needs of the clients, we perform the data gathering, data entry, data processing, and analysis with a well-planned system. We make approaches to the research, through a mixed-method that integrates both qualitative and quantitative research methods. We interpret reliable research solutions, which accelerate our clients towards progression.
If you are looking for a precise Research, this is the right place for you. Contact us, for all your research needs.   
</p>
         
			</div>
			
			
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>157B,
				Kinsey Road,
				Colombo 08
				Sri Lanka
				</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>castleresearchsl@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+9411- 269 8592</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
			<h2>Contact Us</h2>
              
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
			  
			  
			  <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 12 numbers of phone" />
                <div class="validate"></div>
              </div>
			  
			  
			  
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

 

    <div class="container d-md-flex py-4">
	

	<div class="social-links text-center text-md-right pt-3 pt-md-0">
	<h1 style="text-align: left;">CASTLE </h1>
	<h1 style="text-align: center;">INVESTMENT </h1>
	<h2 style="text-align: right;">(PVT) LTD </h2> 

	<br>
	<br>

	
      <h5 style="text-align: left;"> Follow us on » » <a  href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> </h5>
    
		
      </div>
	  <br>
	  
	  <img src="assets/img/hero-bg.jpg" alt="hero-bg.jpg" style="width:400px; height:80px;">
	  
	  <br>
	  <br>
	  
	  
          <div class="col-lg-4 col-md-6 footer-newsletter" style="text-align: right;">
            <h4 >Want Get Our Latest News ?</h4>
            <p>Subscribe to receive latest news and notifications.Get daily news updates by email. Join with us and subscribe now </p>
            <form action="" method="post" >
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
		  
		  

	 

     

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>
</html>