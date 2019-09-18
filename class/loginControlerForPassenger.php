<?php
//start session
session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
//set default redirect url
$redirectURL = '../../'.$db->url;

if(isset($_POST['login'])){
  if(!empty($_POST['email']) && !empty($_POST['password']))
    {
                $condition1 =array(
                  'passenger_email' => $_POST['email'],
                  'passenger_password' => $_POST['password']
                );
          $passenger = $db->login('passenger',$condition1);
          if(!empty($passenger)): //Paasenger
             foreach($passenger as $user):
                    $_SESSION['paseengerID']=$user['passenger_id'];
                    $_SESSION['passengerName'] = $user['passenger_fname']." ".$user['passenger_lname'];
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg']  = 'Welcome';

                    //set redirect url
                    $redirectURL = '../views/followup.php';

              endforeach;
          else:
               $sessData['status']['type'] = 'error';
               $sessData['status']['msg'] = 'Password or Email is Invalid!';
               //set redirect url
               $redirectURL = '../views/login.php';
          endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the list page
    header("Location:".$redirectURL);
}
if(isset($_POST['login'])){
  if(!empty($_POST['email']) && !empty($_POST['password']))
    {
                $condition1 =array(
                  'passenger_email' => $_POST['email'],
                  'passenger_password' =>sha1($_POST['password'])
                );
          $passenger = $db->login('passenger',$condition1);
          if(!empty($passenger)): //Paasenger
             foreach($passenger as $user):
                    $_SESSION['passengerID']=$user['passenger_id'];
                    $_SESSION['passengerName'] = $user['passenger_fname']." ".$user['passenger_lname'];
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg']  = 'Welcome';

                    //set redirect url
                    $redirectURL = '../views/followup.php';

              endforeach;
          else:
               $sessData['status']['type'] = 'error';
               $sessData['status']['msg'] = 'Password or Email is Invalid!';
               //set redirect url
               $redirectURL = '../views/login.php';
          endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the list page
    header("Location:".$redirectURL);
}
exit();
?>
