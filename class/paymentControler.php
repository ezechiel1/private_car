<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	require_once '../core/extra.php';
	$extra = new Extra();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register_payment']))
	{
			$tblName='payment';
			$bankslip=$extra->uploadPicture('../img/bankSlip/',$_FILES['bankslip']);
			if($bankslip)
			{
				$Data = array
				(
					'bank_name' => $_POST['bank_name'],
          			'amount' => $_POST['amount_paid'],
					'date' => $_POST['date_of_payment'],
					'passenger_id' => $_SESSION['passengerID'],
					'slip_number' => $_POST['BankSlipNumber'],
					'slip_picture' => $bankslip,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db->insert($tblName, $Data);
				if($insert)
				{
					//Regiter in  travel
					$tData=array(
						'trip_id'=>$_SESSION['confirm_tripID'], 
						'passenger_id'=> $_SESSION['passengerID'], 
						'payment_id'=> $db->getLastID('payment', 'payment_id'),
						'c_date' => $db->showDate('datetime')
					);
					$register = $db->insert('travel', $tData);
					if($register){
						
						$sessData['status']['type'] = 'success';
	          			$sessData['status']['msg'] = 'Your Request has been done successfully!';
						//set redirect url
						$redirectURL .= 'views/followup.php';
					}else{
						$sessData['status']['type']='error';
						$sessData['status']['type']='Some  Errors occured! Please try again later!';
						//set redirect url
						$redirectURL .= 'views/payment.php';
					}
					
				}
				else{
					$sessData['status']['type']='error';
					$sessData['status']['type']='Some  Errors occured! Please try again later!';
					//set redirect url
					$redirectURL .= 'views/payment.php';
				}
			}
			else{
				$sessData['status']['type']='error';
				$sessData['status']['type']='Fail to upload the Picture of your bankslip!';
				//set redirect url
				$redirectURL .= 'views/payment.php';
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
