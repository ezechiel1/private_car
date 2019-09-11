<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register']))
	{
			$tblName='admin';
				$Data = array
				(
          'admin_fname' => $_POST['fname'],
					'admin_lname' => $_POST['lname'],
					'admin_email' => $_POST['email'],
					'admin_phone' => $_POST['phone'],
					'admin_country' => $_POST['country'],
					'admin_location' => $_POST['location'],
					'admin_status' => $_POST['status'],
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db ->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Admin registered successfuly! The default password has been sent in your Email.';
				}
				else{
					$getMessage['status']['type']='error';
					$getMessage['status']['type']='Some  Errors occured! Please try again later!';
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'admin';
            //insert data
            $Data = array
            (
							'admin_fname' => $_POST['fname'],
							'admin_lname' => $_POST['lname'],
							'admin_email' => $_POST['email'],
							'admin_phone' => $_POST['phone'],
							'admin_country' => $_POST['country'],
							'admin_location' => $_POST['location'],
							'admin_status' => $_POST['status']
            );
            $condition=array('adminID' => $_POST['adminID'], );
            $update = $db->update($tblName, $Data,$condition);
            if($update){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'The modification has been saved successfuly!';
            }
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
            }
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
//set redirect url
$redirectURL .= 'views/u/admin.php';
//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
