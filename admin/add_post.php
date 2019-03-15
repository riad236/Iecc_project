<?php include("include/header.php")?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     
    <!-- End Breadcrumb-->
		 
		 
		 <?php 
							if(isset($_GET["edit"])){
								$pedit=$super_admin->edit_post($_GET["edit"]);
							$redit=$pedit->fetch_array();
							
				?>	
		 
      
          <div class="card">
		  <h3 style="color:white;">Edit New Article</h3>
            <div class="card-header text-uppercase">Form text editor</div>
            <div class="card-body">
           <form role="form" action="" method="post"enctype="multipart/form-data">
				<?php if(isset($_POST["update"])){
								        $id=$_GET['edit'];
										$update_post=$super_admin->update_post($_POST["title"],$_POST["des"],$_POST["one"],$id);
										if($update_post){
								?>
				
				
				<div class="alert alert-success alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										 Updated Sucessfully <a href="#" class="alert-link"></a>.
										</div>
				<?php } }?>
					<div class="form-group row">
                  <label for="input-6" class="col-sm-2 col-form-label">Article Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" style="background-color:rgba(255, 255, 255, 0);width:50%;" class="form-control form-control-rounded" value="<?php echo $redit["post_title"];?>" required><br>
                  </div>
                </div>
				
				
					<div class="form-group row">
                  <label for="input-6" class="col-sm-2 col-form-label">Article Category</label>
                  <div class="col-sm-10">
							   		
				  
                    <select name="one" style="background-color:rgba(255, 255, 255, 0);width:50%;" class="form-control" id="input-6"  required>
					<option readonly> Update category</option>
                         <?php $view_category=$super_admin->view_category();
											while($row=$view_category->fetch_array()){
								?>
						
						
                       <option value="<?php echo $row["cat_name"]?>"><?php echo $row["cat_name"]?></option>
                        
											<?php }?>
						
                    </select>
                  </div>
                </div>
				
				
				
				<textarea name="des"  id="summernoteEditor" required><?php echo $redit["post_des"];?></textarea>

				<button type="submit" name="update" class="btn btn-success">Update</button>
		   
		
		   </form>
                </div>
              </div>
           
         
		
		
							<?php }else{?>
	
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
		  <h3 style="color:white;">Add New Article</h3>
            <div class="card-header text-uppercase">Form text editor</div>
            <div class="card-body">
           <form role="form" action="" method="post"enctype="multipart/form-data">
				<?php
									if(isset($_POST["done"])){

									    try{
                                        $filetmp = $_FILES["img"]["tmp_name"];
                                        $filename = time().$_FILES["img"]["name"];
                                        $filepath = "../photo/post/".$filename;
                                        if(move_uploaded_file($filetmp,$filepath)) {
                                            $post = $super_admin->add_post($_POST["title"], $_POST["des"],$filename, $_POST["one"]);

                                            ?>

               <div class="alert alert-success alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <div class="alert-icon">
                       <i class="fa fa-check"></i>
                   </div>
                   <div class="alert-message">
                       <span><strong></strong>Sucessfully inserted!</span>
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


				
					<div class="form-group row">
                  <label for="input-6" class="col-sm-2 col-form-label">Article Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" style="background-color:rgba(255, 255, 255, 0);width:50%;" class="form-control form-control-rounded" required><br>
                  </div>
                </div>
				
				
					<div class="form-group row">
                  <label for="input-6" class="col-sm-2 col-form-label">Article Category</label>
                  <div class="col-sm-10">
                    <select name="one" style="background-color:rgba(255, 255, 255, 0);width:50%;" class="form-control" id="input-6"  required>
					<option readonly> Choose an category</option>
                        <?php $view_category=$super_admin->view_category();
											while($row=$view_category->fetch_array()){
												?>
						
					
                       <option value="<?php echo $row["cat_name"]?>"><?php echo $row["cat_name"]?></option>
                        
											<?php }?>
                        
                    </select>
                  </div>
                </div>
				
				
				
				<textarea name="des"  id="summernoteEditor" required></textarea>
               <div class="form-group row">
                   <label for="input-8" class="col-sm-2 col-form-label">Image File</label>
                   <div class="col-sm-10">
                       <input style="background-color: rgba(255, 255, 255, 0)" type="file" class="form-control" id="input-8" name="img" required>
                   </div>
               </div>
				<button type="submit" name="done" class="btn btn-success">Submit</button>
		   
		<?php }?>
		   </form>
                </div>
              </div>
            </div>
          </div>

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   

 
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
