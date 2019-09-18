<?php session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
if($_SESSION['passengerID']=='') header('location: login.php'); ?>
<?php
$passengerID=$_SESSION['passengerID'];
$tblName='passenger';
$condition = array(
										'Order by' => 'passenger_id asc',
										'where' => array('passenger_id' => $passengerID)
									);
$inpassenger = $db->getRows($tblName,$condition);
if(!empty($inpassenger)):
	foreach($inpassenger as $showpassenger):
				$passengerName = $showpassenger['passenger_fname'].' '.$showpassenger['passenger_lname'];
				$passengerPhone = $showpassenger['passenger_phone'];
				$dID= $showpassenger['passenger_id'];
	endforeach;
endif;
//travelid of the logged in passenger
$tblName='travel';
$condition = array(
                    'Order by' => 'travel_id DESC',
                    'where' => array('passenger_id' => $passengerID)
                  );
$trav = $db->getRows($tblName,$condition);
if(!empty($trav)):
  foreach($trav as $gettrav):
        $tripID= $gettrav['trip_id'];
        $travelID=$gettrav['travel_id'];
  endforeach;
  else: $travelID=0; $trip=0;
endif;
//get driver
$tblName='set_travel';
$condition = array(
                    'Order by' => 'trip_id DESC',
                    'where' => array('trip_id' => $tripID)
                  );
$trav = $db->getRows($tblName,$condition);
if(!empty($trav)):
  foreach($trav as $gettrav):
        $driverID= $gettrav['driver_id'];
  endforeach;
  else: $driverID=0; 
endif;

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


  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../cs/style.css" rel="stylesheet">
  <link href="../cs/style-responsive.css" rel="stylesheet">


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
$sssData=array();
$sssData=$_SESSION['sessData'];
if($sssData!=''):
?>
<body onpageshow="new PNotify({
                title: 'Notification',
                text: '<?php echo $sssData['status']['msg'];?>',
                type: 'success',
                styling: 'bootstrap3'
            });">
</body>
<?php endif; ?>
<body>
	<header>

          <div class="container">
             <div id ="branding">
                <h1> <span id="highlight"> PRIVATE </span> CARS </h1>
              </div>
             <nav>
                  <ul>
                     <li> <a href="index.php"><strong>Home</strong></a></li>
                     <li> <a href="followup.php"><strong>Follow-Up</strong></a></li>
                     <li> <a href="logout_passenger.php"><strong>Logout</strong></a></li>
                  </ul>
            </nav>
          </div>
	</header>
