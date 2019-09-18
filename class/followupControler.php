<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	require_once '../core/extra.php';
	$extra = new Extra();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['send_message']))
	{
			$tblName='comments';
			
			$Data = array
				(
					'passenger_id' => $_POST['passengerID'],
          			'driver_id' => $_POST['driverID'],
					'travel_id' => $_POST['travelID'],
					'message' => $_POST['message'],
					'category' => 0,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          			$sessData['status']['msg'] = 'Your Request has been done successfully!';
					//set redirect url
					$redirectURL .= 'views/followup.php';
				}
				else{
					$sessData['status']['type']='error';
					$sessData['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/followup.php---oya';
				}
			
}


//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
