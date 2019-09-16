<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['goToAvailableCar']))
	{
		$_SESSION['client_date']=$_POST['from_date'];
		$_SESSION['client_time']=$_POST['from_time'];
		$_SESSION['tripID']=$_POST['tripID'];
		$_SESSION['fromPlace'] =$_POST['fromPlace'];
		$_SESSION['toPlace']=$_POST['toPlace'];
		//store status into the session
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'The Request has been sent succcessfully!';
					//set redirect url
					$redirectURL .= 'views/available_cars.php';

}
// goPassengerInfo
if(isset($_POST['goPassengerInfo']))
{
				$_SESSION['tripID']=$_POST['tripID'];
				$sessData['status']['type'] = 'success';
				$sessData['status']['msg'] = 'The Request has been sent succcessfully!';
				//set redirect url
				$redirectURL .= 'views/registration.php';
}
// delete
if(isset($_POST["delete"]) )
{
            $tblName='admin';
            $Condition = array( 'adminID'=> $_POST['ID'] ) ;

            $delete = $db->delete($tblName,$Condition);
            if($delete){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Operation done successfuly!';
            }
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
            }
}

$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
