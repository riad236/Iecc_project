<?php include("include/header.php")?>
 <!-- End Breadcrumb-->
     
	 
	  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add New Country</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Study Destination</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Country</li>
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
			<?php 
							
							if(isset($_GET["edit"])){
							$edit=$super_admin->edit_country($_GET["edit"]);
							$redit=$edit->fetch_array();
							?>	
              <form id="personal-info" action="" method="post"enctype="multipart/form-data">
				   	 <?php if(isset($_POST["update"])){
										
											$super_admin->update_country($_POST["cname"],$_GET["edit"]);
										?>
			 
			 
											
											
											
				 <div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<div class="alert-icon">
			 <i class="fa fa-check"></i>
			</div>
			<div class="alert-message">
			  <span><strong></strong>Country Sucessfully updated</span>
			</div>
		  </div>
					 <?php }?>
	  
				
		
				
			   <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Country Info
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label">country Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="cname" value="<?php echo $redit["country_name"];?>" class="form-control" id="input-1" required>
                  </div>
                </div>
               
			 
				
				
               
              
                <div class="form-footer">
                   
                    <input type="submit" value="Update" name="update" class="btn btn-success"></button>
                </div>
              </form>
			  <?php }?>
            </div>
          </div>
        </div>
							
      </div><!--End Row-->
     

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	 
	 <!--End Row-->
	 

	  <?php include("include/footer.php")?>