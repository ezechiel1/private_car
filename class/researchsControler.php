<?php
	session_start();
	//load and initialize database class
	require_once '../core/db.php';
	$db = new DB();
	require_once '../core/extra.php';
	$extra = new Extra();
	//set default redirect url
	$redirectURL = '../../'.$db->url;
	if(isset($_POST['register']))
	{
			$tblName=$_POST['research_table'];
			$attachment=$extra->uploadPicture('../dist/docs/research/',$_FILES['attachment']);
			if($attachment)
			{
				$Data = array
				(
          'book_name' => $_POST['name'],
					'author_name' => $_POST['author_name'],
					'author_continent' => $_POST['author_continent'],
					'author_country' => $_POST['author_country'],
					'registered_by' => $_SESSION['ID'],
					'attachment' => $attachment,
					'total_download' => 0,
					'c_date' => $db->showDate('datetime')
				 );
				$insert = $db ->insert($tblName, $Data);
				if($insert)
				{
					$sessData['status']['type'] = 'success';
          $sessData['status']['msg'] = 'New Research Content has  been registed successfully!';
				}
				else{
					$sessData['status']['type']='error';
					$sessData['status']['type']='Some  Errors occured! Please try again later!';
				}
			}
			else{
				$sessData['status']['type']='error';
				$sessData['status']['type']='Fail to upload the Attachment File!';
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
            $tblName=$_POST['research_table'];
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
$redirectURL .= 'views/u/datas.php?request='.$_POST['rID'];
//store status into the session
$_SESSION['sessData'] = $sessData;
//redirect to the list page
header("Location:".$redirectURL);

?>
