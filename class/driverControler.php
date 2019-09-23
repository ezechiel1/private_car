<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	require_once '../core/extra.php';
	$extra = new Extra();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['registerDriver']))
	{
			$tblName='driver';
				$Data = array
				(
          			'f_name' => $_POST['f_name'],
					'l_name' => $_POST['l_name'],
					'age' => $_POST['age'],
					'gender' => $_POST['gender'],
					'email' => $_POST['email'],
					'phone_number' => $_POST['phone'],
					'address' => $_POST['address'],
					'password' => $_POST['password'],
					'permit_id' => $_POST['permit_id'],
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Driver registered successfuly! ';
					$_SESSION['driver_confirm_id'] = $db->getLastID('driver','driver_id');
					//set redirect url
					$redirectURL .= 'views/newCar.php';
				}
				else{
					$getMessage['status']['type']='error';
					$getMessage['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/newDriver.php';
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'driver';
     if (isset($_FILES['updateProfile'])) {
     	$updateProfile=$extra->uploadPicture('../img/profile/',$_FILES['updateProfile']);
     	if ($updateProfile) {
     		$Data0 = array ('profile_picture' => $updateProfile);
     		$condition0=array('driver_id' => $_POST['ID']);
     		$update0= $db->update($tblName, $Data0,$condition0);	
     	}
     }
            //insert data
            $Data = array
            (
							'f_name' => $_POST['f_name'],
							'l_name' => $_POST['l_name'],
							'age' => $_POST['age'],
							'gender' => $_POST['gender'],
							'email' => $_POST['email'],
							'phone_number' => $_POST['phone'],
							'address' => $_POST['address'],
							'password' => $_POST['password'],
							'permit_id' => $_POST['permit_id']
            );
            $condition=array('driver_id' => $_POST['ID'], );
            $update = $db->update($tblName, $Data, $condition);
            if($update){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'The modification has been saved successfuly!';
								//set redirect url
								$redirectURL .= 'views/editprofile.php';
            }
            else{
                $sesssData['status']['type'] = 'error';
                $sesssData['status']['msg'] = 'Some  Errors occured! Please try again later!';
								//set redirect url
								$redirectURL .= 'views/editprofile.php';
            }
}
// delete
if(isset($_POST["delete"]) )
{
            $tblName='driver';
            $Condition = array( 'driver_id'=> $_POST['ID'] ) ;

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

//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
