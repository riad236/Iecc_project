<?php include("include/header.php")?>
         <div>
            <div class="jumbotron no-space ng-scope">
               <div class="row">
                  <div class="col-xs-12 no-space">
                     <div class="homepageCarousel">
                        <div class="slick-slide">
                            <style>
                                .sl{
                                    height:700px
                                }

                            </style>
                           <img class="sl" src="./assets/slider/Slider_img3.png" alt="Admissions-Edu-Event-feb-revised.jpg" >
                           
                        </div>
                        <div class="slick-slide">
                           <img class="sl" src="./assets/slider/Slider_img2.png" alt="Practice IELTS for FREE*" >
                         
                        </div>
                      





                        <!-- <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button> -->
                     </div>
                     <div class="carousel-parent row">
                        <div class="carouselComponents col-xs-12 landView">
                           <div class="image-content col-xs-12">
                              <div>
                                 <div class="home-page">
                                 </div>
                              </div>
                              <div class="">
                                 <div class="home-page">
                                    <ul class="carousel-list list-container col-xs-12" id="carouselList">
                                       <li class="col-xs-12 col-sm-3">
                                          <div class="carousel-boxes left-box">
                                             <a class="common-text" target="_blank" href="#">
                                                <div class="col-xs-4 col-sm-12 carousel-image-holder">
                                                   <img src="./assets/images/admission.jpg"><br>
                                                </div>
                                                <div class="col-xs-8 col-sm-12">
                                                   <h2 class="content">Admission</h2>
                                                   <span class="common-text">Could your ideal course be in Australia, Canada, New Zealand, the UK or the US?</span>
                                                </div>
                                             </a>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="image-content col-xs-12">
                              <div>
                                 <div class="home-page">
                                 </div>
                              </div>
                              <div class="">
                                 <div class="home-page">
                                    <ul class="carousel-list list-container col-xs-12" id="carouselList">
                                       <li class="col-xs-12 col-sm-3">
                                          <div class="carousel-boxes left-box">
                                             <a class="common-text" target="_blank" href="#">
                                                <div class="col-xs-4 col-sm-12 carousel-image-holder">
                                                   <img src="./assets/images/sch.png"><br>
                                                </div>
                                                <div class="col-xs-8 col-sm-12">
                                                   <h2 class="content">Scholarship</h2>
                                                   <span class="common-text">Got questions? We can help. Book a free appointment with one of our expert teams.</span>
                                                </div>
                                             </a>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="image-content col-xs-12">
                              <div>
                                 <div class="home-page">
                                 </div>
                              </div>
                              <div class="">
                                 <div class="home-page">
                                    <ul class="carousel-list list-container col-xs-12" id="carouselList">
                                       <li class="col-xs-12 col-sm-3">
                                          <div class="carousel-boxes left-box">
                                             <a class="common-text" target="_blank" href="#">
                                                <div class="col-xs-4 col-sm-12 carousel-image-holder">
                                                   <img src="./assets/images/sch1.png"><br>
                                                </div>
                                                <div class="col-xs-8 col-sm-12">
                                                   <h2 class="content">Why IECC?</h2>
                                                   <span class="common-text">
                                                      As international education experts, we can turn your dreams into plan.
                                                   </span>
                                                </div>
                                             </a>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="home-curated-container">
                  <div class="col-md-9">
                     <div class="home-container" style="margin-right: 0">
                        <div class="row">
                           <div class="col-xs-12">
                              <h2 style="font-weight:bold;font-size: 25px;">Welcome to IECC</h2>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-12">
                              <p style="font-family:Arial;font-size:16px;">IECC is one of the leading international education consultancy agencies. Since 2005, we have supported more than 3000 students to get admission to the Top Ranked British, American, Canadian and Australian Universities &amp; Colleges. Students from Bangladesh, India, Pakistan, China, Middle East, Africa, South America and Europe have highly benefited from our world class services.</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-12">
                               <a href="#" class="btn btn-danger text-center">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="stdntess-openform home-form">
                      <style type="text/css">
                                .openenq_form .lftform_cont .inner-leftsec {
    padding-right: 200px;
}
                              </style>
                        <div class="openenq_form">
                              <div class="lftform_cont no-space">
                              
                              <div class="inner-leftsec">
                                 <h2>Apply</h2>
                                 <h4>Here Now</h4>
                              </div>
                           </div>
                           <div class="apply-details">
                              <p style="font-size: 13px;"><span class="text-red">Simply fill in your details here,</span> and one of our education advisors will get in touch.</p>
                           </div>
                           <div class="col-md-12 rightfrm_cont no-space">
                              <div class="opnfrm lightbox_wrap">
                                 <div class="form-lbnew_wrap">
                                    <div class="rfrmtop">
                                       <div class="rfrmttl">Interested in studying abroad with IECC?</div>
                                       <div class="rfrmsttl">Enter your details and we'll call you back when it suits you.</div>
                                    </div>
                                       <form id="IECCDynamicEnquiryForm" class="rfrmbtm clearfix" action="" method="post">
                                    	<?php
                                    		if(isset($_POST["apply"])){
                                    			$first_name=$_POST["first"];
                                    			$last_name=$_POST["last"];
                                    			$email=$_POST["email"];
                                    			$country_code=$_POST["country_code"];
                                    			$phone=$_POST["phone"];
                                    			$country = $_POST["country"];
                                    			$course = $_POST["course"];



                                    			if(empty($phone)){

                                    				echo '<script>
                                    						swal({
															  title: "empty phone number",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';

                                    			}
                                    		
                                    			elseif(empty($country_code)){

                                    				echo '<script>
                                    						swal({
															  title: "Country Code empty",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';
                                    			}
                                    				elseif(empty($first_name)){

                                    				echo '<script>
                                    						swal({
															  title: "Please fill up First Name",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';

                                    			}
                                    			elseif (!preg_match("/^[A-Za-z\\- \']+$/",$first_name)) {
                                                    echo '<script>
                                    						swal({
															  title: "characters,numbers are not allowed in first name ",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';
                                                }
                                                elseif (!preg_match("/^[A-Za-z\\- \']+$/",$last_name)) {
                                                    echo '<script>
                                    						swal({
															  title: "characters,numbers are not allowed in first name ",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';
                                                }elseif(!preg_match("/^\d+$/",$phone)){
                                                    echo '<script>
                                    						swal({
															  title: "characters,Letters are not allowed in Phone Number ",
															 
															  icon: "error",
															  button: "ok!",
															});
															</script>
															';
                                                }

                                                elseif(!preg_match("/^\d$/",$country_code)){
                                                    echo '<script>
                                                swal({
                                title: "invalid country code ",
                               
                                icon: "error",
                                button: "ok!",
                              });
                              </script>
                              ';
                                                }

                                    			else{
                                    				$apply=$user->apply($first_name,$last_name,$email,$country_code,$phone,$country,$course);
                                    				
                                    		 require 'phpmailer/PHPMailerAutoload.php';

								$mail = new PHPMailer();

                                    			try {
							                           // Enable verbose debug output
								$mail->isSMTP();                                      // Set mailer to use SMTP
								$mail->Host = 'mail.bdsentineltruckers.com';  // Specify main and backup SMTP servers
								$mail->SMTPAuth = true;                               // Enable SMTP authentication
								$mail->Username = 'info@bdsentineltruckers.com';                 // SMTP username
								$mail->Password = 'diit54321@<>';                           // SMTP password
								$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
								$mail->Port =  465;                                    // TCP port to connect to	
									
								$mail->setFrom('info@bdsentineltruckers.com','IECC');
								$mail->addAddress($email, $name);
								$mail->Subject = "Apply confirmation Email!";
								$mail->isHTML(true);
								$mail->Body = "
								<!doctype html>
<html>
  <head>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class='' style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
    <table border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;'>
      <tr>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
        <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;'>
          <div class='content' style='box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;'>

            
            <table class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>

              <!-- START MAIN CONTENT AREA -->
			  <th style='background:#538cc6;width:100px;height:80px;'><h2 style='color:white;'>IECC'S</h2></th>
              <tr>
                <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                  <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                        <img style='width:250px;margin-left:130px;' src='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhATEBAWFhIXEBYSFRgWGRUSGhgVGBUWFxUVFRUYHSggGholGxUWIjEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGC0gHR0tKy0tLSstNy01LTUrLSstKzcrKy4tKy0tKy03KystKysrNy0tNy0tKy04KysrKzcrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABwEEBQYIAwL/xABSEAABAwIDBAQHCQoLCQAAAAABAAIDBBEFEiEGBxMxIkFRYRRxc4GRobEXMjM0cnSywdEIIzVCUlOSo8LSFRYlVFViY2Sz4fAkRIKEk6LD4vH/xAAaAQEAAgMBAAAAAAAAAAAAAAAAAQQCAwYF/8QAJhEBAAICAQMCBwEAAAAAAAAAAAECAxEEBRIxQYEGEyEyNFFhIv/aAAwDAQACEQMRAD8AnFERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERabtfvEpKB5jkEj5rA5I2jr7XuIHrKDcl8SyBoLnOAA5kkADxkqB8a3yVUlxTQshb1Fw4r/HrZo9C0TFsdqakk1NRJJ3OccvmYNETp0Hje8zD6a7TUcR4NskIMh87gMo9K0LGt9c7rto6ZsY6nSniO/QbYDzlRSAvvgusHZTlPI2NvSo2yikz4SnsfvhlY7JiXTjJuJWNALNeTmMFnDxa+NTNh9dHMxskUjXxuF2uabg/67FyHZZzZXaypoH5qd92E9ON1yx469Oo94UsZjTqpFqOxW3lNXtDWHhzgdKJ5Ad42a9JviW2gohVERAREQEREFCVS6ssbreDBLLa+Rhdbtso1O8yf8xH+k5YXyVp5WuPws3I38uN6SvdVBUT+6ZUfmI/S5bdsPtG+sbKXsa3I4AZSTe4vfVRXLW3hnn6fnwV7skahtaKgVVsUhERAREQEREBERAKwu0OzNNWNLaiIOPU61nDvDlmkQc+bY7rZabp08gkjJADXENfc8gB1lR7LGWktcCHA2IOhB7L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'>
			   <tr>
                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                        <p style='font-family: color:#3973ac; sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Hi there</p>
                        <p style='font-family: sans-serif;color:#3973ac; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>thank you for apply.we will contact with you shortly</p>
                        <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;'>
                          <tbody>
                            <tr>
                              <td align='left' style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;'>
                                <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                  <tbody>
                                    <tr>
                                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;'> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style='font-family:sans-serif;color:#3973ac; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Thank You</p>
                        
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class='footer' style='clear: both; Margin-top: 10px; text-align: center; width: 100%;'>
              <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                <tr>
                  <td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>IECC'S</span>
                    <br> Dont like these emails? <a href='' style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;'>Unsubscribe</a>.
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    Powered by <a style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>IECC'S</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'></td>
      </tr>
    </table>
  </body>
</html>		
								"
				;

								if ($mail->send()){
								echo '
                                         <script>    
                                                         swal({
                                                              type: "success",
                                                              title: "Thanks for the registration",
                                                              text: "One of our dedicated counsellor will be in touch with you, within a very short time!",
                                                              allowOutsideClick:false,
                                                            }).then(function() {
                                                            window.location = "global";
                                                        });
                                         </script>
                                                 
                                                 ';
												 
								}
								
								
							}catch (Exception $e) {
								echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
							}
                                    			}




                                    		}

                                    	?>


                                       <div class="row opnfrm_uname">
                                          <div class="floatingwrap ">
                                             <div class="form-group">
                                                <input id="firstName" name="first" class=" form-control" type="text" placeholder="First name*" value="">
                                             </div>
                                             <div class="help-block"><span class="errmsg">We’d love to know your name!</span> <span class="glyphicon"></span></div>
                                          </div>
                                          <div class="floatingwrap ">
                                             <div class="form-group">
                                                <input id="lastName" name="last" class=" form-control" type="text" placeholder="Last name*" value="">
                                             </div>
                                             <div class="help-block"><span class="errmsg">Please enter your last name</span> <span class="glyphicon"></span></div>
                                          </div>
                                       </div>
                                       <div class="floatingwrap opnfrm_email ">
                                          <div class="form-group">
                                             <input id="emailId" name="email" class=" form-control" type="text" placeholder="Email address*" value="">
                                          </div>
                                          <div class="help-block"><span class="errmsg">We need an email we can contact you on</span> <span class="glyphicon"></span></div>
                                       </div>
                                       <div class="row posrel">
                                          <div class="col-md-4 col-xs-3 no-space">
                                             <div class="floatingwrap ccode rfrmsuc">
                                                <div class="form-group">
                                                   <input id="dialCode" name="country_code" class=" form-control" placeholder="Country code*"  type="text" value="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-8 col-xs-9 no-space ">
                                             <div class="floatingwrap ">
                                                <div class="form-group">
                                                   <input id="phoneNo" name="phone" class=" form-control" type="text" placeholder="Mobile number*" value="" autocomplete="off">
                                                </div>
                                                <div class="help-block">
                                                   <span class="errmsg">
                                                   <span id="phn_null">Please enter a valid phone number</span>
                                                   <span id="phn_len">Please check the number – it should be 10-11 digits with no spaces.</span>
                                                   </span>
                                                   <span class="glyphicon"></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row opnfrm_stdycntry">
                                          <div class="floatingwrap frmdpdn selcntry ">
                                             <div class="form-group">
                                                <div class="form-control floatselect ui dropdown selection" tabindex="0">
                                                   <select id="preferedStudyDestination" name="country">
                                                      <option value="" selected="selected">
                                                         Please select
                                                      </option>

                                                      <?php $view_country=$super_admin->view_country();
															while($row=$view_country->fetch_array()){
																
										 				?>

                                                      <option value="<?php echo $row["country_name"]?>"><?php echo $row["country_name"]?></option>
                                                     <?php }?>
                                                   </select>
                                                   <i class="dropdown icon"></i>
                                                   <div class="default text">
                                                      Please select
                                                   </div>
                                                   <div class="menu" tabindex="-1">
                                                   	 <?php $view_country=$super_admin->view_country();
															while($row=$view_country->fetch_array()){
																
										 				?>
                                                      <div class="item" data-value="<?php echo $row["country_name"]?>"><?php echo $row["country_name"]?></div>
                                                     <?php }?>
                                                   </div>
                                                </div>
                                                <label class="control-label required" for="preferedStudyDestination" aria-label="Your preferred study destination">
                                                Your preferred study destination</label>
                                             </div>
                                             <div class="help-block"><span class="errmsg">Got any ideal countries in mind?</span></div>
                                          </div>
                                       </div>

                                       
                                       <div class="floatingwrap frmdpdn opnfrm_stdyr">
                                       	
                                          <div class="form-group">
                                         
                                             <div class="form-control floatselect ui dropdown selection" tabindex="0">
                                             
                                                <select id="preferedStudyPlanDate" name="course">

                                                   <option value="" selected="selected">
                                                      Please select
                                                   </option>
                                                   	<?php $view_course=$super_admin->view_course();
															while($row=$view_course->fetch_array()){
																
										 				?>
                                                   <option value="<?php echo $row["course_name"]?>"><?php echo $row["course_name"]?></option>
                                                           <?php }?>                                   
                                                </select>
                                                
                                                <i class="dropdown icon"></i>
                                                <div class="default text">
                                                   Please select
                                                </div>
                                                	
                                                <div class="menu" tabindex="-1">
                                                	<?php $view_course=$super_admin->view_course();
															while($row=$view_course->fetch_array()){
																
										 				?>
                                                   <div class="item" data-value="<?php echo $row["course_name"]?>"><?php echo $row["course_name"]?></div>
                                                               <?php }?>                                     
                                                </div>
                                                 
                                             </div>
                                             <label class="control-label required" for="preferedStudyPlanDate" aria-label="When do you plan to study?">
                                             Your Preferred Course</label>
                                             
                                          </div>
                                          
                                          <div class="help-block"><span class="errmsg">Give us an idea of when you want to go </span></div>

                                       </div>
                                    
                                       <div class="floatingwrap frmdpdn pref-time">
                                          <div class="form-group">
                                             <div class="form-control floatselect ui dropdown selection" tabindex="0">
                                                <select id="preferredContactTime" name="preferredContactTime">
                                                   <option value="anytime">Anytime</option>
                                                   <option value="9:30 am to 1:30 pm">9:30 am to 1:30 pm</option>
                                                   <option value="1:30 pm to 5:30 pm">1:30 pm to 5:30 pm</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">Anytime</div>
                                                <div class="menu" tabindex="-1">
                                                   <div class="item active selected" data-value="anytime">Anytime</div>
                                                   <div class="item" data-value="9:30 am to 1:30 pm">9:30 am to 1:30 pm</div>
                                                   <div class="item" data-value="1:30 pm to 5:30 pm">1:30 pm to 5:30 pm</div>
                                                </div>
                                             </div>
                                             <label class="control-label " for="preferredContactTime" aria-label="When can we call you back?*">
                                             When can we call you back?*</label>
                                          </div>
                                       </div>

                                           <div class="checkbox chk_title">IECC will not share your details with others without your permission:</div>
                                           <div class="checkbox">
                                               <input type="checkbox" class="styled-checkbox" id="termsandConditionsAcceptance" name="termsandConditionsAcceptance">
                                               <label for="termsandConditionsAcceptance">
                                                   I agree to IECC <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy policy</a></label>
                                               <div class="help-block"><span class="errmsg">Please agree to our terms</span></div>
                                           </div>
                                           <div class="checkbox">
                                               <input type="checkbox" name="contactMethod" id="contactMethod" class="styled-checkbox">
                                               <label for="contactMethod">Please contact me by phone or email to assist my enquiry</label>
                                               <div class="help-block"><span class="errmsg">Can we call you to get started?</span></div>
                                           </div>
                                           <div class="checkbox">
                                               <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance" class="styled-checkbox">
                                               <label for="marketingPreferenceAcceptance">
                                                   I’d love to get useful emails from IECC about study abroad, scholarships and IELTS</label>
                                           </div>
                                           <button type="submit" name="apply" class="button5"><span>SUBMIT</span></button>

                                           <style>
                                               .button5{
                                                   display:inline-block;
                                                   padding:0.46em 1.6em;
                                                   border:0.1em solid red;
                                                   margin-left:330px;
                                                   border-radius:0.12em;
                                                   box-sizing: border-box;
                                                   text-decoration:none;
                                                   font-family:'Roboto',sans-serif;
                                                   font-weight:300;
                                                   color:white;
                                                   text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
                                                   background-color:red;
                                                   text-align:center;
                                                   transition: all 0.15s;
                                               }
                                               .button5:hover{
                                                   text-shadow: 0 0 2em rgba(255,255,255,1);
                                                   color:#FFFFFF;
                                                   border-color:#FFFFFF;
                                               }
                                               @media all and (max-width:667px){
                                                   .button5{
                                                       display:block;

                                                       margin-left:0px;
                                                   }
                                               }
                                           </style>

                                       <div>
                                          
                                       </div>
                                    </form>                                 
                                 </div>
                              </div>
                           </div>
						   
						  
                     </div>
					 
					   <div id="ads" style="margin-top:5px; width:1150px;color:white;height:150px;background-color:#ff00004d;">
						   
                <?php $view_add=$user->view_add();
          while($row=$view_add->fetch_array()){
            
        ?>

							<img style="margin:0px;width:1150px;height:150px;" src="photo/ads/<?php echo $row['image']?>"  class="store-link">
						   <?php }?>
						   </div>
						   
                        </div><br>
					 
                  </div>
				  
				 
				  
                  <div class="col-md-3">
                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fieccbd%2F&tabs=timeline&width=275&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="275" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                      <div class="app-downloads">
                        <h3> Download Our Apps</h3>
                       <a href=""> <img src="./assets/images/play.png"  class="store-link"></a>
                        <img src="./assets/images/apple-store.png" class="store-link">
                     </div>
                  </div>

               </div>
            </div>



            <div class="home-curated-greyBg row home-events-articles-section">
               <div class="home-container home-location-container clearfix">
               <div class="yCmsComponent yComponentWrapper">
                  <div class="content">
                     <h2 class="section-title">Choose Your Study Destination</h2>

                  </div>
                   <p class="section-sub-title">If you have a dream to be settled in a nice country, this can be a best choice.Get the proper guidance for choosing your destination we are here to help you. Learn more about your destination bellow.</p>
               </div>


               <div class="home-curated-container destination-slider">

                <?php $view_country=$super_admin->view_country();
              while($row=$view_country->fetch_array()){

            ?>
                  <div class="yCmsComponent col-xs-12 col-sm-6 col-md-3 no-space yComponentWrapper">
                     <div class="">
                        <div class="home-page">
                           <div class="image-section">
                              <img style="width:263px;" src="photo/<?php echo $row["image"]?>" alt="Study In Australia">
                              <div  class="list-header-name">
                                 <div  ><a style="margin-left:0px;"  href="destination?country=<?php echo $row ["id"]?>" title="Australia"><?php echo $row["country_name"]?></a></div>
                                 <ul class="sub-item-country">
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php }?>
               <div class="heroImages-box ng-scope row home-curated-container visible-xs help-me-decide-block">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features" id="mobileHelpMeDecide">
                     </div>
                  </div>
               </div>
            </div>
            </div>
          </div>



           <div class="home-curated-container  home-course-list row custom-course-list">
               <div class="heroImages-box ng-scope row">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features titleLowerHome">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="section-title">Choose Your City</h2>

                           </div>
                            <p class="city">If you have a dream to be settled in a nice country, this can be a best choice.Get the proper guidance for choosing your destination we are here to help you. Learn more about your destination bellow.</p>
                        <style>
                            .city{
                                font-size: 16px;
                                text-align: center;
                                color: #6A6767;
                                margin: 10px 225px;


                                font-family: "Open Sans", Arial, sans-serif;
                            }
                        </style>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="heroImages-box ng-scope">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features popularCoursesHover">
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div style="background-image: none;" class="course-item">
                                         <img  src="./assets/img/city/London.png" class="course-image">
                                         <ul class="main-course-list">
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/health-and-medicine/">Study In London</a>
                                                 </div>
                                                 <a class="course-title"  target="">London has the largest student population of any British city, although not the highest per capita. Universities in London may be divided into two groups</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div class="course-item" style="background-image:none">
                                         <img src="./assets/img/city/Melbourne.png" class="course-image">

                                         <ul class="main-course-list" >
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/business/">Study In Melbourne</a>
                                                 </div>
                                                 <a class="course-title"  target="">Melbourne's two largest universities are the University of Melbourne and Monash University, the largest university in Australia</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div style="background-image: none;" class="course-item">
                                         <img  src="./assets/img/city/Sheffield.png" class="course-image">
                                         <ul class="main-course-list">
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/health-and-medicine/">Study In Sheffield</a>
                                                 </div>
                                                 <a class="course-title" target="">Sheffield is a multi-campus university predominantly over two campus areas.he Western Bank and the St George's<br><br></a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div style="background-image: none;" class="course-item">
                                         <img  src="./assets/img/city/Sydney.png" class="course-image">
                                         <ul class="main-course-list">
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/health-and-medicine/">Study In Sydney</a>
                                                 </div>
                                                 <a class="course-title"  target="">The University of Sydney (USYD, Sydney or informally Sydney Uni) is an Australian public research university in Sydney.Australia. Founded in 1850, it was Australia's first university.</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div style="background-image: none;" class="course-item">
                                         <img  src="./assets/img/city/Toronto.png" class="course-image">
                                         <ul class="main-course-list">
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/health-and-medicine/">Study In Toronto</a>
                                                 </div>
                                                 <a class="course-title"  target="">The University of Toronto (UofT, or UToronto) is a public research university in Toronto, Ontario, Canada, located on the grounds that surround Queen's Park.</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                             <div class="">
                                 <div class="home-page">
                                     <div style="background-image: none;" class="course-item">
                                         <img  src="./assets/img/city/Washington.png" class="course-image">
                                         <ul class="main-course-list">
                                             <li>
                                                 <div class="course-title">
                                                     <a class="course-title" target="" href="#search/health-and-medicine/">Study In Washington</a>
                                                 </div>
                                                 <a class="course-title"  target="">Founded in 1861, Washington was first established in downtown Seattle approximately a decade after the city's founding to aid its economic development.</a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>

                     <div class="home-curated-greyBg">
            <div class="home-curated-container home-course-list row">
               <div class="heroImages-box ng-scope row">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features titleLowerHome">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="section-title">Professional Accreditation</h2>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="heroImages-box ng-scope">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features ">
                        <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                           <div class="">
                              <div class="home-page">
                                 <div class="course-item" style="background-image: url(./assets/images/shu.png);background-size: 60px 65px;">
                                    <ul class="main-course-list" >
                                       <li>
                                          <div class="course-title">
                                             <a class="course-title" target="" href="#search/business/">SHU International
Agent of the year 2008</a>
                                          </div>
                                          <ul class="sub-course-list">
                                             <li class="col-sm-6 col-md-4">
                                                <span class="course-title">We won "SHU International Agent of the
year 2008" in 2008 because of our Outstanding
Contribution to SHU's international student’s
recruitment programme</span>
                                             </li>
                                             
                                             
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                           <div class="">
                              <div class="home-page">
                                 <div class="course-item" style="background-image: url(./assets/images/top.png);background-size: 50px 65px;">
                                    <ul class="main-course-list">
                                       <li>
                                          <div class="course-title">
                                             <a class="course-title" target="" href="#search/business/">TOP Achiever Award
-By Kaplan</a>
                                          </div>
                                          <ul class="sub-course-list">
                                             <li class="col-sm-6 col-md-4">
                                                <span class="course-title">We also won “TOP Achiever Award
-By Kaplan” In 2009 <br><br><br><br></span>
                                             </li>
                                             
                                             
                                          </ul>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="yCmsComponent col-xs-12 col-sm-4 col-md-4 no-space yComponentWrapper">
                           <div class="">
                              <div class="home-page">
                                 <div class="course-item" style="background-image: url(./assets/images/authorized.png);">
                                    <ul class="main-course-list">
                                       <li>
                                          <div class="course-title">
                                             <a class="course-title" target="" href="#search/business/">Authorized Agent <br><br></a>
                                          </div>
                                          <ul class="sub-course-list">
                                             <li class="col-sm-6 col-md-4">
                                                <span class="course-title">We awarded as “Authorized Agent”
by British High Commission in Bangladesh
which helped our students to get
FastTrack UK visa Service</span>
                                             </li>
                                             
                                             
                                          </ul>
                                       </li>
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

             <div class="home-curated-container row">
               <div class="heroImages-box ng-scope row">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features titleLowerHome">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="section-title">Our Success</h2>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" home-curated-container row">
                  <div class="content">

                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="525"></iframe>
                        <canvas id="chart-uk2" class="chart-pie" data-val="96" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">96%</h3>
                        <h2>United Kingdom</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-uk2");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>
                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="525"></iframe>
                        <canvas id="chart-uk" class="chart-pie" data-val="92" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">92%</h3>
                        <h2>Australia</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-uk");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>
                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="526"></iframe>
                        <canvas id="chart-aus" class="chart-pie" data-val="98" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">98%</h3>
                        <h2>Canada</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-aus");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>

                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="527"></iframe>
                        <canvas id="chart-cn" class="chart-pie" data-val="90" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">90%</h3>
                        <h2>United States</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-cn");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>
                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="528"></iframe>
                        <canvas id="chart-us" class="chart-pie" data-val="100" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">100%</h3>
                        <h2>Malaysia</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-us");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>
                     <div class="col-md-2 text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" __idm_frm__="525"></iframe>
                        <canvas id="chart-uk3" class="chart-pie" data-val="91" width="150" height="150" style="display: block;"></canvas>
                        <h3 class="chart-pie-details">91%</h3>
                        <h2>Sweden</h2>
                     </div>
                     <script>
                        $(function(){
                           var chart = $("#chart-uk3");
                           new Chart(chart[0],{"type":"doughnut","data":{"datasets":[{"data":[chart.data('val'),(100-chart.data('val'))],"backgroundColor":["#e7212d","rgb(210, 210, 210)"]}]},
                              "options" : {"cutoutPercentage": 70,tooltips: {enabled: false},hover: {mode: null},}});
                        });
                     </script>
                  </div>
               </div>
           </div>



           <div class="home-curated-container row">
               <div class="heroImages-box ng-scope row" style="padding-bottom: 120px">
                  <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                     <div class="hero-features titleLowerHome">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="section-title">Our Success Story</h2>
                              <p class="section-sub-title"> </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
           </div>
           <div class="home-curated-greyBg">
               <div class=" home-curated-container row">
                   <div class="content">
                    <div class="carousel-parent row">
                        <div class="carouselComponents col-xs-12 landView testimonial-slider">
                           <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>

                           <?php $view_testimonial=$super_admin->view_testimonial();
          while($row=$view_testimonial->fetch_array()){
            
        ?>


                           <div class="testimonial-card col-md-4">
                              <div class="top">
                                 <div style="background-image: url(photo/testimonial/<?php echo $row["image"]?>)" class="testimonial-image"> </div>
                              </div>
                              <div class="middle clearfix">
                                 <h4 class="name"><?php echo $row["name"]?></h4>
                                 <p class="designation"><?php echo $row["ins"]?> <br><?php echo $row["education"]?><br><?php echo $row["country"]?></p>

                              </div>
                              <div class="footer clearfix">
                                 <p class="comment">
                                    "<?php echo $row["discription"]?>"
                                 </p>

                                  <style>
                                      .comment{
                                          font-family: "Open Sans", Arial, sans-serif;
                                      }
                                  </style>
                              </div>

                           </div>
                           
                       <?php }?>
                     
              
                      


                           <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>

                        </div>
                     </div>
                   </div>
               </div>
           </div>

           <div class="home-curated-greyBg partners-section row">
               <div class="home-curated-container-fluid">
                  <div class="heroImages-box ng-scope row">
                     <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                        <div class="hero-features titleLowerHome partnerSection">
                           <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                              <div class="content">
                                <h2 class="section-title">Our Partners</h2>
                              <p class="section-sub-title"> </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="heroImages-box ng-scope row">
                     <div class="col-xs-12 col-sm-12 col-md-12 no-space">
                        <div class="hero-features partners-slider">

<?php $view_part=$user->view_part();
while($row=$view_part->fetch_array()){

    ?>

                           <div class="yCmsComponent col-xs-12 col-sm-4 col-md-2 no-space yComponentWrapper">
                              <div class="">
                                 <div class="home-page">
                                    <ul class="University-list list-container" >
                                       <li  class="col-xs-3 col-sm-3">
                                          <div   class="left-box landingHovoer">
                                             <a href="<?php echo $row['link']?>" target="_blank"><img  src="photo/partner/<?php echo $row['image']?>" ></a>
                                          </div>



                                       </li>                                       
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>




            <div class="row home-events-articles-section custom-events">
               <div class="home-curated-container clearfix art_wrp">
                  <div class="col-xs-12 col-sm-6 landArticle">
                     <div class="titleLowerHome ng-scope row">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="text-center">Recent Articles</h2>
                           </div>
                        </div>
                     </div>
                     <div class="heroImages-box ng-scope row">

                      <?php $recent_post=$super_admin->recent_post();
              while($row=$recent_post->fetch_array()){
                ?>
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="">
                              <div class="home-page">
                                 <div class="row articles-events-section">
                                    <a class="pop_artWrap" target="" href="article?article=<?php echo $row ["post_id"]?>">
                                       <div class="articlesMidLeft">
                                          <img src="photo/post/<?php echo $row['image']?>" alt="">
                                       </div>
                                       <div class="articlesMidRight">
                                          <h3 class="name"><?php echo $row["post_title"]?></h3>
                                          <p style="margin-top:10px;"><label>Post-author</label>:&nbsp <?php echo $row["admin_name"]?></p>
                                          <div class="description"><?php echo $row["post_des"]?></div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php }?>
                    
                        <a href="#" class="btn btn-danger text-center"> read more</a>
                     </div>

                  </div>
                <div class="col-xs-12 col-sm-6 landArticle">
                     <div class="titleLowerHome ng-scope row">
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="content">
                              <h2 class="text-center">Upcoming  Events</h2>
                           </div>
                        </div>
                     </div>
                     <div class="heroImages-box ng-scope row">
                         
                         <?php
                                $view_event=$user->view_event();
                            while($row=$view_event->fetch_array()){

                            $string = $row["event_des"];

                            $string =$user->turncate2($string);


                            ?>
                         
                        <div class="yCmsComponent col-xs-12 col-sm-12 col-md-12 no-space yComponentWrapper">
                           <div class="">
                              <div class="home-page">
                                 <div class="row articles-events-section">
                                     <a class="pop_artWrap" target="_blank" href="event-details?event=<?php echo $row ["id"]?>">
                                       <div class="articlesMidLeft">
                                          <img src="photo/event/<?php echo $row['image']?>" alt="">
                                       </div>
                                       
                                        
                                       
                                       
                                       <div class="articlesMidRight">
                                          <h3 class="name text-truncate"><?php echo $row['event_title']?></h3>
                                          <p class="datetime">
                                             <i class="fas fa-clock">
                                             </i>&nbsp;<?php echo $row['event_time']?> &nbsp;
                                             &nbsp;<i class="fas fa-calendar">
                                          </i>&nbsp;<?php echo $row['event_date']?></p>
                                          <div class="description text-truncate"><?php echo strip_tags($string)?>
                                             <!-- <span class="text-red"> Read More</span> -->
                                         </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                       <?php }?>
                       
                        <a href="#" class="btn btn-danger text-center"> read more</a>
                     </div>

                  </div>
               </div>
            </div>

         </div>


<div class="srch_ovly">
    <div class="nsrch_wrp nsrch_wrp_vw">
        <span class="glyphicon glyphicon-remove srcls"></span>
        <div class="srtabs">            
            <div class="tab-content clearfix segment">
                <div class="tab-pane active fade in" id="course">                    
                </div>                
            </div>            
        </div>
    </div>
</div>
<script>

	$(function () {
	    var form = $("form#IECCDynamicEnquiryForm"); 
        	var html = (form[0]).cloneNode(true); 
        	$(".srch_ovly #course").html(html);
    	var showForm = function(){
        	$(".srch_ovly").show(); 
    	} 
    	$(window).on('load', function(event) {
    	    showForm(); 
    	}); 
    	$(".srch_ovly .srcls").click(function(event) {
    	    $(".srch_ovly").hide(); 
    	}); 
	}); 
</script>

<?php include("include/footer.php")?>