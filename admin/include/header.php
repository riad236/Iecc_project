<?php
ob_start();
session_start();
spl_autoload_register(function($class){
    include("../class/".$class.".php"); 
});
$super_admin=new super_admin();
$user=new user();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 14:40:22 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>IECC'S Admin Panel</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/iecc.png"  type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!--Data Tables -->
  <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!--Bootstrap Datepicker-->
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

  
</head>

<body class="bg-theme bg-theme1">


<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
 <?php 
 if($_SESSION["type"] == "admin"){

 ?>
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="dashboard">
       <img src="assets/images/iecc.png" style="background:white;height:30px;border-radius: 10px;" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">IECC'S Admin</h5>
     </a>
   </div>
   <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	  	<?php
						    
							$view_panel=$super_admin->view_panel($_SESSION["id"]);
							$p=$view_panel->fetch_array();
			            ?>
	    <div class="avatar"><img class="mr-3 side-user-img" src="../photo/<?php echo $p["admin_image"];?>" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name"> <?php echo $p["admin_name"];?></h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
           
			<li><a href="logout"><i class="icon-power"></i> Logout</a></li>
		  </ul>
	   </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="dashboard" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
		
      </li>
	  
	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Admins</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_admin"><i class="zmdi zmdi-long-arrow-right"></i>Add New Admin</a></li>
        <li><a href="view_admin"><i class="zmdi zmdi-long-arrow-right"></i>View All Admin</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Article</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_post"><i class="zmdi zmdi-long-arrow-right"></i>Add New Article</a></li>
        <li><a href="view_post"><i class="zmdi zmdi-long-arrow-right"></i>View All Article</a></li>
        </ul>
      </li>
	  
	

	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Categories</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_category"><i class="zmdi zmdi-long-arrow-right"></i>Add New Categories</a></li>
        <li><a href="view_category"><i class="zmdi zmdi-long-arrow-right"></i>View All Categories</a></li>
        </ul>
      </li>
	  
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Notice</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="notice.php"><i class="zmdi zmdi-long-arrow-right"></i>New Notice</a></li>
        <li><a href="view_notice.php"><i class="zmdi zmdi-long-arrow-right"></i>Previous Notice's</a></li>
        </ul>
      </li>


       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Events</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_events"><i class="zmdi zmdi-long-arrow-right"></i>Add New Events</a></li>
               <li><a href="view_events"><i class="zmdi zmdi-long-arrow-right"></i>View All Events</a></li>
           </ul>
       </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Advice</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_advice"><i class="zmdi zmdi-long-arrow-right"></i>Add New Advice</a></li>
               <li><a href="view_advice"><i class="zmdi zmdi-long-arrow-right"></i>View All Advices</a></li>
           </ul>
       </li>


       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Study Destination</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_country"><i class="zmdi zmdi-long-arrow-right"></i>Add New Country</a></li>
        <li><a href="view_country"><i class="zmdi zmdi-long-arrow-right"></i>View All Country </a></li>
		<li><a href="add_destination_details"><i class="zmdi zmdi-long-arrow-right"></i>Add Destination Details</a></li>
        <li><a href="view_destination_details"><i class="zmdi zmdi-long-arrow-right"></i>View Destination Details</a></li>
        </ul>
      </li>


       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Course</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="add_course"><i class="zmdi zmdi-long-arrow-right"></i>Add Course</a></li>
        <li><a href="view_course"><i class="zmdi zmdi-long-arrow-right"></i>View All Course</a></li>
    <li><a href="add_course_details"><i class="zmdi zmdi-long-arrow-right"></i>Add course Details</a></li>
        <li><a href="view_course_details"><i class="zmdi zmdi-long-arrow-right"></i>View course Details</a></li>
        </ul>
      </li>



	     <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Applied Student's</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">

               <li><a href="applied"><i class="zmdi zmdi-long-arrow-right"></i>View All Student's</a></li>
           </ul>
       </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>User's</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">

               <li><a href="view_user"><i class="zmdi zmdi-long-arrow-right"></i>View All User's</a></li>
           </ul>
       </li>
	  
	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Gallery</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_image"><i class="zmdi zmdi-long-arrow-right"></i>Add Image</a></li>
        <li><a href="gallery"><i class="zmdi zmdi-long-arrow-right"></i>View Gallery</a></li>
        </ul>
      </li>

       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Testimonial</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="testimonial"><i class="zmdi zmdi-long-arrow-right"></i>Add New Testimonial</a></li>
        <li><a href="view_testimonial"><i class="zmdi zmdi-long-arrow-right"></i>View All Testimonial </a></li>
        </ul>
      </li>

        <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Services</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="new_service"><i class="zmdi zmdi-long-arrow-right"></i>Add New Services</a></li>
        <li><a href="view_service"><i class="zmdi zmdi-long-arrow-right"></i>View All Services </a></li>
        </ul>
      </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Visa</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="new_visa"><i class="zmdi zmdi-long-arrow-right"></i>Add Visa Service</a></li>
               <li><a href="view_visa"><i class="zmdi zmdi-long-arrow-right"></i>View Visa Service </a></li>
           </ul>
       </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>File Upload</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="upload"><i class="zmdi zmdi-long-arrow-right"></i>Upload New File</a></li>
        <li><a href="view_upload"><i class="zmdi zmdi-long-arrow-right"></i>All Uploaded Files </a></li>
        </ul>
      </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>About US</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_about"><i class="zmdi zmdi-long-arrow-right"></i>Add About us</a></li>
               <li><a href="view_about"><i class="zmdi zmdi-long-arrow-right"></i>View About us </a></li>
           </ul>
       </li>

    
<li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Partners</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_partner"><i class="zmdi zmdi-long-arrow-right"></i>Add Partner</a></li>
               <li><a href="view_partner"><i class="zmdi zmdi-long-arrow-right"></i>View Partner </a></li>
           </ul>
       </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Ads</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_ads"><i class="zmdi zmdi-long-arrow-right"></i>Insert Ads</a></li>
               <li><a href="view_ads"><i class="zmdi zmdi-long-arrow-right"></i>View Ads </a></li>
           </ul>
       </li>
      
     
   
    
   

    </ul>
   
   </div>
<?php }else{?>
   <!--End sidebar-wrapper-->


 <!--Start sidebar2-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="dashboard">
       <img src="assets/images/iecc.png" style="background:white;height:30px;border-radius: 10px;" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">IECC'S Admin</h5>
     </a>
   </div>
   <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	  	<?php
						    
							$view_panel=$super_admin->view_panel($_SESSION["id"]);
							$p=$view_panel->fetch_array();
			            ?>
	    <div class="avatar"><img class="mr-3 side-user-img" src="../photo/<?php echo $p["admin_image"];?>" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name"> <?php echo $p["admin_name"];?></h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
           
			<li><a href="logout"><i class="icon-power"></i> Logout</a></li>
		  </ul>
	   </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="dashboard" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
		
      </li>
	  
	  
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Article</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_post"><i class="zmdi zmdi-long-arrow-right"></i>Add New Article</a></li>
        <li><a href="view_post"><i class="zmdi zmdi-long-arrow-right"></i>View All Article</a></li>
        </ul>
      </li>
	  
	

	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Categories</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_category"><i class="zmdi zmdi-long-arrow-right"></i>Add New Categories</a></li>
        <li><a href="view_category"><i class="zmdi zmdi-long-arrow-right"></i>View All Categories</a></li>
        </ul>
      </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Notice</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="notice.php"><i class="zmdi zmdi-long-arrow-right"></i>New Notice</a></li>
               <li><a href="view_notice.php"><i class="zmdi zmdi-long-arrow-right"></i>Previous Notice's</a></li>
           </ul>
       </li>


       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Events</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_events"><i class="zmdi zmdi-long-arrow-right"></i>Add New Events</a></li>
               <li><a href="view_events"><i class="zmdi zmdi-long-arrow-right"></i>View All Events</a></li>
           </ul>
       </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Advice</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_advice"><i class="zmdi zmdi-long-arrow-right"></i>Add New Advice</a></li>
               <li><a href="view_advice"><i class="zmdi zmdi-long-arrow-right"></i>View All Advices</a></li>
           </ul>
       </li>

	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Study Destination</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_country"><i class="zmdi zmdi-long-arrow-right"></i>Add New Country</a></li>
        <li><a href="view_country"><i class="zmdi zmdi-long-arrow-right"></i>View All Country </a></li>
		<li><a href="add_destination_details"><i class="zmdi zmdi-long-arrow-right"></i>Add Destination Details</a></li>
        <li><a href="view_destination_details"><i class="zmdi zmdi-long-arrow-right"></i>View Destination Details</a></li>
        </ul>
      </li>


       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Course</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="add_course"><i class="zmdi zmdi-long-arrow-right"></i>Add Course</a></li>
        <li><a href="view_course"><i class="zmdi zmdi-long-arrow-right"></i>View All Course</a></li>
    <li><a href="add_course_details"><i class="zmdi zmdi-long-arrow-right"></i>Add course Details</a></li>
        <li><a href="view_course_details"><i class="zmdi zmdi-long-arrow-right"></i>View course Details</a></li>
        </ul>
      </li>


	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Applied Student's</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		
        <li><a href="applied"><i class="zmdi zmdi-long-arrow-right"></i>View All Student's</a></li>
        </ul>
      </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>User's</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">

               <li><a href="view_user"><i class="zmdi zmdi-long-arrow-right"></i>View All User's</a></li>
           </ul>
       </li>


	     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Gallery</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="add_image"><i class="zmdi zmdi-long-arrow-right"></i>Add Image</a></li>
        <li><a href="gallery"><i class="zmdi zmdi-long-arrow-right"></i>View Gallery</a></li>
        </ul>
      </li>

       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Testimonial</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
		<li><a href="testimonial"><i class="zmdi zmdi-long-arrow-right"></i>Add New Testimonial</a></li>
        <li><a href="view_testimonial"><i class="zmdi zmdi-long-arrow-right"></i>View All Testimonial </a></li>
        </ul>
      </li>

       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Services</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="new_service"><i class="zmdi zmdi-long-arrow-right"></i>Add New Services</a></li>
        <li><a href="view_service"><i class="zmdi zmdi-long-arrow-right"></i>View All Services </a></li>
        </ul>
      </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Visa</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="new_visa"><i class="zmdi zmdi-long-arrow-right"></i>Add Visa Service</a></li>
               <li><a href="view_visa"><i class="zmdi zmdi-long-arrow-right"></i>View Visa Service </a></li>
           </ul>
       </li>
   
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>File Upload</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="upload"><i class="zmdi zmdi-long-arrow-right"></i>Upload New File</a></li>
        <li><a href="view_upload"><i class="zmdi zmdi-long-arrow-right"></i>All Uploaded Files </a></li>
        </ul>
      </li>


       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>About US</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_about"><i class="zmdi zmdi-long-arrow-right"></i>Add About us</a></li>
               <li><a href="view_about"><i class="zmdi zmdi-long-arrow-right"></i>View About us </a></li>
           </ul>
       </li>

       <li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Partners</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_partner"><i class="zmdi zmdi-long-arrow-right"></i>Add Partner</a></li>
               <li><a href="view_partner"><i class="zmdi zmdi-long-arrow-right"></i>View Partner </a></li>
           </ul>
       </li>


<li>
           <a href="javaScript:void();" class="waves-effect">
               <i class="zmdi zmdi-layers"></i>
               <span>Ads</span> <i class="fa fa-angle-left pull-right"></i>
           </a>
           <ul class="sidebar-submenu">
               <li><a href="add_ads"><i class="zmdi zmdi-long-arrow-right"></i>Insert Ads</a></li>
               <li><a href="view_ads"><i class="zmdi zmdi-long-arrow-right"></i>View Ads </a></li>
           </ul>
       </li>


   </ul>
   
   </div>
   <!--End sidebar2-wrapper-->
<?php }?>




<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-light">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-5.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-6.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-7.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-8.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
     
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-13.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->