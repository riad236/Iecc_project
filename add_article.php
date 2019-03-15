<?php include("include/header.php")?>
         <div>
            <div class="row">
               <div>
                  <div class="container content-landing-page" >
                     <h1 style="color: lightskyblue">Add A New Article</h1>
                  	<div class="user_post">
                        <form role="form" action="" method="post"enctype="multipart/form-data">
                          <?php
                          if(isset($_POST["post"])){



                              try{
                                  $filetmp = $_FILES["img"]["tmp_name"];
                                  $filename = time().$_FILES["img"]["name"];
                                  $filepath = "photo/post/".$filename;
                                  if(move_uploaded_file($filetmp,$filepath)){
                                      $user->add_post($_POST["title"], $_POST["des"],$filename,$_SESSION['id']);

                                      ?>

                                      <div class="alert alert-success alert-dismissible" role="alert">
                                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                                          <div class="alert-icon">
                                              <i class="fa fa-check"></i>
                                          </div>
                                          <div class="alert-message">
                                              <span><strong></strong>Image Sucessfully inserted!</span>
                                          </div>
                                      </div>
                                  <?php }else{
                                      ?>
                                      <div class="alert alert-danger alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          Error uploading the file <a href="#" class="alert-link"></a>.
                                      </div>
                                      <?php
                                  }
                              }catch(Exeption $e){
                                  echo $e->getMEssage();
                                  var_dump($e);
                              }
                          }?>



                       <div class="form-group">
                          <label class="control-label " for="j_username" aria-label="Your email address">
                             Add Article Title</label>
                          <input style="height:20px" id="j_username" name="title" class="input-box form-control" type="text" value=""></div>

                            <div class="form-group row">
                                <label for="input-8" class="col-sm-2 col-form-label">Select Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="input-8" name="img" required>
                                </div>
                            </div>

                       <textarea name="des"  id="summernoteEditor" required></textarea>

                       <button type="submit" name="post" class="button5"><span>Add New Article</span></button>

                       <style>


                          .button5{
                             display:inline-block;
                             padding:0.46em 1.6em;
                             border:0.1em solid red;
                             margin-left:490px;
                             border-radius:0.12em;
                             box-sizing: border-box;
                             text-decoration:none;
                             font-family:'Roboto',sans-serif;
                             font-weight:300;
                             color:white;
                             text-shadow: 0 0.04em 0.04em rgba(0,0,0,0.35);
                             background-color:red;
                             text-align:center;
                             transition: all 0.15s;
                          }
                          .button5:hover{
                             text-shadow: 0 0 2em rgba(255,255,255,1);
                             color:#FFFFFF;
                             border-color:#FFFFFF;
                          }
                          @media all and (max-width:667px){

                             .button5{
                                display:block;

                                margin-left:0px;
                             }

                          }
                       </style>
                        </form>
                    </div>
                     
                  </div>
               </div>
            </div>
         </div>

         <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
         <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
         <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
         <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
         <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

         <script>
            $('#summernoteEditor').summernote({
               height: 400,
               tabsize: 2
            });
         </script>

<?php include("include/footer.php")?>