<?php 
//file config.php su dung de luu thong tin ket noi
	
if(isset($_GET['send_notification'])){
   send_notification ();
}
function send_notification()
{

	//echo 'Hello';
define( 'API_ACCESS_KEY', 'AAAAvRGYdF8:APA91bHwYC9fdEDr-uw5OpecsXeTPIkcpMibyPxuxIQpig7Kw0CjC_7xG3RhnawO2lVk0AyCkhDD4hq6cggQ2eMgg0ZmPOdvCz5xuF1CljnrgmMEN6klFBtFzpIkSQyYV1uNj2LuvdRZ');
 //   $registrationIds = ;
#prep the bundle
$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "php31_fashion2";
	$db = mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($db,"UTF8");
	$sql = "select c_fullname from tbl_user";
			//$result = mysqli_query($db,$sql) or die("Lỗi!");
			$result = mysqli_query($db,$sql);
			$arr = array();
			$rows2 = mysqli_fetch_object($result);
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
     $msg = array
          (
		'body' 	=> $rows2->c_fullname,
		'title'	=> 'PTIT Quiz',
             	
          );
	$fields = array
			(
				'to'		=> $_REQUEST['token'],
				'notification'	=> $msg
			);
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		echo $result;
		curl_close( $ch );
}
 ?>