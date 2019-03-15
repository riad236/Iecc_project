<?php include("include/header.php")?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Country List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC'S</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Study Destination</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Countries</li>
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
            <div class="card-header"><i class="fa fa-table"></i> Country List</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Action</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
					<?php
											if(isset($_GET["delete"])){
												$delete_country=$super_admin->delete_country($_GET["delete"]);
												
												
												header("location:view_country.php");
												
											}
										?>
				
				<?php $view_country=$super_admin->view_country();
					while($row=$view_country->fetch_array()){
						
 				?>
				
                    <tr>
                       
                        <td><?php echo $row["country_name"]?></td>
                        <td ><?php echo $row["create_date"]?></td>
                   
                        <td><li><a onclick="return confirm('You are going to delete.are you sure?')" href="view_country?delete=<?php echo $row["id"];?>"title="Delete"><i class="fa fa-trash-o"></i></a></li><li><a  href="edit_country?edit=<?php echo $row["id"];?>"title="Edit"><i class="ti-pencil"></i></a></li></td></td>
                    </tr>
					
                <?php }?>
                </tbody>
              
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->


      

    </div>
	  
	  <!--Data Tables js-->
  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	  
<?php include("include/footer.php")?>