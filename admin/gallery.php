<?php include("include/header.php")?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">IECC'S Gallery</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">View gallery</li>
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
        <div class="col-12">
          <div class="card">
            <div class="card-header text-uppercase">All Images</div>
            <div class="card-body">
              <div class="row">
              	<?php
											if(isset($_GET["delete"])){
												$delete=$super_admin->delete_image($_GET["delete"]);
												header("location:gallery");
											}
										?>
				<?php $view_gallery=$super_admin->view_gallery();
											while($row=$view_gallery->fetch_array()){
 										?>
			  
                <div class="col-md-6 col-lg-3 col-xl-3">
                  <a href="../gallery/<?php echo $row['image']?>" data-fancybox="images" data-caption="<?php echo $row['caption']?>">
                  <img src="../gallery/<?php echo $row['image']?>" alt="lightbox" class="lightbox-thumb img-thumbnail">
				  <li><a onclick="return confirm('you are going to delete...are you sure?')" href="gallery?delete=<?php echo $row["id"];?>"title="Delete"><i class="fa fa-trash-o"></i></a></li>
                </a>
                </div>
                
											<?php }?>
               
              </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

     

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   
    <!--Lightbox Css-->
  <link href="assets/plugins/fancybox/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
    <!--Lightbox-->
  <script src="assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>
  
   
   <?php include("include/footer.php")?>