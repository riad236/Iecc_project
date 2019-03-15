<?php include("include/header.php")?>
    <div>
        <div class="container event-list-page">
            <div class="event-list-pagination col-sm-12 col-md-12 col-lg-12">
                <div class="yCmsContentSlot">
                    <div class="yCmsComponent">
                        <div class="content">
                            <h1>Our Gallery</h1>
                           
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
				
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="light-gallery">
							<?php $gallery=$user->gallery();
											while($row=$gallery->fetch_array()){
 										?>
							
                                <a href="gallery/<?php echo $row['image']?>" data-sub-html=".caption">
                                    <img src="gallery/<?php echo $row['image']?>" />
                                    <div class="caption">
                                        <h4><?php echo $row['caption']?></h4><p><?php echo $row['date']?></p>
                                    </div>
                                </a>
								<?php }?>
                            </div>
                        </div>
                    </div>
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