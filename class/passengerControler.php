<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['registerpassenger']))
	{
			$tblName='passenger';
				$Data = array
				(
          			'passenger_fname' => $_POST['f_name'],
					'passenger_lname' => $_POST['l_name'],
					'passenger_surname' => $_POST['s_name'],
					'passenger_email' => $_POST['email'],
					'passenger_phone' => $_POST['phone'],
					'passenger_address' => $_POST['address'],
					'passenger_gender' => $_POST['gender'],
					'passenger_age' => $_POST['age'],
					'passenger_password' =>sha1($_POST['password']),
					'passenger_c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          			$sessData['status']['msg'] = 'you have been registerd successfuly! ';
					$_SESSION['passenger_confirm_id'] = $db->getLastID('passenger','passenger_id');
					//set redirect url
					$redirectURL .= 'index.php';
				}
				else{
					$getMessage['status']['type']='error';
					$getMessage['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/registration.php';
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'passenger';
            //insert data
            $Data = array
            (
					'passenger_fname' => $_POST['f_name'],
					'passenger_lname' => $_POST['l_name'],
					'passenger_surname' => $_POST['s_name'],
					'passenger_email' => $_POST['email'],
					'passenger_phone' => $_POST['phone'],
					'passenger_address' => $_POST['address'],
					'passenger_gender' => $_POST['gender'],
					'passenger_age' => $_POST['age'],
					'passenger_password' =>sha1($_POST['password']),
					'passenger_c_date' => $db->showDate('datetime')
            );
            $condition=array('passenger_id' => $_POST['ID'], );
            $update = $db->update($tblName, $Data,$condition);
            if($update){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'The modification has been saved successfuly!';
								//set redirect url
								$redirectURL .= 'index.php';
            }
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
								//set redirect url
								$redirectURL .= 'index.php';
            }
}
// delete
if(isset($_POST["delete"]) )
{
            $tblName='passenger';
            $Condition = array( 'passenger_id'=> $_POST['ID'] ) ;

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
