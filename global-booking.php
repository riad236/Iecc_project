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
                                            <span tabindex="0">Request For Phone Call</span>
                                        </h2>
                                    </div>

                                </div>
                                <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><fieldset>




                                    <div class="form-group">
                                        <label class="control-label " for="j_username" aria-label="Your email address">
                                            Your Name</label>
                                        <input id="j_username" name="name" class="input-box form-control" type="text" value=""></div>
                                    <div class="form-group">
                                        <label class="control-label " for="j_password" aria-label="Your password">
                                            Your Phone Number</label>
                                        <input id="j_password" name="pass" class="input-box form-control" type="text" value="" autocomplete="off"></div>
                                    <br>
                                    <button type="submit" name="login" style="text-align: left;" class="btn btn-primary btn-block col-xs-12 col-md-6 col-lg-6">
                                       Request For Call

                                    </button>
                                    <br><br><br>

                                </fieldset>
                                    <div>
                                    </div></form></div></div></div></div>
                <div class="col-md-6">
                    <div class="yCmsContentSlot login-right-content-slot">
                        <div class="yCmsComponent login-right-content-component">
                            <div class="register-section">
                                <div class="headline">
                                    <h2 tabindex="0">
                                        Book An Appointment</h2>
                                </div>
                              <!--  <div class="description">
                                    Get a personalised experience, save and compare course, speak to your counsellor, apply for universities and a host of other benefits for registered users.</div> -->
                                <p class="continuous-text">
                                    All fields are mandatory.</p>
                                <form id="IDPRegisterForm" action="" method="post"><fieldset>



                                    <div class="form-group">
                                        <label class="control-label " for="register.firstName" aria-label="First Name">
                                            Your Name</label>
                                        <input id="register.firstName" name="firstName" class="input-box form-control" type="text" value=""></div>
                                    <div class="form-group">
                                        <label class="control-label " for="register.lastName" aria-label="Last Name">
                                            Last Name</label>
                                        <input id="register.lastName" name="lastName" class="input-box form-control" type="text" value=""></div>
                                   
                                  
 										<div class="form-group">
                                        <label class="control-label " for="register.email" aria-label="Your email address">
                                            Your email address</label>
                                        <input id="register.email" name="email" class="input-box form-control" type="text" value=""></div>

                                    <div class="form-group">
                                        <label class="control-label " for="register.email" aria-label="Your email address">
                                            Your Phone Number</label>
                                        <input id="register.email" placeholder="Type with country code E.x(+880)" name="number" class="input-box form-control" type="text" value=""></div>
                                    <div class="form-group">
                                        <label class="control-label " for="password" aria-label="Your password">
                                            Your password</label>
                                        <input id="password" name="pwd" class="input-box form-control password-strength" type="password" value="" autocomplete="off" aria-autocomplete="list"><div id="password_bar" class="progress" style="display: none;"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span id="password_text">0%<span></span></span></div></div></div><div class="help-block" id="password_minchar">Please enter a password with at least 6 alphanumeric characters in upper and lower case.</div>
                                    <div class="form-group">
                                        <label class="control-label " for="register.checkPwd" aria-label="Confirm your password">
                                            Confirm your password</label>
                                        <input id="register.checkPwd" name="checkPwd" class="input-box form-control" type="password" value="" autocomplete="off"></div>
                                 
                                  
                               

                                    <div class="form_field-elements control-group js-recaptcha-captchaaddon"></div>
                                    <div class="form-actions clearfix">
                                        <br>
                                        <button type="submit" name="sign-up" id="submitRegisterForm"  style="text-align: left;" class="btn btn-default btn-block col-xs-12 col-md-6 col-lg-6">
                                            Sign-Up
                                        </button>
                                    </div>
                                </fieldset>
                                    <div>

                                    </div></form></div>
                        </div></div></div>
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