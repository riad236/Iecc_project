 <footer class="main-footer footer">
            <div class="container-fluid">
               <div class="footer__top">
                  <div class="row">
                     <div class="footer-left col-xs-12 col-sm-12 ">
                        <a id="button" href="#" class="footer-top"> <i class="glyphicon glyphicon-chevron-up" style="color: red;"></i> </a>
                         <script>
                             var btn = $('#button');

                             $(window).scroll(function() {
                                 if ($(window).scrollTop() > 300) {
                                     btn.addClass('show');
                                 } else {
                                     btn.removeClass('show');
                                 }
                             });

                             btn.on('click', function(e) {
                                 e.preventDefault();
                                 $('html, body').animate({scrollTop:0}, '100');
                             });



                         </script>

                        <div>
                           <div class="footer__nav--container links col-xs-6 col-sm-3">
                              <div class="title"></div>
                              <ul class="footer__nav--links">
                                 <li class="yCmsComponent">
                                    <a href="#why-study-abroad/" title=""><strong>Services</strong></a>
                                 </li>
                                   <?php
              $view_service2=$user->view_service2();
              while($row=$view_service2->fetch_array()){
                
            
            ?>
                                 <li class="yCmsComponent">
                                    <a href="service.php?service=<?php echo $row ["id"]?>" ><?php echo $row['name']?></a>
                                 </li>
                               <?php }?>
								 
                              </ul>
                           </div>
                           <div class="footer__nav--container links col-xs-6 col-sm-3">
                              <div class="title"></div>
                              <ul class="footer__nav--links">
                                 <li class="yCmsComponent">
                                    <a href="##" ><strong>Company</strong></a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="team" >Our Team</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#sucess" >Testimonials</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#search/computing-and-it/" >Affiliates</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#partner">Partners</a>
                                 </li>
                                  <li class="yCmsComponent">
                                    <a href="iecc's_gallery">Gallery</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="" >Contact Us</a>
                                 </li>
								 
								
								 
                              </ul>
                           </div>
                           <div class="footer__nav--container links col-xs-6 col-sm-3">
                              <div class="title"></div>
                              <ul class="footer__nav--links">
                                 <li class="yCmsComponent">
                                    <a href="#ielts/" title="IELTS"><strong>IELTS</strong></a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#ielts/what-is-ielts/" title="What is IELTS">What is IELTS</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#ielts/prepare-for-ielts/" title="Prepare for IELTS">Prepare for IELTS</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#ielts/prepare-for-ielts/test-format/" title="Test format">Test format</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#ielts/prepare-for-ielts/test-fee/" title="IELTS test Fee">IELTS test Fee</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="#ielts/prepare-for-ielts/support/" title="Support">Support</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="footer__nav--container links col-xs-6 col-sm-3">
                              <div class="title"></div>
                              <ul class="footer__nav--links">
                                 <li class="yCmsComponent">
                                    <a href="#contact-us/" title="Connect with IECC"><strong>Connect with IECC</strong></a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="bangladesh" title="India">Bangladesh</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="http://www.IECC.com/srilanka/" title="Sri Lanka">United Kingdom</a>
                                 </li>
                                 <li class="yCmsComponent">
                                    <a href="book" title="Request an Appointment">Request an Appointment</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright footer__bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-4"></div>
                     <div class="copyright-text col-sm-4 center-block footer__copyright">© 2019 IECC. Made By <a href="http://ingeniumbd.com" title="">Ingeniumbd</a></div>
                     <div class="col-xs-12 col-sm-8">
                        <div class="clearfix social-links">
                           <div class="title"></div>
                           <ul>
                              <li class="yCmsComponent">
                                 <a href="#disclaimer/" title="Disclaimer">Disclaimer</a>
                              </li>
                              <li class="yCmsComponent">
                                 <a href="#privacy-policy/" title="Privacy Policy">Privacy Policy</a>
                              </li>
                              <li class="yCmsComponent">
                                 <a href="#terms-of-use/" title="Terms Of Use">Terms Of Use</a>
                              </li>
                              <li class="yCmsComponent">
                                 <a href="https://investors.IECC.com/Investor-Centre/" title="Investors">Investors</a>
                              </li>
                           </ul>
                           <div class="title"></div>
                           <ul>
                              <li class="yCmsComponent">
                                 <a href="https://www.facebook.com/ieccbd" title="Facebook"  class="icon" target="_blank"><i class="fab fa-facebook"></i></a></a>
                              </li>
                              <li class="yCmsComponent">
                                 <a href="https://twitter.com/ieccbangladesh?lang=en" title="Twitter" class="icon" target="_blank"><i class="fab fa-twitter"></i></a>
                              </li>

                              <li class="yCmsComponent">
                                 <a href="https://www.youtube.com/channel/UC04T2KtV61GahGKYKJxxtbQ " title="You-Tube" class="icon" target="_blank"><i class="fab fa-youtube"></i></a>
                              </li>

                              <li class="yCmsComponent">
                                 <a href=": https://www.instagram.com/ieccbangladesh" title="instagram" class="icon" target="_blank"><i class="fab fa-instagram"></i></a>
                              </li>

                              <li class="yCmsComponent">
                                 <a href=" https://www.linkedin.com/company/ieccuk" title="Linkedin" class="icon" target="_blank"><i class="fab fa-linkedin"></i></a>
                              </li>
                               <style>
                                   .main-footer .social-links ul, .main-footer .social-links ul li{
                                       margin-left: 0px;
                                       padding: 0px;
                                   }

                                   .main-footer .social-links ul, .main-footer .social-links ul li a i:hover{
                                       color:deepskyblue;
                                   }

                               </style>


                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </main>
      <!-- JAVASCRIPTS -->
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="assets/js/widgets.js" type="text/javascript"></script>
      <script src="assets/js/custom.js" type="text/javascript"></script>
      
      <div class="book_btn_fix">
     <a href='book' type="button" class="btn2 btn-success btn-block" data-toggle="modal" data-target="#appointment">
         Start your Application <i class="fa fa-angle-right" aria-hidden="true"></i>
     </a>
 </div>


 <style>

     .book_btn_fix{
         position: fixed;
         bottom: 0;
         right: 0;
         width: 180px;

     }

     .book_btn_fix a{
         -webkit-border-radius: 5px 0 0!important;
         -moz-border-radius: 5px 0 0!important;
         border-radius: 5px 0 0!important;
         padding: 5px 10px;
         text-align: center;
     }
     .btn-success{
         background-color: #df0023;
         border-color: #df0023;
     }
     .btn-block{
         display: block;
         width: 100%;
     }
     .btn2{
         display: inline-block;
         padding: 6px 12px;
         margin-bottom: 0;
         font-size: 14px;
         font-weight: 400;
         line-height: 1.42857143;
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         -ms-touch-action: manipulation;
         touch-action: manipulation;
         cursor: pointer;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         border: 1px solid transparent;
         border-radius: 4px;
         height:35px;
     }

     .book_btn_fix .btn2 {
         -webkit-border-radius: 5px 0 0!important;
         -moz-border-radius: 5px 0 0!important;
         border-radius: 5px 0 0!important;
         padding: 5px 10px;

 </style>

      
      
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c3f7049ab5284048d0d4302/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=2186606351425666&autoLogAppEvents=1"></script>
   </body>
</html>