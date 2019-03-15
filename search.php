<?php include("include/header.php")?>
    <div>
        <div class="container content-landing-page">
            <div class="find_course">
                <div class="content"><h1> Search Result</h1></div></div>
            <?php
            if(isset($_POST['search'])){
                
              
                
                $keyword = $_POST['keyword'];
                
                if($keyword == ""){
                    echo '
                                         <script>    
                                                         swal({
                                                              type: "error",
                                                              title: "Empty",
                                                              text: "Type something into search bar!",
                                                              allowOutsideClick:false,
                                                            }).then(function() {
                                                            window.location = "global";
                                                        });
                                         </script>
                                                 
                                                 ';
                    
                }else{

                $search=$user->search($keyword);

                $count = $search->num_rows;
                if($count == 0){
                    echo "no post";
                }else{
                    while($row=$search->fetch_array()){


            ?>

            <div class="col-xs-12 col-sm-6 col-md-4 yComponentWrapper fnd_tl">
                <a href="article?article=<?php echo $row ["post_id"]?>" findcourse="" title=""><img src="photo/post/<?php echo $row["image"]?>" alt="Accounting-370x278.jpg" class=" lazy-loaded"><span class="image-title"><?php echo $row["post_title"]?></span></a></div>

<?php } } } }?>


        </div>



    </div>

   <?php include("include/footer.php")?>