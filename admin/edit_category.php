<?php include("include/header.php")?>

<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">New Category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Category</li>
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

<!-- start edit -->

 <div class="row">
      <div class="col-lg-6">
	  	<?php 
							
							if(isset($_GET["edit"])){
							$edit=$super_admin->edit_category($_GET["edit"]);
							$redit=$edit->fetch_array();
							?>	
	  
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit Category</div>
           <hr>
            <form role="form" action="" method="post">
			 
			 <?php if(isset($_POST["update"])){
										$update=$super_admin->update_category($_POST["cname"],$_POST["cdes"],$_GET["edit"]);
										if($update){
										?>
			 
			 
											
											
											
				 <div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<div class="alert-icon">
			 <i class="fa fa-check"></i>
			</div>
			<div class="alert-message">
			  <span><strong></strong>Category Sucessfully updated</span>
			</div>
		  </div>
				
				 <?php } }?>
			
           <div class="form-group">
            <label for="input-1">Category Name</label>
            <input type="text" name="cname" class="form-control" value="<?php echo $redit["cat_name"];?>" id="input-1">
           </div>
           <div class="form-group">
            <label for="input-2">Category Description </label>
            <input type="text" name="cdes" value="<?php echo $redit["cat_des"];?>" class="form-control" id="input-2">
           </div>
      
           <div class="form-group">
            <button type="submit" name="update" class="btn btn-light px-5">Update</button>
          </div>
          </form>
         </div>
         </div>
		
      </div>
<?php }?>
  
    </div><!--End Row-->

<!-- End edit-->
	

	

   
<?php include("include/footer.php")?>