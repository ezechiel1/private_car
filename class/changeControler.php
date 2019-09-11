<?php
//start session
session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
//set default redirect url
$redirectURL = '../../'.$db->url;

if(isset($_POST['change'])){
  if(!empty($_POST['npassword']) && !empty($_POST['cpassword']))
    {
            //Get tHE session
            if($_SESSION['category']==''):$redirectURL .= '../change.php';
            elseif($_POST['npassword']!=$_POST['cpassword']):
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Les deux Mot de Passe ne correspondent pas!';
                //set redirect url
                $redirectURL = '../views/change.php';
            else:
                    $tblName = 'admin';
                    $userData = array
                    (
                        'admin_password' => sha1($_POST['npassword']),
                        'admin_pin' => 1
                    );
                    $condition=array('adminID' => $_SESSION['ID'] );

                //Update the table new password
                $update = $db->update($tblName, $userData, $condition);
                if($update){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'Operation done successfuly!';
                //set redirect url
                    $redirectURL .= '../index.php';

                }
                else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Some  Errors occured! Please try again later!';

                    //set redirect url
                    $redirectURL .= '../views/change.php';
                }

            endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;

    //redirect to the list page
    header("Location:".$redirectURL);
}
exit();
?>
