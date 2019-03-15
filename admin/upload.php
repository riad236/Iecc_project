
<?php include("include/header.php")?>
<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">File Upload</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">IECC</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">New</a></li>
            <li class="breadcrumb-item active" aria-current="page">File Upload</li>
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
              <form id="personal-info"action="" method="post"enctype="multipart/form-data">
                    <?php
                  if(isset($_POST["save"])){
                    
                    $title = $_POST["title"];
                   
                    
                    try{



                    $filetmp = $_FILES["img"]["tmp_name"];
                    $filename = time().$_FILES["img"]["name"];
                    $filepath = "../uploads/".$filename;                    
                    if(move_uploaded_file($filetmp,$filepath)){
                      $super_admin->file_upload($title,$filename2,$filename);
                    
                ?>
        
           <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <div class="alert-icon">
       <i class="fa fa-check"></i>
      </div>
      <div class="alert-message">
        <span><strong></strong>Sucessfully Uploaded!</span>
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
                   Information
                </h4>
              
           
             
                <div class="form-group row">
                  <label for="input-4" class="col-sm-2 col-form-label">Titile</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-4" name="title" required>
                  </div>
                </div>
                <h4 class="form-header">
                <i class="fa fa-file-text-o"></i>
                  Additional Information
                </h4>
               
               
               
                <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Upload File</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="img" required>
                  </div>
                </div>
             
                

                <div class="form-footer">
                   
                    <button type="submit" name="save" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      
    </div>
    <!-- End container-fluid-->
    
 

  <!--Form Validatin Script-->
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script>

    $().ready(function() {

    $("#personal-info").validate();

   // validate signup form on keyup and submit
    $("#signupForm").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
             contactnumber: {
                required: true,
                minlength: 10
            },
            topic: {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            contactnumber: "Please enter your 10 digit number",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
        }
    });

});

    </script>
  <?php include("include/footer.php")?>