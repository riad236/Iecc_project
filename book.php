<?php
 // echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
 
 if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
 $url = "http://www.geoplugin.net/json.gp";
$data = array(
        "ip" => $ip        
        );
$query_url = sprintf("%s?%s", $url, http_build_query($data));
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $query_url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
$http_code = curl_getinfo($curl , CURLINFO_HTTP_CODE);
$result = curl_exec($curl);

// header('Content-type: application/json');
// echo $result;
curl_close($curl);


$resonse = json_decode($result);
// var_dump(strtolower($resonse->geoplugin_countryName).".php");

if ( isset( $resonse->geoplugin_countryName) && $resonse->geoplugin_countryName != NULL && $resonse->geoplugin_countryName != "" ) { //if country is found
	if (file_exists(strtolower($resonse->geoplugin_countryName).".php")) { // if the country exists
		header("location:bangladesh-booking.php"); //redirect to the country homepage
	}else{
		header("location:global-booking.php");
	}
}else{ //redirect to global
	header("location:global-booking.php");
}


?>