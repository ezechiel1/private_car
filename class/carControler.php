<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	require_once '../core/extra.php';
	$extra = new Extra();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['regitercar']))
	{
			$tblName='car';
			$carPicture=$extra->uploadPicture('../img/cars/',$_FILES['carpicture']);
			if($carPicture)
			{
				$Data = array
				(
          'car_name' => $_POST['carname'],
					'car_model' => $_POST['carmodel'],
					'car_picture' => $carPicture,
					'car_seat' => $_POST['nb_seats'],
					'car_plate' => $_POST['plate_number'],
					'driver_id' => 1,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'Your Request has been done successfully!';
					//set redirect url
					$redirectURL .= 'views/welcomeDriver.php';
				}
				else{
					$sessData['status']['type']='error';
					$sessData['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/newCar.php';
				}
			}
			else{
				$sessData['status']['type']='error';
				$sessData['status']['type']='Fail to upload the Picture of Car!';
				//set redirect url
				$redirectURL .= 'views/newCar.php';
			}
}
// update
if(isset($_POST['update']))
{
    //check if the form is not empty
     $tblName = $_POST['data_table'];
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
            $tblName=$_POST['data_table'];
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

//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
