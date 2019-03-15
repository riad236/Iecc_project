<?php $page_class = "page-search" ?>
<?php include("include/header.php")?>

    <div>
        <div class="row">
            <div>
                <div class="container__full content-top clr">
                    <div class="row left-panel">
                        <div class="col-sm-12 col-md-9">
                            <div class="yCmsContentSlot search-list-page-left-refinements-slot mobile-space">
							
							 <?php 
														if(isset($_GET["course"])){
														$view_course_details=$user->view_course_details($_GET["course"]);
														$des=$view_course_details->fetch_array();
															?>
                                <div class="yCmsComponent search-list-page-left-refinements-component">
                                    
									 
									<div class="col-md-12 product__facet js-product-facet" id="product-facet">
                                     
									   <div class="results">
													<?php if(isset($des['course_name'])){?>
                                            <h1><?php echo $des["course_name"]?></h1> <br></div>
											
											<?php }else{?>
												<h1>No Post Yet</h1>
											<?php }}?>
                                        <div class="search-filters-and-sort">
                                            <div class="pagination-bar top">
                                                <div class="pagination-toolbar">
                                                    <div class="helper clearfix hidden-md hidden-lg"></div>
                                                    <div class="sort-refine-bar">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label aria-label="Order by" class="control-label "
                                                                           for="sortForm1">
                                                                        Order by</label>
                                                                    <form action="#" id="sortForm1" method="get"
                                                                          name="sortForm1">
                                                                        <select class="form-control" id="sortOptions1"
                                                                                name="sort" >
                                                                            <option selected="selected"
                                                                                    value="popularity">
                                                                                Popularity
                                                                            </option>
                                                                        </select>
                                                                        <input name="q" type="hidden"
                                                                               value=":popularity">
                                                                        <input name="text" type="hidden"
                                                                               value="Engineering">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row left-panel search-result">
                        <div class="col-sm-12 col-md-9">
                            <div class="yCmsContentSlot search-list-page-right-result-list-slot mobile-space">
                                <div class="yCmsComponent search-list-page-right-result-list-component row">

                                    <div>
                                        <div class="yCmsComponent blog-post row">
                                            <div class="">
                                                <div class="home-page">
												<?php 
														if(isset($_GET["course"])){
														$view_course_details=$user->view_course_details($_GET["course"]);
														while($row=$view_course_details->fetch_array()){
															
															
															$char = $row["post_des"];
															
														   
									
														   $text = substr($char,0,300);
														?>
												
												
                                                    <div class="row col-xs-12 col-sm-12 ">
                                                        <a class="secteaser_wrapper"
                                                           href="/bangladesh/study-abroad/6-reasons-to-choose-idp/"
                                                           target="">
                                                            <div class="secteser-lft col-xs-12 col-sm-6 col-md-6 no-space">
                                                                <img alt="" class=" lazy-loaded"
                                                                     src="photo/<?php echo $row["image"];?>">
                                                            </div>
                                                            <div class="secteser-rt col-xs-12 col-sm-6 col-md-6">
                                                                <h2 class="advice-name"><?php echo $row["post_title"];?></h2>
                                                                <p class="advice-description"><?php echo $text;?></p>
                                                            </div>
                                                        </a>
                                                    </div>
													
													  <?php } }?>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </div>
                                    <div class="product__list--wrapper">
                                        <div class="pagination-bar bottom">
                                            <div class="pagination-toolbar">
                                                <div class="helper clearfix hidden-md hidden-lg"></div>
                                                <div class="sort-refine-bar">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-5 pagination-wrap">
                                                            <p style="float: left; margin-top: 10px;">Showing 1-10 of
                                                                16079 courses</p>
                                                            <ul class="pagination">
                                                                <li class="pagination-prev disabled"><span
                                                                        class="glyphicon glyphicon-chevron-left"></span>
                                                                </li>
                                                                <li class="active"><span>1<span class="sr-only">(current)</span></span>
                                                                </li>
                                                                <li><a class="" href="#">2</a>
                                                                </li>
                                                                <li><a class="" href="#">3</a>
                                                                </li>
                                                                <li><a class="hidden-xs" href="#">4</a>
                                                                </li>
                                                                <li><a class="hidden-xs" href="#">5</a>
                                                                </li>
                                                                <li class="pagination-next">
                                                                    <a class="glyphicon glyphicon-chevron-right" href="" rel="next"></a>
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
                    </div>
           
                   
                </div>
            </div>


        </div>
    </div>
    <?php include("include/footer.php")?>