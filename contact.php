<!DOCTYPE html>
<html>
 <head>
         <title>SmartLab Official Website</title>
		  <meta charset="utf-8" />
		  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
         <!--<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet"> -->

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		  <!-- Latest compiled and minified CSS -->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		  <link rel="stylesheet" type="text/css" href="css/style2.css">

		  <!-- jQuery library -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		  <!-- Popper JS -->
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		  <!-- Latest compiled JavaScript -->
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


      </head>
    <body onload="myFunction()">
    	<div id="loading"></div>
		  <div>
		 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		 	<div class="container">
		 		<a href="index.php" class="navbar-brand text-warning font-weight-bold">SmartLab</a>
		 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
		 			<span class="navbar-toggler-icon"></span>
		 		</button>
		 		<div class="collapse navbar-collapse text-center" id="collapsenavbar">
				 <ul class="navbar-nav ml-auto">
			         <li class="nav-item"><a href="service.php" class="nav-link">Services</a></li>
				     <li class="nav-item"><a href="products.php" class="nav-link">Products</a></li>
				     <li class="nav-item"><a href="careers.php" class="nav-link">Careers</a></li>
				     <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
			     </ul>
			 </div>
			</div>
			     
			 
		 </nav>
		
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	  <div class="container">
	     <section>
              <div class="container-contact100">
                  <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

                  <!--<div class="contact100-more">-->
                  <!--<i class="zmdi zmdi-phone-in-talk"></i>-->
                  <!--(+100) 345 6389-->
                  <!--</div>-->

                  <div class="wrap-contact100">
                      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact Us
				</span>

                          <div class="wrap-input100 validate-input" data-validate="Name is required">
                              <span class="label-input100">Name</span>
                              <input class="input100" type="text" name="name" placeholder="Name...">
                              <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                              <span class="label-input100">Email</span>
                              <input class="input100" type="text" name="email" placeholder="Email addess...">
                              <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100">
                              <span class="label-input100">Phone</span>
                              <input class="input100" type="text" name="phone" placeholder="Phone Number...">
                              <span class="focus-input100"></span>
                          </div>

                          <div class="wrap-input100 validate-input" data-validate = "Message is required">
                              <span class="label-input100">Message</span>
                              <textarea class="input100" name="message" placeholder="Questions/Comments..."></textarea>
                              <span class="focus-input100"></span>
                          </div>

                          <div class="container-contact100-form-btn">
                              <div class="wrap-contact100-form-btn">
                                  <div class="contact100-form-bgbtn"></div>
                                  <button name="contactSubmit" class="contact100-form-btn">
                                      Send
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>



              <!--<div id="dropDownSelect1"></div>-->
          </section>

	  </div>
	  <br>
	  <br>
	  <br>
	  <br>


	  <section class="contact-section">
		  <!--footer starts from here-->
		  <footer class="footer">
			  <div class="container bottom_border">
				  <div class="row">
					  <div class=" col-sm-4 col-md col-sm-4  col-12 col">
						  <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
						  <!--headin5_amrc-->
						  <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						  <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
						  <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
						  <p><i class="fa fa fa-envelope"></i> info@example.com  </p>


					  </div>


					  <div class=" col-sm-4 col-md  col-6 col">
						  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
						  <!--headin5_amrc-->
						  <ul class="footer_ul_amrc">
							  <li><a href="http://webenlance.com">Image Rectoucing</a></li>
							  <li><a href="http://webenlance.com">Clipping Path</a></li>
							  <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
							  <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
							  <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
							  <li><a href="http://webenlance.com">Image Cropping</a></li>
						  </ul>
						  <!--footer_ul_amrc ends here-->
					  </div>


					  <div class=" col-sm-4 col-md  col-6 col">
						  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
						  <!--headin5_amrc-->
						  <ul class="footer_ul_amrc">
							  <li><a href="http://webenlance.com">Remove Background</a></li>
							  <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
							  <li><a href="http://webenlance.com">Logo Design</a></li>
							  <li><a href="http://webenlance.com">Vectorization</a></li>
							  <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
							  <li><a href="http://webenlance.com">Image Cropping</a></li>
						  </ul>
						  <!--footer_ul_amrc ends here-->
					  </div>


					  <div class=" col-sm-4 col-md  col-12 col">
						  <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
						  <!--headin5_amrc ends here-->

						  <ul class="footer_ul2_amrc">
							  <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
							  <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
							  <li><a href="#"><i class="fa fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
						  </ul>
						  <!--footer_ul2_amrc ends here-->
					  </div>
				  </div>
			  </div>


			  <div class="container">
				  <ul class="foote_bottom_ul_amrc">
					  <li><a href="http://webenlance.com">Home</a></li>
					  <li><a href="http://webenlance.com">About</a></li>
					  <li><a href="http://webenlance.com">Services</a></li>
					  <li><a href="http://webenlance.com">Pricing</a></li>
					  <li><a href="http://webenlance.com">Blog</a></li>
					  <li><a href="http://webenlance.com">Contact</a></li>
				  </ul>
				  <!--foote_bottom_ul_amrc ends here-->
				  <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

				  <ul class="social_footer_ul">
					  <li><a href="http://webenlance.com"><i class="fa fa-facebook-f"></i></a></li>
					  <li><a href="http://webenlance.com"><i class="fa fa-twitter"></i></a></li>
					  <li><a href="http://webenlance.com"><i class="fa fa-linkedin"></i></a></li>
					  <li><a href="http://webenlance.com"><i class="fa fa-instagram"></i></a></li>
				  </ul>
				  <!--social_footer_ul ends here-->
			  </div>

		  </footer>
	  </section>
	  <script>
       var preloader= document.getElementById ('loading');
       function myFunction(){
       	preloader.style.display = 'none';
       } 
     </script>


    </body>
</html>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<?php
//ini_set('SMTP', 'mail.smartlabiot.com');
//ini_set('smtp_port', '26');
//ini_set('username', 'noreply@smartlabiot.com');
//ini_set('password', 'smartlabiot');
//ini_set('sendmail_from', 'noreply@smartlabiot.com');

if(isset($_POST['contactSubmit'])){ //check if form was submitted
    $name = $_POST['name']; //get input text
    $email = $_POST['email']; //get input text
    $phone = $_POST['phone']; //get input text
    $message1 = $_POST['message']; //get input text

    $to = "tanvirpasha21@gmail.com";
    $subject = "Contact SmartLab";

    $message = "
<html>
<head>
<title>Contact Email from website</title>
</head>
<body>
<p><b>From:</b></p>
<table>
<tr>
<th>Email</th>
<th>Phone</th>
</tr>
<tr>
<td>".$email."</td>
<td>".$phone."</td>
</tr>
</table>

<p><b>Messege:</b></p>
<p>".$message1."</p>


</table>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <noreply@smartlabiot.com>' . "\r\n";
//    $headers .= 'Cc: myboss@example.com' . "\r\n";

    $retval = mail ($to,$subject,$message,$headers);

    if( $retval == true ) {
        echo "<script>
$.alert({
    title: 'Alert!',
    content: 'Mail has been sent',
});
</script>";
    }else {
        echo "<script>
$.alert({
    title: 'Alert!',
    content: 'Something went wrong! , please contact with phone',
});
</script>";
    }


}
?>