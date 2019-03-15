
<?php include("include/header.php")?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Applied Students <span class="float-right badge badge-light"></span></p>
           <div class="">

               <?php
               if(isset($_SESSION['id'])){
               $member=$super_admin->applied_students();
               $count = $member->num_rows;
               ?>
           <h4 class="mb-0 py-3"><?php echo $count;?> <span class="float-right"><i class="fa fa-home"></i></span></h4>

               <?php }?>
           </div>

        </div>
      </div>
     </div>


     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Total IECC User <span class="float-right badge badge-light"></span></p>
           <div class="">
               <?php
               if(isset($_SESSION['id'])){
               $site_user=$super_admin->view_user();
               $count = $site_user->num_rows;
               ?>

           <h4 class="mb-0 py-3"><?php echo $count;?> <span class="float-right"><i class="fa fa-user"></i></span></h4>
               <?php }?>
           </div>

        </div>
      </div>
     </div>

     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-white mb-0">Total Admins <span class="float-right badge badge-light"></span></p>
           <div class="">
               <?php
               if(isset($_SESSION['id'])){
               $site_admin=$super_admin->view_admin();
               $count = $site_admin->num_rows;
               ?>

           <h4 class="mb-0 py-3"><?php echo $count;?> <span class="float-right"><i class="fa fa-car"></i></span></h4>
               <?php }?>
           </div>

        </div>
      </div>
     </div>

   </div><!--End Row-->
     
     <div class="card">
       <div class="card-header">Property User Ratio
          <div class="btn-group group-round btn-group-sm float-right">
              <button type="button" class="btn btn-white waves-effect waves-light">Monthly</button>
              <button type="button" class="btn btn-light waves-effect waves-light">Weekly</button>
              <button type="button" class="btn btn-light waves-effect waves-light">Daily</button>
            </div>
       </div>
       <div class="card-body">
         <div class="row">
           <div class="col-12 col-lg-3 text-center">
             <p class="mt-4">Total Users</p>

               <?php
               if(isset($_SESSION['id'])){
               $member=$super_admin->view_user();
               $count = $member->num_rows;
               ?>

                   <h4 class="mb-0 py-3"><?php echo $count;?> <span class="float-right"><i class="fa fa-user"></i></span></h4>
               <?php }?>
             <hr>
             <p>Total Applied Students</p>
               <?php
               if(isset($_SESSION['id'])){
                   $member=$super_admin->applied_students();
                   $count = $member->num_rows;
                   ?>
                   <h4 class="mb-0 py-3"><?php echo $count;?> <span class="float-right"><i class="fa fa-home"></i></span></h4>

               <?php }?>
           </div>
           <div class="col-12 col-lg-9">
             <canvas id="dash2-chart1" height="100"></canvas>
           </div>
         </div><!--End Row-->
       </div>
     </div><!--End Card-->
	 
	 <div class="row">
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">Recent Article
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="javascript:void();">Action</a>
				  <a class="dropdown-item" href="javascript:void();">Another action</a>
				  <a class="dropdown-item" href="javascript:void();">Something else here</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="javascript:void();">Separated link</a>
				   </div>
				  </div>
				 </div>
			   </div>
			   
			    <ul class="list-group list-group-flush">
                    <?php $recent_post=$super_admin->recent_post();
                    while($row=$recent_post->fetch_array()){
                    ?>

				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img style="width: 100px;" src="../photo/post/<?php echo $row['image']?>" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0"><?php echo $row['post_title'];?></h6>

					</div>
				   </div>
				  </li>
                    <?php }?>
				</ul>
			<div class="card-footer text-center bg-transparent border-0">

			</div>
           
         </div>
	   </div>
	   

	 </div><!--End Row-->


    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   
<?php include("include/footer.php")?>