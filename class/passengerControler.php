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
          			'f_name' => $_POST['f_name'],
					'l_name' => $_POST['l_name'],
					'surname' => $_POST['s_name'],
					'email' => $_POST['email'],
					'phone_number' => $_POST['phone'],
					'address' => $_POST['address'],
					'gender' => $_POST['gender'],
					'age' => $_POST['age'],
					'password' =>sha1($_POST['password']),
					'c_date' => $db->showDate('datetime')
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
					'f_name' => $_POST['f_name'],
					'l_name' => $_POST['l_name'],
					'surname' => $_POST['s_name'],
					'email' => $_POST['email'],
					'phone_number' => $_POST['phone'],
					'address' => $_POST['address'],
					'gender' => $_POST['gender'],
					'age' => $_POST['age'],
					'password' => $_POST['password'],
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
