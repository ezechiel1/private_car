<?php session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
if($_SESSION['driverID']=='') header('location: driver.php'); ?>
<?php
$driverID=$_SESSION['driverID'];
$tblName='driver';
$condition = array(
										'Order by' => 'driver_id asc',
										'where' => array('driver_id' => $driverID)
									);
$inDriver = $db->getRows($tblName,$condition);
if(!empty($inDriver)):
	foreach($inDriver as $showDriver):
				$driverName = $showDriver['f_name'].' '.$showDriver['l_name'];
				$driverPhone = $showDriver['phone_number'];
        $profile=$showDriver['profile_picture'];
				$dID= $showDriver['driver_id'];
	endforeach;
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
                     <li> <a href="editprofile.php"><strong> Profile </strong></a></li>
                     <li> <a href="editcar.php"><strong>Car</strong></a></li>
                     <li> <a href="newtravel.php"><strong>New travel</strong></a></li>
                     <!-- <li> <a href="view_travel_passengers.php"><strong>Passengers</strong></a></li> -->
                     <li> <a href="payment_report.php"><strong>Payment</strong></a></li>
                     <li> <a href="travel_follow_up.php"><strong>Follow-Up</strong></a></li>
                     <li> <a href="logout.php"><strong>Logout</strong></a></li>
                  </ul>
            </nav>
          </div>
	</header>
  <script type="text/javascript">
    function handleImageUpload() 
    {

          var image = document.getElementById("upload").files[0];

          var reader = new FileReader();

          reader.onload = function(e) {
            document.getElementById("display-image").src = e.target.result;
          }

          reader.readAsDataURL(image);

      } 
  </script>
