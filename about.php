<?php $postpage = "page-homepage pageType-ContentPage template-pages-layout-contentLayout1Page pageLabel-homepage smartedit-page-uid-homepage smartedit-page-uuid-eyJpdGVtSWQiOiJob21lcGFnZSIsImNhdGFsb2dJZCI6ImlkcC1iZENvbnRlbnRDYXRhbG9nIiwiY2F0YWxvZ1ZlcnNpb24iOiJPbmxpbmUifQ== smartedit-catalog-version-uuid-IECC-bdContentCatalog/Online language-en" ?>

<?php include("include/header.php")?>

    <style>
        .banner.banner__component--responsive.img-parallax{
            z-index: -1;
        }
    </style>
    <div>
        <div class="">
            <?php

            $article=$user->view_about();
            $article=$article->fetch_array();
            ?>
            <div class="banner banner__component--responsive img-parallax">
                <img style="height:620px;" src="photo/post/<?php echo $article["image"]?>" class=" lazy-loaded" style="top: 0px;">
            </div></div><div class="row static-content-page content-page-social" data-init-timestamp="1547471562179">
        <div>
            <div class="container__full content-top clearfix">
                <div class="yCmsContentSlot left-panel">
                    <div class="yCmsComponent static-content-block">

                  <h1 style="color:#0082dd;">About US</h1>


                    <div class="content"><p><?php echo $article["des"]?></p></div>


                    </div>

                </div>




                <div class="col-sm-12 col-md-4 col-lg-4 geo_pod_right_nav">
                    <div class="floating-div">
                        <div class="yCmsContentSlot right-panel">
                            <div class="yCmsComponent floating-div-style">
                                <div class="opnfrm lightbox_wrap">
                                    <div class="form-lbnew_wrap">
                                        <div class="lb-xclose" style="display:none">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </div>
                                        <div class="rfrmtop">
                                            <div class="rfrmttl">Interested in studying abroad with IECC?</div>
                                            <div class="rfrmsttl">Enter your details below and we'll call you back when it suits you.</div>
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

                                    			}else{
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
                                                              title: "Apply Confirmed",
                                                              text: "Confirmation Email Sent check your Inbox or Spam!",
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

    <button type="submit" name="apply" class="button5"><span>APPLY NOW</span></button>

    <style>
        .button5{
            display:inline-block;
            padding:0.46em 1.6em;
            border:0.1em solid red;
            margin-left:100px;
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
                            </div></div>
                        <div class="yCmsContentSlot right-panel floating-social">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="information-container">
            <div class="information-outer-bggrey-container">
                <div class="row information-inner-bgrey-container">
                    <div class="more-info small-grey-banner more-info">
                        <div class="yCmsContentSlot">
                        </div>
                    </div>
                    <div class="small-grey-banner">
                        <div class="yCmsContentSlot row">
                        </div>
                    </div>
                </div>
            </div>
            <div class="paralex-orange">
                <div class="yCmsContentSlot">
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("include/footer.php")?>