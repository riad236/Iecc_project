<?php include("include/header.php")?>	  
	  
	  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add New Image</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Gallery Image Insert</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Image</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    	<!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="personal-info" action="" method="post"enctype="multipart/form-data">
					<?php
									if(isset($_POST["upload"])){
										
										
										
										try{
										$filetmp = $_FILES["img"]["tmp_name"];
										$filename = time().$_FILES["img"]["name"];
										$filepath = "../gallery/".$filename;										
										if(move_uploaded_file($filetmp,$filepath)){
											$super_admin->add_image($_POST["caption"],$filename);
										
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
				
			
				
			   <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Image Caption
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">Caption</label>
                  <div class="col-sm-10">
                    <input type="text" name="caption" class="form-control" id="input-1" required>
                  </div>

                </div>
               
			 
				
				
                <h4 class="form-header">
                <i class="fa fa-file-text-o"></i>
                 Upload Image
                </h4>
               
               
               
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Select Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="img" required>
                  </div>
                </div>
              
                <div class="form-footer">
                   
                    <input type="submit" value="Upload" name="upload" class="btn btn-success"></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
     

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	
<?php include("include/footer.php")?>	