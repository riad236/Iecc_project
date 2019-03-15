<nav class="navigation navigation--bottom js_navigation--bottom js-enquire-offcanvas-navigation" role="navigation">
               <ul class="sticky-nav-top hidden-lg hidden-md js-sticky-user-group hidden-md hidden-lg">
                  <li class="liUserSign">
                     <a aria-label="IECC logo" href="#"><img class="mob_nav_logo"  src="./assets/img/logo.png"></a>
                     <div class="close-nav">
                        <button tabindex="0" title="Close this Menu" aria-label="Close Menu" type="button" class="js-toggle-sm-navigation btn">
                        <span class="glyphicon glyphicon-remove"></span>
                        </button>
                     </div>
                  </li>
               </ul>
               <div class="navigation__overflow">
                  <ul data-trigger="#signedInUserOptionsToggle" class="nav__links nav__links--products nav__links--mobile js-userAccount-Links js-nav-collapse-body offcanvasGroup1 collapse in hidden-md hidden-lg">
                  </ul>
                  <ul class="nav__links nav__links--products js-offcanvas-links">

                        <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="contact_us" >Contact</a>
                        </span>
                       
                     </li>

                       <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="iecc's_gallery" >Gallery</a>
                        </span>
                       
                     </li>

                      <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="#find-a-course/" >Others Visa</a>
                        </span>
                          <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2" style="">
                              <?php
                              $view_visa=$user->visa();
                              while($row=$view_visa->fetch_array()){
                                  ?>

                                  <div class="col-md-3">
                                      <div class="sub-navigation-section col-md-12">
                                          <ul class="sub-navigation-list ">
                                              <li class="mgmnu_img yCmsComponent nav__link--secondary"><a href="#how-to-choose-a-course/"> <img style="width:241px;height:193px;" src="photo/visa/<?php echo $row['image']?>" width="262" height="193" alt="menu image" >
                                                  </a> <a href="visa?visa=<?php echo $row ["id"]?>" target=""><?php echo $row['name']?></a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              <?php }?>
                              <div class="col-md-3">
                                  <div class="sub-navigation-section col-md-12">
                                      <ul class="sub-navigation-list ">
                                          <?php
                                          $view_visa2=$user->visa2();
                                          while($row=$view_visa2->fetch_array()){


                                              ?>

                                              <li class="yCmsComponent nav__link--secondary">
                                                  <a href="visa?visa=<?php echo $row ["id"]?>"><?php echo $row['name']?></a>
                                              </li>
                                          <?php }?>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </li>
                    
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="resource" >Resource</a>
                        </span>
                     
                     </li>
					  <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="blog?page=1" >Blog</a>
                        </span>
                     
                     </li>
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="#find-a-course/" >Advices</a>
                        </span>
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2" style="">

                            <?php
                            $view_advice=$user->advice();
                            while($row=$view_advice->fetch_array()){


                            ?>

                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                    <li class="mgmnu_img yCmsComponent nav__link--secondary"><a href="#how-to-choose-a-course/"> <img style="width:241px;height:193px;" src="photo/advice/<?php echo $row['image']?>" width="262" height="193" alt="menu image" >
                                       </a> <a href="advice?advice=<?php echo $row ["id"]?>" target=""><?php echo $row['name']?></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                            <?php }?>
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                     <?php
                                     $view_advice2=$user->advice2();
                                     while($row=$view_advice2->fetch_array()){


                                     ?>

                                    <li class="yCmsComponent nav__link--secondary">
                                       <a href="advice?advice=<?php echo $row ["id"]?>"><?php echo $row['name']?></a>
                                    </li>
                                        <?php }?>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
					 
					 <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="courses" >Course</a>
                        </span>
                     
                     </li>
					 <!--service menue--->
                <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="" > Services</a>
                        </span>
            
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2" style="">
            <?php
              $view_service=$user->view_service();
              while($row=$view_service->fetch_array()){
                
            
            ?>
            
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                    <li class="mgmnu_img yCmsComponent nav__link--secondary"><a href=""> <img style="width:241px;height:193px;" src="./photo/service/<?php echo $row['image']?>" width="262" height="193" alt="menu image" >
                                       </a> <a href="service.php?service=<?php echo $row ["id"]?>" target=""><?php echo $row['name']?></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <?php }?>
               
               
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                <?php
              $view_service2=$user->view_service2();
              while($row=$view_service2->fetch_array()){
                
            
            ?>
                                 <ul class="sub-navigation-list ">
                                    <li class="yCmsComponent nav__link--secondary">
                                       <a href="service.php?service=<?php echo $row ["id"]?>" ><?php echo $row['name']?></a>
                                    </li>
                                    
                                 </ul>
                 <?php }?>
                              </div>
               
                           </div>
              
                        </div>
             
            
                     </li>



           <!----service menue ends --->
					 
					 
                   
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="#" > Destination</a>
                        </span>
						
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2" style="">
						<?php
							$view_country=$user->view_country();
							while($row=$view_country->fetch_array()){
								
						
						?>
						
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                    <li class="mgmnu_img yCmsComponent nav__link--secondary"><a href="destination?country=<?php echo $row ["id"]?>"> <img style="width:241px;height:193px;" src="./photo/<?php echo $row['image']?>" width="262" height="193" alt="menu image" >
                                       </a> <a href="destination?country=<?php echo $row ["id"]?>" target=""><?php echo $row['country_name']?></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <?php }?>
						   
						   
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
							  <?php
							$view_country2=$user->view_country2();
							while($row=$view_country2->fetch_array()){
								
						
						?>
                                 <ul class="sub-navigation-list ">
                                    <li class="yCmsComponent nav__link--secondary">
                                       <a href="destination?country=<?php echo $row ["country_name"]?>" ><?php echo $row['country_name']?></a>
                                    </li>
                                    
                                 </ul>
								 <?php }?>
                              </div>
							 
                           </div>
						  
                        </div>
						 
						
                     </li>
					 
					 <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="about" >About Us</a>
                        </span>
                     
                     </li>
					 
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <span class="yCmsComponent nav__link js_nav__link">
                        <a href="index" >Home</a>
                        </span>
                        
                     </li>
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2">
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2">
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav__links--primary nav__links--primary-has__sub js-enquire-has-sub">
                        <div class="sub__navigation js_sub__navigation col-md-3 col-lg-2">
                           <div class="col-md-3">
                              <div class="sub-navigation-section col-md-12">
                                 <ul class="sub-navigation-list ">
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>                     
                  </ul>
               </div>
            </nav>
            