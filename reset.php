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
                                            <span tabindex="0">Reset Your Account</span>
                                        </h2>
                                    </div>

                                </div>
                                <form id="loginForm" action="" method="post"><fieldset>
                                        
                                <?php
	            $e=$_GET['email'];
	           $check_token=$super_admin->check_token($e);
                $check=$check_token->fetch_array();
                $tok = $check['token'];
                
            if($tok == ""){
                echo "
                                            <script>    
                                                   swal({
                                                      position:'top-end',
                                                      type: 'error',
                                                      title: 'Link Expired',
                                                      showConfirmButton: false,
                                                      timer: 1500
                                                    })     
                                                     </script>
                                                 
                                                 ";
                                                 
                                           
                
           
            }else{
	            
	            
	              if(isset($_POST['change'])){
	                  $e=$_GET['email'];
	                  $t=$_GET['token'];
	                  $npass=$_POST['password'];
	                  $cpass=$_POST['cp'];
	                  
	                 
	                  if($npass !=$cpass){
	                      
	                      echo "
                                            <script>    
                                                   swal({
                                                      position:'top-end',
                                                      type: 'error',
                                                      title: 'Password Not matched',
                                                      showConfirmButton: false,
                                                      timer: 1500
                                                    })     
                                                     </script>
                                                 
                                                 ";
                                                 
                                                 
                                                 
	                  }
	                  
	                  else{
	                   if(strlen($_POST['password']) < 8){
	                      echo "
                                            <script>    
                                                   swal('Sorry', 'Password length should be 8 digit!!', 'error')
                                                     </script>
                                                 
                                                 ";
	                      
	                  }else{

	                  $password=$super_admin->password($e,$t);
	                  if ($password->num_rows > 0) {
	                     $pass=$_POST['password'];
	                     $hasspass = password_hash($pass, PASSWORD_DEFAULT);
                                		
                                            $str = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
                                            $str = str_shuffle($str);
                                            $str = substr($str, 0, 10);
                                            
                                            
                                            
	                     $update_password=$super_admin->update_password($hasspass);
	                     if($update_password){
	                         echo "
                                            <script>    
                                                   swal('Congrates', 'Password Changed sucessfully!', 'success')
                                                     </script>
                                                 
                                                 ";
	                     }
	                     
	                  }
	                  
	              }
            }
            }  
            }
	            ?>


                                    <div class="form-group">
                                        <label class="control-label " for="j_username" aria-label="Your email address">
                                            New Password</label>
                                        <input style="height:20px" id="j_username" name="password" class="input-box form-control" type="password" value=""></div>

                                    <br>
                                    
                                      <div class="form-group">
                                        <label class="control-label " for="j_username" aria-label="Your email address">
                                          Confirm  New Password</label>
                                        <input style="height:20px" id="j_username" name="cp" class="input-box form-control" type="password" value=""></div><br>
                                    
                                    <button type="submit" name="change" style="text-align: left;" class="btn btn-primary btn-block col-xs-12 col-md-6 col-lg-6">
                                       Reset Password

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