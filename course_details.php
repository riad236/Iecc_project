<?php $page_class = "page-search" ?>
<?php include("include/header.php")?>
    <div>
        <div class="row">
            <div>
                <div class="container__full content-top clr">
                    <div class="row left-panel">
                        <div class="col-sm-12 col-md-9">
                            <div class="yCmsContentSlot search-list-page-left-refinements-slot mobile-space">
                                <div class="yCmsComponent search-list-page-left-refinements-component">
                                    <div class="col-md-12 product__facet js-product-facet" id="product-facet">

                                        <?php
                                        if(isset($_GET["course"])){
                                            $view_course_details=$user->view_course_details($_GET["course"]);
                                            $des=$view_course_details->fetch_array();
                                            ?>


                                        <div class="results">
                                            <?php if(isset($des['course_name'])){?>

                                            <h1><?php echo $des["course_name"]?></h1>

                                            <?php }else{?>
                                                <h1>No post Yet</h1>

                                                </div>
                                            <?php }}?>
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


                                                    $string = $row["post_des"];

                                                    $string =$user->turncate($string);




                                                    ?>

                                                    <div class="row col-xs-12 col-sm-12 ">


                                                        <a class="secteaser_wrapper"
                                                           href="course_post.php?course_post=<?php echo $row ["post_id"]?>"
                                                           target="">
                                                            <div class="secteser-lft col-xs-12 col-sm-6 col-md-6 no-space">
                                                                <img alt="" class=" lazy-loaded"
                                                                     src="photo/<?php echo $row["image"];?>">
                                                            </div>
                                                            <div class="secteser-rt col-xs-12 col-sm-6 col-md-6">
                                                                <h2 class="advice-name"><?php echo $row["post_title"];?></h2>
                                                                <p class="advice-description"><?php echo $string;?>
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div><br>



                                                    </div>



                                            </div>
                                        </div>
                                        <?php } }?>
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