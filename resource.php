<?php include("include/header.php")?>

    <div>
        <div class="container content-landing-page">
            <div class="find_course">
                <div class="content"><h1> Download Resources</h1></div></div>

              <div class="table-responsive" data-pattern="priority-columns">
        <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
         
          <thead>
            <tr>
              
              <th data-priority="1"> No</th>
              <th data-priority="2">Title</th>
              <th data-priority="3">File Name</th>
              <th data-priority="4">Download</th>
            </tr>
          </thead>
          <tbody>
            <?php $view_upload=$super_admin->view_upload();
                    while($row=$view_upload->fetch_array()){
                        
                ?>
            <tr>
           
              <td ><?php echo $row["id"]?></td>
              <td style="width:400px;"><?php echo $row["title"]?></td>
              <td><?php echo $row["filename"]?></td>
              <td style="width:140px;"><a download="<?php echo $row["filename"]?>" href="uploads/<?php echo $row["filename"]?>">DOWNLOAD NOW</a></td>
            </tr>
            <?php }?>
          </tbody>
          
        </table>
<style>
    
    .table-bordered {
  border: 1px solid #ddd !important;
}

table caption {
    padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    display: none;
  }
}
</style>

      </div><!--end of .table-responsive-->


        </div>
    </div>
  
   <?php include("include/footer.php")?>