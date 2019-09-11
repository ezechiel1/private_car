<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register']))
	{
			$tblName='research';
				$Data = array
				(
          'name' => $_POST['research'],
					'total_content' => 0,
					'registered_by' => $_SESSION['ID'],
					'data_table' => '',
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db ->insert($tblName, $Data);
				if($insert)
				{
					//Create the Table  specific for the created research
					$researhID=$db->getLastID($tblName,'ID');
					$research_table='research_'.$researhID;
					$updat=$db->update($tblName,array('data_table' => $research_table), array('ID' => $researhID));
					$inser=$db->createTableResearch($research_table);

					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'New Research Field has been registered successfully!';
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
     $tblName = 'research';
            //insert data
            $Data = array
            (
							'name' => $_POST['research'],
							'total_content' => 0,
							'registered_by' => 1,
							'research_table' => 'research_1'
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
            $tblName='research';
            $Condition = array( 'ID'=> $_POST['ID'] ) ;

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
$redirectURL .= 'views/u/research.php';
//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
//set redirect url
					$redirectURL .= '../Invester-Account';
