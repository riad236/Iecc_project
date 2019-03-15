<?php
class user extends connection {
	public function view_country(){
		$view_country=$this->db->query("select * from tbl_country limit 3");
		return $view_country;
	}
	
	public function view_country2(){
		$view_country2=$this->db->query("select * from tbl_country order by id DESC limit 5");
		return $view_country2;
	}
	
	
	
	public function gallery(){
		$gallery=$this->db->query("select * from tbl_gallery order by date");
		return $gallery;
	}
	
	public function view_destination(){
	$view=$this->db->query("select * from tbl_des inner join tbl_country where tbl_des.country_id=tbl_country.id and tbl_country.id='".$_GET['country']."'");
	return $view;
	}
	
	public function view_course_details(){
		$view=$this->db->query("select * from tbl_course_details inner join tbl_course where tbl_course_details.course_id=tbl_course.id and tbl_course.id='".$_GET['course']."'");
		return $view;
	}

	public function view_course(){
		$view_course=$this->db->query("select * from tbl_course");
		return $view_course;
	}

	public function apply($first_name,$last_name,$email,$country_code,$phone,$country,$course){
		$apply=$this->db->query("INSERT INTO `tbl_apply`(`first_name`, `last_name`, `email`, `country_code`, `mobile_number`, `destination`, `course`, `date`) VALUES ('$first_name','$last_name','$email','$country_code','$phone','$country','$course',NOW())");

		return $apply;
	}

	public function view_service(){
		$view_service=$this->db->query("select * from tbl_service limit 3");
		return $view_service;
	}

	public function view_service2(){
		$view_service2=$this->db->query("select * from tbl_service order by id DESC limit 5");
		return $view_service2;
	}

	public function service($id){
		$service=$this->db->query("select * from tbl_service where id='$id'");
		return $service;
	}

	public function course_post($id){
		$course_post=$this->db->query("select * from tbl_course_details where post_id='$id'");
		return $course_post;
	}

    public function study_details($id){
	    $study_details=$this->db->query("select * from tbl_des where post_id = '$id'");
	    return $study_details;
    }

    public function article($id){
        $article=$this->db->query("select * from tbl_post 
left join tbl_admin on tbl_admin.id = tbl_post.admin_id 
left join tbl_user on tbl_user.id = tbl_post.user_id where tbl_post.post_id='$id'");
        return $article;
    }

    public function turncate($text){
        $chars = 400;

        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }

    public function sign_up($fname,$lname,$number,$email,$md5pass){
        $sign_up=$this->db->query("INSERT INTO `tbl_user`(`fname`, `lname`, `number`, `email`,token, `password`,`date`) VALUES ('$fname','$lname','$number','$email','none','$md5pass',NOW())");
        return $sign_up;
    }

    public function view_event(){
	    $event=$this->db->query("select * from tbl_events  order by event_date ASC limit 9");
	    return $event;
    }

    public function turncate2($text){
        $chars = 350;

        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }
    public function advice(){
	    $advice=$this->db->query("select * from tbl_advice limit 3");
	    return $advice;
    }

    public function advice2(){
        $advice2=$this->db->query("select * from tbl_advice order by id DESC limit 5");
        return $advice2;
    }

    public function view_advice($id){
        $view_advice=$this->db->query("select * from tbl_advice where id='$id'");
        return  $view_advice;
    }

    public function visa(){
        $visa=$this->db->query("select * from tbl_visa limit 3");
        return $visa;
    }

    public function visa2(){
        $visa2=$this->db->query("select * from tbl_visa order by id DESC limit 5");
        return $visa2;
    }

    public function view_visa($id){
        $view_visa=$this->db->query("select * from tbl_visa where id='$id'");
        return  $view_visa;
    }

    public function view_part(){
	    $view_part=$this->db->query("select * from tbl_part");
	    return $view_part;
    }
    public function view_about(){
        $view_about=$this->db->query("select * from tbl_about limit 1");
        return  $view_about;
    }

    public function event($id){
        $article=$this->db->query("select * from tbl_events where id='$id'");
        return $article;
    }

    public function view_add(){
        $ads=$this->db->query("select * from tbl_ads order by id DESC limit 1");
        return $ads;
    }
    public function add_post($title,$des,$filename){
        $post=$this->db->query("insert into tbl_post(post_title,post_des,image,admin_id,user_id,post_category,post_date)values('$title','$des','$filename','0','".$_SESSION['id']."','none',NOW())");
        return $post;
    }

    public function paginition($text){

        $paginition=$this->db->query("select * from tbl_post 
left join tbl_admin on tbl_admin.id = tbl_post.admin_id 
left join tbl_user on tbl_user.id = tbl_post.user_id".$text."");
        return $paginition;
    }



    public function update_post($title,$des,$id){
        $update_post=$this->db->query("update tbl_post set post_title='$title',post_des='$des'where post_id='$id'");
        return $update_post;
    }

    public function delete_post($pid){
        $Delete=$this->db->query("delete from tbl_post where post_id='$pid'");
        return $Delete;
    }

    public function search($keyword){
	    $search=$this->db->query("select * from tbl_post where post_title like '%".$keyword."%' or post_des like '%".$keyword."%'");
	    return $search;

    }

}



?>