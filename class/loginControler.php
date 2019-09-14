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
                  'email' => $_POST['email'],
                  'password' => $_POST['password']
                );
          $driver = $db->login('driver',$condition1);
          if(!empty($driver)): //Driver
             foreach($driver as $user):
                    $_SESSION['driverID']=$user['driver_id'];
                    $_SESSION['driverName'] = $user['f_name']." ".$user['l_name'];
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg']  = 'Welcome';

                    //set redirect url
                    $redirectURL = '../views/welcomeDriver.php';

              endforeach;
          else:
               $sessData['status']['type'] = 'error';
               $sessData['status']['msg'] = 'Password or Email is Invalid!';
               //set redirect url
               $redirectURL = '../views/driver.php';
          endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the list page
    header("Location:".$redirectURL);
}
exit();
?>
