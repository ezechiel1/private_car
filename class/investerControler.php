<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register']))
	{
			$tblName='investers';
				$Data = array
				(
					'memberID' => 'I00001',
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
					'companyID' => 1,
					'min' => $_POST['invest_min'],
					'max' => $_POST['invest_max'],
					'areaID' => $_POST['area'],
					'request' => $_POST['request_description'],
					'job_title' => $_POST['job_title'],
					'about_offer' => '...',
					'status' => 0,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db ->insert($tblName, $Data);
				if($insert)
				{
					// //Register Company
					// $inser=$db->insert('company',array('company_name'=>$_POST['company_name'], 'company_co'))
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Your Account has been created successfuly! A confirmation message is sent in your Email.';
					//set redirect url
					$redirectURL .= '../Invester-Account';
				}
				else{
					$getMessage['status']['type']='error';
					$getMessage['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= '../Invester-Account-Error';
				}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = 'investers';
            //insert data
            $Data = array
            (
							'memberID' => $_POST['memberID'],
		          'fname' => $_POST['fname'],
							'lname' => $_POST['lname'],
							'email' => $_POST['email'],
							'phone' => $_POST['phone'],
							'continentID' => $_POST['continent'],
							'countryID' => $_POST['country'],
							'province' => $_POST['province'],
							'district' => $_POST['district'],
							'location' => $_POST['location'],
							'nationality' => $_POST['nationality'],
							'passport_number' => $_POST['passport_number'],
							'min' => $_POST['min'],
							'max' => $_POST['max'],
							'areaID' => $_POST['areaID'],
							'request' => $_POST['request'],
							'job_title' => $_POST['job_title'],
							'about_offer' => $_POST['about_offer'],
							'status' => $_POST['status']
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
if(isset($_POST["delete"]) )
{
            $tblName='investers';
            $Condition = array( 'ID'=> $_POST['ID'] ) ;

            $delete = $db->delete($tblName,$Condition);
            if($delete){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Operation done successfuly!';
								//set redirect url
								$redirectURL .= 'views/u/investers.php';
						}
            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';
								//set redirect url
								$redirectURL .= 'views/u/investers.php';
            }
}
//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
