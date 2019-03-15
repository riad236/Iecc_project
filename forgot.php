<?php $page_class = "page-login" ?>
<?php include("include/header.php")?>
    <div>
        <div class="row">
            <div class="login-register-wrapper">
                <h1 class="acc_hidden"><span tabindex="0">Sign In / Register</span></h1>
                <div class="col-md-6">
                    <div class="yCmsContentSlot login-left-content-slot">
                        <div class="yCmsComponent login-left-content-component">
                            <div class="login-section">

                              
                                <div class="dec_txt">
                                    <div class="headline">
                                        <h2>
                                            <span tabindex="0">Search Your Account</span>
                                        </h2>
                                    </div>

                                </div>
                                <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><fieldset>

                                    <form action="" method="post">
	            <?php 
	               
	                
	                if(isset($_POST['login'])){
	                     
	                    $forgot=$super_admin->forgot($_POST['email']);
	                    
	                    if ($forgot->num_rows > 0) {
	                        $str = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
        	                $str = str_shuffle($str);
	                         $str = substr($str, 0, 100);
	                         $e=$_POST['email'];
	                         require 'phpmailer/PHPMailerAutoload.php';

								$mail = new PHPMailer();
								try {
							    
								$mail->isSMTP();                                      // Set mailer to use SMTP
								$mail->Host = 'mail.bdsentineltruckers.com';  // Specify main and backup SMTP servers
								$mail->SMTPAuth = true;                               // Enable SMTP authentication
								$mail->Username = 'no-reply@bdsentineltruckers.com';                 // SMTP username
								$mail->Password = 'diit54321@<>';                           // SMTP password
								$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
								$mail->Port =  465;                                    // TCP port to connect to	
									
								$mail->setFrom('no-reply@bdsentineltruckers.com','IECC');
								$mail->addAddress($e);
								$mail->Subject = "Reset Password!";
								$mail->isHTML(true);
								$mail->Body = "
														<!doctype html>
<html>
  <head>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Simple Transactional Email</title>
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

            <!-- START CENTERED WHITE CONTAINER -->
            <span class='preheader' style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'>This is preheader text. Some clients will show this text as a preview.</span>
            <table class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>

              <!-- START MAIN CONTENT AREA -->
			  <th style='background:#538cc6;width:100px;height:80px;'><h2 style='color:white;'>IECC</h2></th>
              <tr>
                <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                  <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                        <img style='width:250px;margin-left:130px;' src='https://lh5.googleusercontent.com/WAGT1hB2wUgjKbhC5y2Ym0Y7evk1_w6gu3BvML1fVeFoHpZQlexajzkcGTblOSXLBVCJvrv7au6SHZeizSCG=w1366-h625-rw'>
			   <tr>
                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Hi there</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Here Is your password reset link.Click on the button for change password.</p>
                        <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;'>
                          <tbody>
                            <tr>
                              <td align='left' style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;'>
                                <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                  <tbody>
                                    <tr>
                                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;'> <a href='http://iecc.bdsentineltruckers.com/reset.php?email=$e&token=$str'style='display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;'>Reset Your Password</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Thank You.Enjoy</p>
                        
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
                    <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>Bangladesh Sentinel truckers, Dhaka, Bangladesh</span>
                    <br> Dont like these emails? <a href='' style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;'>Unsubscribe</a>.
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    Powered by <a href='' style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>BST</a>.
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
								";

								if ($mail->send()){
								echo '
                                         <script>    
                                                         swal({
                                                              type: "success",
                                                              title: "Verify Your Account",
                                                              text: "Verification Email Sent to your email!",
                                                              allowOutsideClick:false,
                                                            })
                                         </script>
                                                 
                                                 ';
												 
								}
								
								
							}catch (Exception $e) {
								echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
							}
	                         
	                        $update_token=$super_admin->update_token($_POST['email'],$str);
	                    
	                    
								
	                   	
	                }else{
	                    echo"bhhot"; 
	                }
	                
	                }
	            ?>


                                    <div class="form-group">
                                        <label class="control-label " for="j_username" aria-label="Your email address">
                                            Your email address</label>
                                        <input style="height:20px" id="j_username" name="email" class="input-box form-control" type="email" value=""></div>

                                    <br>
                                    <button type="submit" name="login" style="text-align: left;" class="btn btn-primary btn-block col-xs-12 col-md-6 col-lg-6">
                                       Search

                                    </button>
                                    <br><br><br>
                                    <div class="forgotten-password">
                                      <a href="login" data-link="/bangladesh/login/pw/request" class="js-password-forgotten" data-cbox-title="Password Assistance">New To IECC? Sign-up Now</a>
                                    </div>
                                </fieldset>
                                    <div>
                                    </div></form></div></div></div></div>

            </div>
        </div>
    </div>

    <div class="socialOverlay" style="display: none;"></div>
    <div class="modal social-modal" tabindex="-1 " id="socialPopUp" role="dialog " style="display: none;">
        <div class="modal-dialog " role="document ">
            <div>
                <button type="button" class="close " data-dismiss="modal " aria-label="Close" >
                    <span class="glyphicon"></span>
                </button>
                <div class="modal-content ">
                    <div class="modal-header ">
                        <div id="login_msg" style="display: block;">
                            <h5 class="modal-title ">
                                Let’s get started </h5>
                            <h6>
                                Sign up or login in with one click</h6>
                        </div>
                        <div id="shorlist_msg" style="display:none">
                            <h5 class="modal-title ">
                                Let’s get started </h5>
                            <h6>
                                Sign up or login to save your courses</h6>
                        </div>
                        <div id="reg_shorlist_msg" style="display:none">
                            <div class="shrt-cont">
                                <div class="shrt-wrap">
                                    <a href="javascript:void(0);" class="short-list active"></a>
                                </div>
                            </div>
                            <h5 class="modal-title" style="line-height: 1;">
                                <span></span> has been saved to your shortlist</h5>
                        </div>
                    </div>
                    <h6 id="reg_shorlist_link" style="display:none">
                        <a href="/bangladesh/user-profile">View your shortlist </a> or close this box to continue researching</h6>
                    <div class="form_border"></div>
                    <div class="modal-body ">
                        <a href="javascript:void(0);" class="fb" id="fbSocial"><span><img src="assets/images/fb.svg" width="30px" alt="Facebook"></span><span>FACEBOOK </span></a>
                        <a href="javascript:void(0);" class="gl" id="googleSocial"><span><img src="assets/images/google.svg" width="30px" alt="Google"></span><span>GOOGLE</span></a>
                        <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&amp;client_id=86eegokekq96d8&amp;redirect_uri=https://www.idp.com/bangladesh/linkedin-signin/&amp;scope=r_basicprofile,r_emailaddress" class="linkdin" id="linkedInSocial" ><span><img src="assets/images/linked-in.svg" width="20px" alt="Linked-In"></span><span>LINKEDIN</span></a>
                    </div>
                    <div class="modal-footer">
                        <div class="or_cont">
                            <div class="cont_t">
                                <div class="cont_m">
                                    <span>OR </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="/bangladesh/register-signin" class="btn btn-block" id="recipient-name" ><span class="glyphicon glyphicon-envelope"></span>Sign up or login using email <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>



   <?php include("include/footer.php")?>