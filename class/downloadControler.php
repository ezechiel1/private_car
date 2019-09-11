<?php
if(isset($_POST['download'])):
  $dir_= $_POST['dir'];
  if(isset($_POST['file_name']) && $_POST['file_name']!=''):
  	$pathFile=$dir_.$_POST['file_name'];
  	header("Content-Type: application/octet-stream");
  	header("Content-Disposition: attachment; filename=".$_POST['file_name']."");
  	header("Content-Length: ".filesize($pathFile));
  	readfile($pathFile);

    //Set Redirect
    $redirectURL = '../../public/research.php?query=';
    header("location:".$redirectURL);
  endif;

endif;
?>
