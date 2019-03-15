<?php include("include/header.php")?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Category</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Category</li>
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

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All Categories </h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
					
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Description</th>
           
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
											if(isset($_GET["delete"])){
												$delete=$super_admin->delete_category($_GET["delete"]);
												header("location:view_category");
											}
										?>
				
					<?php $view_category=$super_admin->view_category();
											while($row=$view_category->fetch_array()){
 										?>
				
                  <tr>
                    
					
                    <td><?php echo $row["cat_name"]?></td>
                    <td><?php echo $row["cat_des"]?></td>
                    <td><li><a onclick="return confirm('you are going to delete...are you sure?')" href="view_category?delete=<?php echo $row["cat_id"];?>"title="Delete"><i class="fa fa-trash-o"></i></a></li><li><a  href="edit_category?edit=<?php echo $row["cat_id"];?>"title="Edit"><i class="ti-pencil"></i></a></li></td>
                   
                  </tr>
						<?php }?>				
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->




  

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
	  <?php include("include/footer.php")?>