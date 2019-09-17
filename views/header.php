<?php session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="Author" content="Brad Traversy">

	<title>private car | welcome</title>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../csss/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../csss/mdb.css">
	<!-- PNotify -->
  <link href="../pnotify/dist/pnotify.css" rel="stylesheet">
  <link href="../pnotify/dist/pnotify.buttons.css" rel="stylesheet">
  <link href="../pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
	<style>
	/* pnotify */
	.callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
			background-color: #e8491d !important;
			border: none;
			color: white;
			/* font-family: serif; */
	}
	</style>
</head>
<?php
if(!isset($_SESSION)): session_start(); $_SESSION['sessData']='';
elseif(isset($_SESSION['sessData']) and $_SESSION['sessData']!=''):
?>
<body onpageshow="new PNotify({
                title: 'Notification',
                text: '<?php echo $sssData['status']['msg'];?>',
                type: 'success',
                styling: 'bootstrap3'
            });"></body>
<?php endif; ?>
<body>
	<header>

          <div class="container">
             <div id ="branding">
                <h1> <span id="highlight"> PRIVATE </span> CARS </h1>
              </div>
             <nav>
                  <ul>
                     <li> <a href="../index.php"><strong> Home </strong></a></li>
                     <li> <a href="about.php"><strong>About</strong></a></li>
                     <li> <a href="driver.php"><strong>Driver</strong></a></li>
                     <li> <a href=""><strong>Developpers</strong></a></li>
                  </ul>
            </nav>
          </div>
	</header>
