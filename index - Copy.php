<!DOCTYPE html>
<html>
<head>
  <title>NS Construction</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet">
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="loader.js"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css">
  <script src="theme.js"></script>

</head>
<body>
  <div id="loader" class="loader"></div>
  <div id="loader-text" class="loader-text">please wait...</div>
<!---top bar---->
<div class="fixed-top" style="font-size: 12px;">
  <div class="container-fluid" id="topbar">
    <div class="row container-fluid" style="padding-bottom: 0.3% ;">
      <div class="col-md-4 col-sm-6" name="phonenumber" id="companynumber">
        <a id="texttopbar" href="tel:+91-12345-67890"><i class="bi bi-telephone-fill"></i>&nbsp+91 12345 67890</a>
      </div>
      <div class="col-md-4 col-sm-6" name ="email" id="companyemail"><a id="texttopbar" href="mailto: username@gmail.com">
        <i class="bi bi-envelope-fill"></i>&nbspusername@gmail.com</a></div>
      <div class="col-md-4 col-sm-6" name="sociallinks" id="sociallinks">
      <a id="texttopbar" href="https://web.telegram.org/"><i class="bi bi-telegram"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-youtube"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-whatsapp"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-instagram"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-facebook"></i></a>&nbsp
      <a id="texttopbar" href="https://web.telegram.org/" ><i class="bi bi-twitter"></i></a>&nbsp
      </div>
    </div>
  </div>


<!---navigation bar---->

	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="font-size: 12px;">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><svg width="30" height="25">
  <circle cx="10" cy="10" r="8" stroke="black" stroke-width="4" fill="grey" />
</svg>NS CONSTRUCTION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
			  <li class="nav-item" style="padding-right: 50px;">
				<a class="nav-link active" aria-current="page">Home</a>
			  </li>
			  <li class="nav-item" style=" padding-right: 50px;">
				<a class="nav-link"href="aboutus.html">About Us</a>
			  </li>
        <li class="nav-item" style=" padding-right: 50px;">
          <a class="nav-link" href="services.html">Services</a>
        </li>
			  <li class="nav-item" style=" padding-right: 50px;">
          <a class="nav-link"href="infa.html">Infrastructure</a>
        </li>
        <li class="nav-item dropdown" style="padding-right: 50px;">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  More
				</a>
				<ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
				  <li><a class="dropdown-item nav-link"href="more.html">Social Media</a></li>
				  <li><a class="dropdown-item nav-link"href="more.html">Office Location</a></li>
				  <li><a class="dropdown-item nav-link"href="more.html">Contract Details</a></li>
				</ul>
			  </li>
			  <li class="nav-item" style="padding-right: 50px;">
				<a class="nav-link" href="contactus.php">Contact Us</a>
			  </li>
        <li class="nav-item" style="text-align: left;">
                <div class="form-check form-switch" >
                  <input class="form-check-input" type="checkbox" role="switch" id="theme" onclick="Theme()"><label class="form-check-label" for="theme" style="color: white;">
                    <a class="nav-link"><span id="themetype">Light</span></a></label>
                </div>
                
      </li>
			</ul>
		  </div>
		</div>
	  </nav>
  </div>
<div style="height: 20px;"></div>







<!--Carosaul display-->


  <div class="container-fluid" style="float: center;padding: 0;">
    <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="images/img1.jpeg" id="caraimg" class="d-block w-100" alt="first image">
          <div class="carousel-caption">
            <h3>First slide label</h3>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="images/img2.jpeg" id="caraimg" class="d-block w-100" alt="second image">
          <div class="carousel-caption">
            <h3>Second slide label</h3>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="images/img3.jpeg" id="caraimg" class="d-block w-100" alt="third image">
          <div class="carousel-caption">
            <h3>Third slide label</h3>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

<!-------Heading----------->

<div class="container-fluid" id="description" style="text-align: center;">
  <h1 class="display-3">Heading</h1>
 <p class="paragragh">
  Here, we will write punchline/slogan
  </p>
</div>





<!--6 grid image text--->


<div class="container overflow-hidden">
  <div class="row">
    <h1 class="display-3">Display</h1>
    <p class="paragraph">
    This is a lead paragraph. It stands out from regular paragraphs.
    </p>
  </div>
  <div class="container-fluid">
    <div class="d-flex justify-content-center bd-highlight mb-3 row">
      <div class=" bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">      
        <img src="images/imggrid1.jpeg" class="img-fluid" id="imggrid" alt="grid 1">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
      <div class="bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">
        <img src="images/imggrid2.jpeg" class="img-fluid" id="imggrid" alt="grid 2">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
      <div class=" bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">
        <img src="images/imggrid3.jpeg" class="img-fluid" id="imggrid" alt="grid 3">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
    </div>
    <div class="d-flex justify-content-center bd-highlight mb-3 row">
      <div class=" bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">      
        <img src="images/imggrid1.jpeg" class="img-fluid" id="imggrid" alt="grid 1">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
      <div class=" bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">
        <img src="images/imggrid2.jpeg" class="img-fluid" id="imggrid" alt="grid 2">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
      <div class=" bd-highlight col-md-3 col-sm-6" id = "gridimage" data-aos="zoom-in">
        <img src="images/imggrid3.jpeg" class="img-fluid" id="imggrid" alt="grid 3">
        <p class="paragragh">This is a paragragh paragraph. It stands out from regular paragraphs.</p>
      </div>
    </div>
</div>
</div>



<!---contact us form-->


<div class="overlay-form">
  <div class="close-btn" onclick="toggleForm()">&times;</div>
   <!--Section heading-->
   <h2 class="h1-responsive font-weight-bold text-center my-4 text-light">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
<form role="form" id="contact-form" class="contact-form" name="contact-form" method="POST">
  <div class="form-element">
  <div class="form-group md-form mb-0 form-floating">
      <input type="text" id="name" name="name" autocomplete="off" class="form-control" required>
      <label for="name" class="conusform">Your name</label>
  </div>
  </div>
  <div class="form-element">
  <div class="form-group md-form mb-0 form-floating">
      <input type="text" id="email" name="email" autocomplete="off" class="form-control" required>
      <label for="email" class="conusform">Your email</label>
    </div>
  </div>
  <div class="form-element">
  <div class="form-group md-form mb-0 form-floating">
    <input type="tel" id="phone" name="phone" class="form-control" autocomplete="off" required>
    <label for="phone" class="conusform">Pnone No.</label>
   </div>
  </div>
  <div class="form-element">
  <div class="form-group md-form mb-0 form-floating">
    <input type="text" id="subject" name="subject" class="form-control" autocomplete="off" required>
    <label for="subject" class="conusform">Subject</label>
  </div>
  </div>
  <div class="form-element">
  <div class="form-group md-form form-floating">
<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height: 100px; resize: none;" required></textarea>
      <label for="message" class="conusform">Your message</label>
    </div>
  </div>
  <div class="form-element">
  <div class="text-center text-md-left">
                  <button type="submit" class="btn main-btn pull-right" name="submit">Send a message</button>
                </div>
                
  </div>
</form>
<?php include 'email.php';?>
</div>
<div class="fixedbutton">
  <button onclick="toggleForm()"><i class="bi bi-envelope-fill" style="font-size:30px"></i><b>Contact&nbspUs</b></button>
</div>
<script>
  function toggleForm(){
  document.body.classList.toggle('activeForm');
}
</script>




<!---Paragraph with images(3)----->

<div class="container-fluid" >

  <h1 class="display-3" style="text-align: center;">Display</h1>
  <div class="row container-fluid">
  <div class="d-flex justify-content-center bd-highlight mb-3">
    <div class="bd-highlight col-md-4 col-sm-6">
      <img src="images/imgtext1.jpeg" id="textimgid" class="img-fluid" alt="grid 2" style="float:center;">
      <p class="paragraph" style=" text-align: center;">
      description of the images shown above</p>
    </div>
    <div class="bd-highlight col-md-6 col-sm-6">
      <p class="paragraph" style=" text-align: justify;padding-right:5%">
      This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs.
      </p>
    </div>
  </div>
</div>
</div>

<div class="container-fluid" >
  <h1 class="display-3" style="text-align: center;">Display</h1>
  <div class="row container-fluid">
  <div class="d-flex justify-content-center bd-highlight mb-3">
    <div class="bd-highlight col-md-6 col-sm-6">
      <p class="paragraph" style=" text-align: justify; padding-right:5%">
      This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs.
      </p>
    </div>
    <div class="bd-highlight col-md-4 col-sm-6">
      <img src="images/imgtext1.jpeg" class="img-fluid" alt="grid 2" style="float:center;">
      <p class="paragraph" style=" text-align: center;">
      description of the images shown above
      </p>
    </div>
  </div>
</div>
</div>


<div class="container-fluid" >
  <h1 class="display-3" style="text-align: center;">Display</h1>
  <div class="row container-fluid">
  <div class="d-flex justify-content-center bd-highlight mb-3">
    <div class="bd-highlight col-md-4 col-sm-6">
      <img src="images/imgtext1.jpeg" id="textimgid" class="img-fluid" alt="grid 2" style="float:center;">
      <p class="paragraph" style=" text-align: center;">
      description of the images shown above</p>
    </div>
    <div class="bd-highlight col-md-6 col-sm-6">
      <p class="paragraph" style=" text-align: justify;padding-right:5%">
      This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs. This is a lead paragraph. It stands out from regular paragraphs.
      </p>
    </div>
  </div>
</div>
</div>


<!---footer--->


<div id="footer">
  <div class="container-fluid">
    <h4 style="color: aqua;">Footer</h4>
    <p style="color: bisque; margin-bottom: 0;padding-top: 20px;">This is a template design; Created by webnetic.co.in<br> 
      (Contact us at : +91 9831739043,+91 6290244684)<br>
      (email : service.webnetic@gmail.com)</p>
  </div>
</div>

</body>
</html>