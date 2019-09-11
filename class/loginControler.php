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
                $condition1 =array
                (
                  'admin_email' => $_POST['email'],
                  'admin_password' => ($_POST['password'])
                );
          $admin = $db->login('admin',$condition1);
          if(!empty($admin)): //Admin
            $count = 0;
            foreach($admin as $user): $count++;
                if($user['admin_status']==0)://if Desactivated
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Your Account is Desactivated. contact the Administrator!';
                    //set redirect url
                    $redirectURL = '../index.php';
                else:
                    $_SESSION['ID']=$user['adminID'];
                    if($user['admin_pin']==0): //when pin is 0
                        if($user['type']==1):$_SESSION['category']='admin';
                        elseif($user['type']==0):$_SESSION['category']='membre';
                        endif;
                        //set redirect url
                        $redirectURL .= '../views/change.php';
                    else:
                        $sessData['status']['type'] = 'success';
                        $sessData['status']['msg']  = 'Welcome';
                        $_SESSION['name'] = $user['admin_fname']."  ".$user['admin_lname'];
                        $log=$db->registerLogIn($_SESSION['ID'], $_SESSION['type']);
                        //set redirect url
                        $redirectURL .= 'views/u/dashboard.php';
                    endif;
                endif;
            endforeach;
            else:
               $sessData['status']['type'] = 'error';
               $sessData['status']['msg'] = 'Password or Email is Invalid!';
               //set redirect url
               $redirectURL = '../index.php';
            endif;
    }
    //store status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the list page
    header("Location:".$redirectURL);
}
exit();
?>
