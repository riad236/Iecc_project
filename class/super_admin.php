<?php
class super_admin extends connection {
	public function admin_login($uname,$md5pass){
    $login=$this->db->query("select * from tbl_admin where admin_name='$uname' and admin_pass='$md5pass'");
        return $login ;
    }
	
public function panel_member($mname,$memail,$hashpass,$mrank,$pic){
		$panel_member=$this->db->query("INSERT INTO `tbl_admin`(`admin_name`, `admin_email`, `admin_pass`, `admin_rank`, `admin_image`) VALUES ('$mname','$memail','$hashpass','$mrank','$pic')");
		return $panel_member;
	}

public function check_admin(){
	$check_admin=$this->db->query("select * from tbl_admin where admin_name='".$_POST['mname']."'");
	return $check_admin;
	}
	
	public function view_admin(){
	$view_admin=$this->db->query("select * from tbl_admin");
	return $view_admin;
	}
	
	public function delete_admin($aid){
		$Delete=$this->db->query("delete from tbl_admin where id='$aid'");
		return $Delete;
	}
	
	public function add_post($title,$des,$filename,$one){
		$post=$this->db->query("insert into tbl_post(post_title,post_des,image,admin_id,user_id,post_category,post_date)values('$title','$des','$filename','".$_SESSION["id"]."','0','$one',NOW())");
		return $post;
	}
	
	public function view_post(){
		$view_post=$this->db->query("select * from tbl_post 
left join tbl_admin on tbl_admin.id = tbl_post.admin_id 
left join tbl_user on tbl_user.id = tbl_post.user_id");
		return $view_post;
	}
	
	public function delete_post($pid){
		$Delete=$this->db->query("delete from tbl_post where post_id='$pid'");
		return $Delete;
	}
	
	public function edit_post($id){
        $pedit=$this->db->query("select * from tbl_post where post_id='$id'");
        return $pedit;
    }
	
	public function update_post($title,$des,$one,$id){
        $update_post=$this->db->query("update tbl_post set post_title='$title',post_des='$des',post_category='$one'where post_id='$id'");
        return $update_post;
    }
	
	public function add_category($cname,$cdes){
		$insert=$this->db->query("insert into tbl_category(cat_name,cat_des)values('$cname','$cdes')");
		return $insert;
	}
	
		public function check_category($cname){
	$check_category=$this->db->query("select * from tbl_category where cat_name='$cname'");
	return $check_category;
	}
	
	public function view_category(){
		$view_category=$this->db->query("select * from tbl_category");
		return $view_category;
	}
	
	public function delete_category($id){
		$delete=$this->db->query("delete from tbl_category where cat_id='$id'");
		return $delete;
	}
	
	public function edit_category($id){
        $edit=$this->db->query("select * from tbl_category where cat_id='$id'");
        return $edit;
    }
	
	public function update_category($cname,$cdes,$id){
        $update=$this->db->query("update tbl_category set cat_name='$cname',cat_des='$cdes' where cat_id='$id'");
        return $update;
    }
	
	public function view_panel($pd){
		$view_panel=$this->db->query("select * from tbl_admin where id='$pd'");
		return $view_panel;
	}
	
	public function add_image($caption,$pic){
		$add_image=$this->db->query("INSERT INTO `tbl_gallery`(`caption`,`date`,`image`) VALUES ('$caption',NOW(),'$pic')");
		return $add_image;
	}
	
	public function view_gallery(){
		$view_gallery=$this->db->query("select * from tbl_gallery");
		return $view_gallery;
	}
	
	public function delete_image($id){
		$delete=$this->db->query("delete from tbl_gallery where id='$id'");
		return $delete;
	}
	
	public function add_country($cname,$pic){
		$add_country=$this->db->query("INSERT INTO `tbl_country`(`country_name`, `image`, `create_date`) VALUES ('$cname','$pic',NOW())");
		return $add_country;
	}
	
		public function check_country($cname){
	$check_country=$this->db->query("select * from tbl_country where country_name='$cname'");
	return $check_country;
	}
	
	public function view_country(){
		$view_country=$this->db->query("select * from tbl_country");
		return $view_country;
	}
	
	public function delete_country($id){
		$delete=$this->db->query("delete from tbl_country where id='$id'");
		return $delete;
	}
	
	public function update_country($cname,$id){
        $update=$this->db->query("update tbl_country set country_name='$cname' where id='$id'");
        return $update;
    
	}
	
	public function edit_country($id){
        $edit=$this->db->query("select * from tbl_country where id='$id'");
        return $edit;
    }
	
	public function add_destination($title,$des,$one,$pic){
		$add_destination=$this->db->query("insert into tbl_des(post_title,post_des,country_id,date,image)values('$title','$des','$one',NOW(),'$pic')");
		return $add_destination;
		
	}
	
	public function dlt_destination($id){
		$delete=$this->db->query("delete from tbl_des where post_id='$id'");
		return $delete;
		
	}

	
	public function view_destination(){
		$delete=$this->db->query("select * from tbl_des inner join tbl_country where tbl_country.id=tbl_des.country_id");
		return $delete;
		
	}

		public function check_course($cname){
	$check_course=$this->db->query("select * from tbl_course where course_name='$cname'");
	return $check_course;
	}
	
	public function add_course($cname,$pic){
		$add_course=$this->db->query("INSERT INTO `tbl_course`(`course_name`, `image`, `date`) VALUES ('$cname','$pic',NOW())");
		return $add_course;
	}

	public function view_course(){
		$view_course=$this->db->query("select * from tbl_course");
		return $view_course;
	}
	
	public function delete_course($id){
		$delete=$this->db->query("delete from tbl_course where id='$id'");
		return $delete;
	}

	public function add_course_details($title,$des,$one,$pic){
		$add_course_details=$this->db->query("insert into tbl_course_details(post_title,post_des,country_id,date,image)values('$title','$des','$one',NOW(),'$pic')");
		return $add_course_details;
		
	}
	
		public function course_details($title,$des,$one,$pic){
		$course_details=$this->db->query("insert into tbl_course_details(post_title,post_des,course_id,date,image)values('$title','$des','$one',NOW(),'$pic')");
		return $course_details;
		
	}

	public function testimonial($name,$ins,$edu,$country,$dis,$pic){
		$testimonial=$this->db->query("INSERT INTO `testimonial`(`name`, `ins`, `education`, `country`, `discription`, `image`, `date`) VALUES ('$name','$ins','$edu','$country','$dis','$pic',NOW())");

		return $testimonial;
	}

	public function view_testimonial(){
		$view_testimonial=$this->db->query("select * from testimonial");
		return $view_testimonial;
	}

public function recent_post(){
		$recent_post=$this->db->query("select * from tbl_post 
left join tbl_admin on tbl_admin.id = tbl_post.admin_id 
left join tbl_user on tbl_user.id = tbl_post.user_id order by post_id desc limit 3");
		return $recent_post;
	}


	public function view_course_details(){
		$view_course_details=$this->db->query("select * from tbl_course_details inner join tbl_course where tbl_course.id=tbl_course_details.course_id");

		return $view_course_details;
	}

	public function dlt_course($id){
		$dlt_course=$this->db->query("delete from tbl_course_details where post_id='$id'");
		return $dlt_course;

		
	}

	public function edit_course_details($id){
		$edit_course_details=$this->db->query("select * from tbl_course_details where post_id='$id'");
		return $edit_course_details;
	}

	public function update_course_details($title,$category,$des,$filename,$id){
		$update_course_details=$this->db->query("UPDATE `tbl_course_details` SET `post_title`='$title',`post_des`='$des',`course_id`=$category,`date`=NOW(),`image`='$filename' WHERE post_id = '$id'");

		return $update_course_details;
	}

	public function add_service($title,$dis,$filename){
		$add_service=$this->db->query("INSERT INTO `tbl_service`( `name`, `discription`, `image`, `date`) VALUES ('$title','$dis','$filename',NOW())");
		return $add_service;
	}

	public function file_upload($title,$filename2,$filename){
		$file_upload=$this->db->query("INSERT INTO `tbl_file`(`title`,image, `filename`, `uploaded_date`) VALUES ('$title','$filename2','$filename',NOW())");
		return $file_upload;
	}

	function view_upload(){
		$view_upload=$this->db->query("select * from tbl_file");
		return $view_upload;
	}

	public function del_file($id){
		$del_file=$this->db->query("delete from tbl_file where id='$id'");
		return $del_file;
	}

    public function user_login($email){
//	    var_dump("select * from tbl_user where email='$email'");
        $login=$this->db->query("select * from tbl_user where email='$email'");
        return $login ;
    }

    public function view_user(){
	    $view_user=$this->db->query("select * from tbl_user");
	    return $view_user;
    }

    public function applied_students(){
	    $applied=$this->db->query("select * from tbl_apply");
	    return $applied;
    }

    public function add_event($title,$des,$venue,$date,$time,$filename){
	    $add_event=$this->db->query("INSERT INTO `tbl_events`(`event_title`, `event_des`, `event_venue`, `event_date`, `event_time`, `image`) VALUES ('$title','$des','$venue','$date','$time','$filename')");
	    return $add_event;
    }

    public function view_event(){
	    $view_event=$this->db->query("select * from tbl_events order by event_date ASC ");
	    return $view_event;
    }

    public function dlt_event($id){
	    $dlt_event=$this->db->query("delete from tbl_events where id='$id'");
	    return $dlt_event;
    }

    public function edit_event($id){
	    $edit_event=$this->db->query("select * from tbl_events where id='$id'");
	    return $edit_event;
    }

    public function update_event($id,$title,$des,$venue,$date,$time,$filename){
	    $update=$this->db->query("update tbl_events set event_title='$title',event_des='$des',event_venue='$venue',event_date='$date',event_time='$time',image='$filename' where id='$id'");
	    return $update;
    }

    public function add_advice($title,$dis,$filename){
        $add_advice=$this->db->query("INSERT INTO `tbl_advice`( `name`, `des`, `image`, `date`) VALUES ('$title','$dis','$filename',NOW())");
        return $add_advice;
    }

    public function view_advice(){
	    $view_advice=$this->db->query("select * from tbl_advice");
	    return  $view_advice;
    }

    public function delete_advice($id){
	    $delete_advice=$this->db->query("delete from tbl_advice where id ='$id'");
	    return $delete_advice;
    }

    public function edit_advice($id){
	    $edit=$this->db->query("select * from tbl_advice where id='$id'");
	    return $edit;
    }

    public function update_advice($id,$title,$dis,$filename){
	    $update=$this->db->query("update tbl_advice set name='$title',des='$dis',image='$filename' where id='$id'");
	    return $update;

    }

    public function add_visa($title,$dis,$filename){
        $add_visa=$this->db->query("INSERT INTO `tbl_visa`( `name`, `des`, `image`, `date`) VALUES ('$title','$dis','$filename',NOW())");
        return $add_visa;
    }

    public function view_visa(){
        $view_visa=$this->db->query("select * from tbl_visa");
        return  $view_visa;
    }

    public function delete_visa($id){
        $delete_visa=$this->db->query("delete from tbl_visa where id ='$id'");
        return $delete_visa;
    }

    public function edit_visa($id){
        $edit=$this->db->query("select * from tbl_visa where id='$id'");
        return $edit;
    }
    public function update_visa($id,$title,$dis,$filename){
        $update=$this->db->query("update tbl_visa set name='$title',des='$dis',image='$filename' where id='$id'");
        return $update;

    }

    public function delete_testimonial($id){
        $delete_testimonial=$this->db->query("delete from testimonial where id ='$id'");
        return $delete_testimonial;
    }

    public function add_about($des,$filename){
	    $about=$this->db->query("INSERT INTO `tbl_about`(`des`, `image`, `date`) VALUES ('$des','$filename',NOW())");
	    return $about;
    }

    public function view_about(){
        $view_about=$this->db->query("select * from tbl_about");
        return  $view_about;
    }

    public function delete_about($id){
        $delete_about=$this->db->query("delete from tbl_about where id ='$id'");
        return $delete_about;
    }

    public function edit_about($id){
        $edit=$this->db->query("select * from tbl_about where id='$id'");
        return $edit;
    }

   public function update_about($des,$id){
	    $update_about=$this->db->query("update tbl_about set des='$des' where id='$id'");
	    return $update_about;

   }

    public function add_part($link,$filename){
	    $add_part=$this->db->query("INSERT INTO `tbl_part`( `link`, `image`) VALUES ('$link','$filename')");
	    return $add_part;
    }
    public function view_service(){
    	$view=$this->db->query("select * from tbl_service");
    	return $view;
    }

     public function delete_service($id){
        $delete_service=$this->db->query("delete from tbl_service where id ='$id'");
        return $delete_service;
    }
    public function edit_service($id){
    	$edit=$this->db->query("select * from tbl_service where id='$id'");
    	return $edit;
    }

  public function update_service($id,$title,$dis,$filename){
	    $update=$this->db->query("update tbl_service set name='$title',discription='$dis',image='$filename' where id='$id'");
	    return $update;

    }

     public function add_ads($link,$filename){
	    $add_ads=$this->db->query("INSERT INTO `tbl_ads`( `link`, `image`, `date`) VALUES ('$link','$filename',NOW())");
	    return $add_ads;
    }

    public function view_part(){
    	$view=$this->db->query("select * from tbl_part");
    	return $view;
    }

    public function delete_part($id){
        $delete_part=$this->db->query("delete from tbl_part where id ='$id'");
        return $delete_part;
    }

    public function view_ads(){
    	$view=$this->db->query("select * from tbl_ads");
    	return $view;
    }

    public function delete_ads($id){
        $delete_part=$this->db->query("delete from tbl_ads where id ='$id'");
        return $delete_part;
    }

    public function notice($notice){
	    $insert=$this->db->query("INSERT INTO `tbl_notice`( `description`, `date`) VALUES ('$notice',NOW())");
	    return $insert;
    }

    public function view_notice(){
	    $view=$this->db->query("select * from tbl_notice");
	    return $view;
    }

    public function delete_notice($id){
        $delete_notice=$this->db->query("delete from tbl_notice where id ='$id'");
        return $delete_notice;
    }
    
     public function forgot($email){
        $forgot=$this->db->query("select id from tbl_user where email='$email'");
        return $forgot;
        
    }
    
     public function update_token($email,$str){
        $update_token=$this->db->query("update tbl_user set token='$str' where email='$email'");
        return $update_token;
    }
    public function check_token(){
	$check_token=$this->db->query("select token from tbl_user where email='".$_GET['email']."'");
	return $check_token;
	}
	
	public function password(){
	    $password=$this->db->query("select id from tbl_user where email='".$_GET['email']."'and token='".$_GET['token']."'");
	    return $password;
	}
    
    public function update_password($hasspass){
	    $update_password=$this->db->query("update tbl_user set token='',password='$hasspass' where email='".$_GET['email']."'");
	   return $update_password;
	}

}

?>