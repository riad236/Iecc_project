<?php include("include/header.php")?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Admin List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">View admin</li>
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
              <h5 class="card-title">Admin List</h5>
			  <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
					<?php
											if(isset($_GET["delete"])){
												$Delete=$super_admin->delete_admin($_GET["delete"]);
												header("location:view_admin");
												
											}
										?>
					<?php $view_admin=$super_admin->view_admin();
										while($row=$view_admin->fetch_array()){
											?>
				
                  <tr>
                    <th scope="row"><?php echo $row["admin_name"]?></th>
                    <td><?php echo $row["admin_email"]?></td>
                    <td><?php echo $row["admin_rank"]?></td>
                    <td> <li><a onclick="return confirm('are you sure?')" href="view_admin?delete=<?php echo $row["id"];?>"title="Delete"><i class="fa fa-trash-o"></i></a></li></td>
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