<?php
ob_start();
session_start();
spl_autoload_register(function($class){
    include("../class/".$class.".php"); 
});
$super_admin=new super_admin();
if(isset($_SESSION["id"])){
    header("location:dashboard");
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/authentication-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 14:49:40 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>IECC Admin Login Panel</title>
  <!--favicon-->
  <link rel="icon" href="../assets/img/logo.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-signin2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">IECC'S</h2>
                 <h1 class="text-white">Admin Login</h1>
                
             </div>
	    	</div>

	    	<div class="card mb-0 ">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/iecc.png" style="height:50px;" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Admin Login</div>
					   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					   
					   <?php
									
                                        //login Code
                                        if(isset($_POST["login"])){
											$password = $_POST["password"];
											$md5pass = md5($password);
											
                                            $login=$super_admin->admin_login($_POST["uname"],$md5pass);
                                            if($login->num_rows<1){
                                                echo"<script>
													swal({
													  title: 'Login Failed!',
													  text: 'Name or password incorrect!',
													  icon: 'error',
													  button: 'Try again!',
													});
													</script>";
                                            }
											
                                            else{
												
												$rememberme = $_POST['remember_me'];
												
                                                $row=$login->fetch_array();
                                                $_SESSION["id"]=$row["id"];
												$_SESSION["name"]=$row["admin_name"];
												$_SESSION["email"]=$row["admin_email"];
                                                $_SESSION["type"]=$row["admin_rank"];
												$_SESSION["password"]=$row["admin_pass"];
                                                header("location:dashboard");
												
                                            }
                                        }
										
										
										
                                    ?>
					   
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							   <label for="exampleInputUsername" class="sr-only">Username</label>
								 <input type="text" id="exampleInputUsername" name="uname" class="form-control" placeholder="Username">
								 <div class="form-control-position">
									<i class="icon-user"></i>
								</div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" name="password" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-material-white">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
							<div class="form-group col-6 text-right">
							 <a href="authentication-reset-password2.html">Reset Password</a>
							</div>
						</div>
						<input type="submit" value="Login" name="login" class="btn btn-light btn-block waves-effect waves-light">
					
					</form>
				 </div>
				</div>
	    	</div>
	     </div>
	    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
      
     </div>
   </div>
  <!--end color cwitcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>

<!-- Mirrored from codervent.com/dashtreme/demo/authentication-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 14:49:40 GMT -->
</html>
