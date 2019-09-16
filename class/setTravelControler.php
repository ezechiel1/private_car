<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['setNewTravel']))
	{
			$tblName='set_travel';
				$Data = array
				(
          'from_place' => $_POST['from_place'],
					'destination_place' => $_POST['to_place'],
					'from_date' => $_POST['from_date'],
					'from_time' => $_POST['from_time'],
					'available_seats' => $_POST['available_seats'],
					'travel_fees' => $_POST['travel_fees'],
					'driver_id' => $_POST['driverID'],
					'car_id' => $_POST['car_id'],
					'status' => 0,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Your New Travel has been registered successfully ! ';
					//set redirect url
					$redirectURL .= 'views/newtravel.php';
				}
				else{
					$sessData['status']['type']='error';
					$sessData['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/newtravel.php?st='.$_POST['from_time'];
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'driver';
            //insert data
            $Data = array
            (
							'f_name' => $_POST['f_name'],
							'l_name' => $_POST['l_name'],
							'email' => $_POST['email'],
							'phone_number' => $_POST['phone'],
							'address' => $_POST['address'],
							'date_of_birth' => $_POST['date_of_birth'],
							'password' => $_POST['password'],
							'permit_id' => $_POST['permit_id']
            );
            $condition=array('driver_id' => $_POST['ID'], );
            $update = $db->update($tblName, $Data,$condition);
            if($update){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'The modification has been saved successfuly!';
								//set redirect url
								$redirectURL .= '../views/editprofile.php';
            }
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
								//set redirect url
								$redirectURL .= '../views/editprofile.php';
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
