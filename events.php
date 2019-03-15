<?php include("include/header.php")?>
    <div>
        <div class="container event-list-page">
            <div class="event-list-pagination col-sm-12 col-md-12 col-lg-12">
                <div class="yCmsContentSlot">
                    <div class="yCmsComponent">
                        <div class="content">
                            <h1>Upcoming Events</h1>
                            <p><span style='font-size: 26px;&#10; '>Get advice from institutions and experts</span>&nbsp;
                            </p>
                            <p style=' font-size: 18px; color: rgb(29, 32, 44); margin-bottom:0;'>The interviews are
                                conducted by the institutions' representatives who will provide you with detailed
                                information on study options, course entry requirements, advanced standing and
                                scholarships. These interviews will be done on an individual basis ensuring your
                                privacy.
                            </p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="yCmsContentSlot">
                    <div class="yCmsComponent">
                    </div>
                </div>
                <div class="clearfix"></div>

                <div>
                    <span class="common-text event-list-header">All Events</span>
                    <ul class="row event-list" itemscope itemtype="http://schema.org/EducationEvent">
                            <?php
                                $view_event=$user->view_event();
                            while($row=$view_event->fetch_array()){

                            $string = $row["event_des"];

                            $string =$user->turncate2($string);


                            ?>

                        <li class="col-xs-12 col-sm-6 event-box">
                            <div class="image-section">
                                <img src="photo/event/<?php echo $row['image']?>">
                                <a class="fav-icon"></a>
                            </div>
                            <div class="common-text details-section">
                                <div itemprop="performer" style="display:none">IDP-BD-GUL</div>
                                <div class="common-text event-name" itemprop="name"><?php echo $row['event_title']?></div>
                                <div class="common-text event-location" itemprop="description"><?php echo $string?>
                                </div>

                                <span itemprop="location" itemscope itemtype="http://schema.org/Place">




                                 <div class="common-text country-list">

                                    <img src="./assets/map-location.png">

                                    <span itemprop="addressLocality"> <?php echo $row['event_venue']?></span>

                                    </span>

                            </div>

                              </span>

                                <div class="common-text event-date">
                                    <img src="./assets/Icon_Calender.png">
                                    <span>
                                 <?php echo $row['event_date']?></span>
                                </div>
                                <div class="common-text event-time">
                                    <img src="./assets/clock.png">
                                    <?php echo $row['event_time']?>
                                </div>
                                <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                 <a class="events-btn" href="event-details?event=<?php echo $row ["id"]?>" target="_blank">
                                 More info<img src="./assets/right-arrow-save.png">
                                 </a>
                                 <div content="2018-02-26T010:30" itemprop="validFrom" style="display:none">2019-01-14T12:00:00</div>
                                 <div itemprop="price" style="display:none">0.0</div>
                                 <span itemprop="priceCurrency" style="display:none">AUD</span>
                                 <link href="http://schema.org/InStock" itemprop="availability" style="display:none"/>
                              </span>
                            </div>
                        </li>
                            <?php }?>

                    </ul>


                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="floating-div">
                    <div class="yCmsContentSlot right-panel">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("include/footer.php")?>