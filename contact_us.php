<?php include("include/header.php")?>
         <div>
            <div class="row">
               <div>
                  <div class="container content-landing-page" >
                  	<div class="col-xs-12 col-sm-12 col-md-6 ">
                        <div class="yCmsContentSlot left-panel">

                           <div class="yCmsComponent">
                              <div class="content">

                                 <table width="100%" cellspacing="2" border="0">
                                     <p>Bangladesh Office</p>
                                    <tbody>

                                       <tr>

                                          <td>
                                              <a title="Facebook-BD" href="https://www.facebook.com/ieccbd"><i class="fab fa-facebook"></i></a> <a title="Twitter-BD" href="https://twitter.com/ieccbangladesh?lang=en">&nbsp;<i class="fab fa-twitter"></i></a>&nbsp;<a title="Instagram-BD" href="https://www.instagram.com/ieccbangladesh">&nbsp;<i class="fab fa-instagram"></i></a>&nbsp;<a title="Linkedin" href="https://www.linkedin.com/company/ieccuk">&nbsp;<i class="fab fa-linkedin"></i></a>&nbsp;<a title="Youtube" href="https://www.youtube.com/channel/UC04T2KtV61GahGKYKJxxtbQ ">&nbsp;<i class="fab fa-youtube"></i></a>
                                             <h3 style="color:gray">House:&nbsp; 39 (3rd Floor).<br> Road: &nbsp;17/A, Block: E, <br> Banani, Dhaka -1213 <br> Bangladesh</h3>
                                             <h3 style="color:gray"><i class="glyphicon glyphicon-envelope"></i>:&nbsp;: <a href="mailto:infobd@IECC.com">study@iecc.co.uk</a><br></a></h3>
                                             <h3 style="color:gray"><strong><i class="glyphicon glyphicon-phone"></i>:&nbsp;</strong> - +88 02 9860526,+88 01749 420991<br> </h3>
                                          </td>
										  
                                       </tr>
                                       
									   <tr><td><iframe style="margin-top: 20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29211.281558278013!2d90.37688461660035!3d23.768403163140388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70843ef2669%3A0x5ffbe98fa766f240!2sidp+Education+Bangladesh+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1529057700301" style="border:0" allowfullscreen="" width="550" height="250" frameborder="0"></iframe></td></tr>

                                    </tbody>
                                 </table>
                                 <hr>


                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 ">
                        <div class="yCmsContentSlot left-panel">
                           <div class="yCmsComponent">
                              <div class="content">
                                 <p>UK Office</p>
                              </div>
                           </div>
                           <div class="yCmsComponent">
                              <div class="content">
                                 <table width="100%" cellspacing="2" border="0">
                                    <tbody>
                                       
                                       <tr>
                                          <td>
                                              <a title="Facebook-UK" href="https://www.facebook.com/IECCUK"><i class="fab fa-facebook"></i></a> <a title="Twitter-UK" href="https://twitter.com/ieccuk">&nbsp;<i class="fab fa-twitter"></i></a>&nbsp;<a title="Instagram-UK" href="https://www.instagram.com/ieccuk">&nbsp;<i class="fab fa-instagram"></i></a>&nbsp;<a title="Linkedin" href="https://www.linkedin.com/company/ieccuk">&nbsp;<i class="fab fa-linkedin"></i></a>&nbsp;<a title="Youtube" href="https://www.youtube.com/channel/UC04T2KtV61GahGKYKJxxtbQ ">&nbsp;<i class="fab fa-youtube"></i></a>
                                             <h3 style="color:gray">269, Glossop Road<br> Road: &nbsp;17/A, Block: E, <br> Sheffield S10 2HB  <br> United Kingdom.</h3>
                                             <h3 style="color:gray"><i class="glyphicon glyphicon-envelope"></i>:&nbsp;: <a href="mailto:infobd@IECC.com">admin@iecc.co.uk</a><br></a></h3>
                                             <h3 style="color:gray"><strong><i class="glyphicon glyphicon-phone"></i>:&nbsp;</strong> - +44 114 272 5444,+44 788 601 5343<br> </h3>
                                          </td>
                                
                                       </tr>
                                       
                              <tr><td><iframe style="margin-top: 20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29211.281558278013!2d90.37688461660035!3d23.768403163140388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70843ef2669%3A0x5ffbe98fa766f240!2sidp+Education+Bangladesh+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1529057700301" style="border:0" allowfullscreen="" width="550" height="250" frameborder="0"></iframe></td></tr>
                                    </tbody>
                                 </table>
                                 <hr>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="yCmsContentSlot left-panel">
                           <div class="yCmsComponent">
                              <div class="content">
                                 <p style="text-align:center;">Drop Us a Line</p>
                              </div>
                           </div>
                           <div class="yCmsComponent">
                              <div class="content">
                                 <form class="IDPRegisterForm" action=""  method="post">
                                     
                                     <?php
				        if(isset($_POST['contact'])){
				                    
										
										
										$from =$_POST["email"];
										$name=$_POST["firstName"];
										$msg =$_POST["message"];
										$sub = $_POST['sub'];
									
										
										
                                            	 //include PHPMailerAutoload.php
                                                require 'phpmailer/PHPMailerAutoload.php';
                                            
                                                //create an instance of PHPMailer
                                                $mail = new PHPMailer();
                                            
                                                //set a host
                                                $mail->Host = "mail.bdsentineltruckers.com";
                                            
                                                //enable SMTP
                                                $mail->isSMTP();
                                                
                                            
                                                //set authentication to true
                                                $mail->SMTPAuth = true;
                                            
                                                //set login details for Gmail account
                                                $mail->Username = "support@bdsentineltruckers.com";
                                                $mail->Password = "diit54321@#";
                                            
                                                //set type of protection
                                                $mail->SMTPSecure = "ssl"; //or we can use TLS
                                            
                                                //set a port
                                                $mail->Port = 465; //or 587 if TLS
                                            
                                                 //set subject
                                                $mail->Subject = $sub;
                                               
                                            
                                                //set HTML to true
                                                $mail->isHTML(true);
                                            
                                                //set body
                                                $mail->Body ="Name:.'$name'.<br>
                                                              
                                                              Discription:.'$msg'.
                                                              
                                                                
                                                
                                                ";
                                            
                                            
                                            
                                                //set who is sending an email
                                                $mail->setFrom($from,$name);
                                            
                                                //set where we are sending email (recipients)
                                                $mail->addAddress('support@bdsentineltruckers.com');
                                            
                                                //send an email
                                                if ($mail->send())
                                                    echo "
                                                        <script>    
                                                         swal({
                                                              position: 'top-end',
                                                              type: 'success',
                                                              title: 'Email Sent Sucessfully',
                                                              showConfirmButton: false,
                                                              timer: 4500
                                                            });
                                                        </script>
                                                 
                                                 ";
                                               
                                            				        }
				    
				    ?>
                                     
                                     
                                     
                                    <div class="row opnfrm_uname">
                                       <div class="floatingwrap ">
                                          <div class="form-group">
                                        <label class="control-label " for="register.firstName" aria-label="First Name">
                                           Your Name</label>
                                        <input style="height:20px" id="register.firstName" name="firstName" class="input-box form-control" type="text" value=""></div>
                                        <div class="form-group">
                                        <label class="control-label " for="register.firstName" aria-label="First Name">
                                            Subject</label>
                                        <input style="height:20px" id="register.firstName" name="sub" class="input-box form-control" type="text" value=""></div>
                                       </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="floatingwrap opnfrm_email ">
                                       <div class="form-group">
                                          <input class=" form-control" type="text" name="email" value=""><label class="control-label " >
                                          Email address*</label>
                                       </div>
                                    </div>
                                    
                                     
                                    
                                    <div class="row opnfrm_uname">
                                       <div class="floatingwrap ">
                                          <div class="form-group">
                                             <textarea class=" form-control" name="message" ></textarea><label class="control-label ">Your Message</label>
                                          </div>
                                       </div>
                                    </div>
                                     <button type="submit" name="contact" class="button5"><span>Send Message</span></button>

                                     <style>
                                         .button5{
                                             display:inline-block;
                                             padding:0.46em 1.6em;
                                             border:0.1em solid red;
                                            width:200px;
                                             height:50px;
                                             font-size: 20px;
                                             border-radius:0.12em;
                                             box-sizing: border-box;
                                             text-decoration:none;
                                             font-family:'Roboto',sans-serif;
                                             font-weight:100;
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

                                    <style>
                                       .btn-default:hover{
                                          background-color: red;
                                         border-color: red;
                                       }
                                    </style>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
     <?php include("include/footer.php")?>