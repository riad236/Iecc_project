<?php include("include/header.php")?>
    <div>
        <div class="container content-landing-page">
            <div class="find_course">
                <div class="content"><h1> Find a course</h1></div></div>

                <?php $view_course=$super_admin->view_course();
                    while($row=$view_course->fetch_array()){
                        
                ?>
            <div class="col-xs-12 col-sm-6 col-md-4 yComponentWrapper fnd_tl">
                <a href="course_details?course=<?php echo $row ["id"]?>" findcourse="" title=""><img src="photo/<?php echo $row["image"]?>" alt="Accounting-370x278.jpg" class=" lazy-loaded"><span class="image-title"><?php echo $row["course_name"]?></span></a></div>
            <?php }?>


        </div>



    </div>

   <?php include("include/footer.php")?>