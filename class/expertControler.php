<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register']))
	{
			$tblName='experts';
				$Data = array
				(
					'memberID' => 'C00001',
          'fname' => $_POST['fname'],
					'lname' => $_POST['lname'],
					'email' => $_POST['email'],
					'phone' => $_POST['phone'],
					'continent' => 'America',
					'country' => $_POST['country'],
					'province' => $_POST['province'],
					'district' => $_POST['district'],
					'location' => $_POST['address'],
					'nationality' => $_POST['nationality'],
					'passport_number' => $_POST['passport_number'],
					'expertise' => $_POST['expertise'],
					'specialisationID' => $_POST['specialisation'],
					'areaID' => $_POST['area'],
					'job_title' => $_POST['job_title'],
					'about_offer' => '...',
					'status' => 0,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db ->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Your Account has been created successfuly! A confirmation message is sent in your Email.';
					//set redirect url
					$redirectURL .= '../Expert-Account';
				}
				else{
					$getMessage['status']['type']='error';
					$getMessage['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= '../Expert-Account-Error';
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'experts';
            //insert data
            $Data = array
            (
							'memberID' => 'C00001',
		          'fname' => $_POST['fname'],
							'lname' => $_POST['lname'],
							'email' => $_POST['email'],
							'phone' => $_POST['phone'],
							'continent' => 'America',
							'country' => $_POST['country'],
							'province' => $_POST['province'],
							'district' => $_POST['district'],
							'location' => $_POST['address'],
							'nationality' => $_POST['nationality'],
							'passport_number' => $_POST['passport_number'],
							'expertise' => $_POST['expertise'],
							'specialisationID' => $_POST['specialisation'],
							'areaID' => $_POST['area'],
							'job_title' => $_POST['job_title'],
							'about_offer' => '...',
							'status' => 0
            );
            $condition=array('ID' => $_POST['ID'], );
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
if(isset($_POST["delete"]))
{
            $tblName='experts';
            $Condition = array( 'ID'=> $_POST['ID'] ) ;

            $delete = $db->delete($tblName,$Condition);
            if($delete){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Operation done successfuly!';
								//set redirect url
								$redirectURL .= 'views/u/experts.php';
						}
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
								//set redirect url
								$redirectURL .= 'views/u/experts.php';
            }
}
//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
