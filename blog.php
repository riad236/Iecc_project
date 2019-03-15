<?php include("include/header.php")?>
    <div>
        <div class="container content-landing-page">
            <div class="find_course">
                <div class="content"><h2 style="color:#0082dd;">Our Blogs </h2></div>


            </div>


            <?php
            $perpage=6;
            if(isset($_GET["page"])=="" || $_GET["page"]==1){
                $p=0;
            } else{
                $p=($_GET["page"]*$perpage)-$perpage;
            }

            $paginition=$user->paginition(" limit $p,$perpage");
            while($row=$paginition->fetch_array()){

                $char = $row["post_des"];

                $text = $row["post_title"];
                $limit = substr($text,0,30);
                $text = substr($char,0,100);

                ?>
            <div class="col-xs-12 col-sm-6 col-md-4 yComponentWrapper fnd_tl">
                <a href="article?article=<?php echo $row ["post_id"]?>" findcourse="" title=""><img style="height:275px;" src="photo/post/<?php echo $row["image"]?>" alt="Accounting-370x278.jpg" class=" lazy-loaded"><span class="image-title"><?php echo $row["post_title"]?></span></a></div>
            <?php }?>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 pagination-wrap">

                    <ul class="pagination">

                    <?php
                        if($_GET['page'] > 1){

                    ?>

                        <li class="pagination-prev "><a href="?page=<?php echo $_GET['page']-1?>"><span
                                    class="glyphicon glyphicon-chevron-left"></span>
                            </a></li>

                        <?php }?>

                        <?php $number=$user->paginition("");
                        $count=$number->num_rows;
                        $c=ceil($count/$perpage);
                        for($a=1; $a<=$c; $a++){
                            ?>

                            <li ><a href="?page=<?php echo $a; ?>"><?php echo $a;?></a></li>

                        <?php } ?>

                    </ul>
                </div>
            </div>

            <?php
            if(isset($_SESSION['id'])){


                ?>

                <div style="float: left;">
                    <a class="blog-link" href="add_article"><h3>Add New Blog Post</h3></a>
                </div>
            <?php } else{?>

                <a class="blog-link" href="login"><h3>Login For Post</h3></a>
            <?php }?>
        </div>
            <style>
                .blog-link:hover{
                    color:red;
                    text-decoration: underline;
                }
            </style>
    </div>

   <?php include("include/footer.php")?>