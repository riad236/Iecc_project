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
                                        if(isset($_GET["country"])){
                                            $view_destination=$user->view_destination($_GET["country"]);
                                            $des=$view_destination->fetch_array();
                                            ?>
                                        <div class="results">
                                            <?php if(isset($des['country_name'])){?>
                                                <h1><?php echo $des["country_name"]?></h1> <br></div>

                                            <?php }else{?>
                                                <h1>No Post Yet</h1>
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
                                                    if(isset($_GET["country"])){
                                                        $view_destination=$user->view_destination($_GET["country"]);
                                                        while($row=$view_destination->fetch_array()){


                                                            $char = $row["post_des"];



                                                            $text = substr($char,0,300);
                                                            ?>

                                                    <div class="row col-xs-12 col-sm-12 ">
                                                        <a class="secteaser_wrapper"
                                                           href="study_details.php?details=<?php echo $row ["post_id"]?>"
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
                                                    </div><br>
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
            </div>


        </div>
    </div>

<?php include("include/footer.php")?>