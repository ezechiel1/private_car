<?php
	include("header.php");
	if($_SESSION['toPlace']=='') header('location: ../index.php');
	$tripID=$_SESSION['tripID'];
	$pDate= $_SESSION['client_date'];
	$pTime= $_SESSION['client_time'];
	$fromPlace=$_SESSION['fromPlace'];
	$toPlace=$_SESSION['toPlace'];

	$availableCars=$db->getAvailableCars($fromPlace, $toPlace, $pDate);
?>

          <style>
          	.md-form label.active {
    		font-size: 1.5rem;}

    		.md-form label {
		    position: absolute;
		    top: 0;
		    left: 0;
		    font-size: 1.50rem;
		    transition: color .2s ease-out, -webkit-transform .2s ease-out;
		    transition: transform .2s ease-out, color .2s ease-out;
		    transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
		    -webkit-transform-origin: 0% 100%;
		    transform-origin: 0% 100%;
		    -webkit-transform: translateY(12px);
		    transform: translateY(12px);
		    cursor: text;
		    color: #757575;
			}


			.form-control {
		    display: block;
		    width: 100%;
		    height: 34px;
		    padding: 6px 12px;
		    font-size: 14px;
		    line-height: 1.82857143;
		    color: #555;
		    background-color: #fff;
		    background-image: none;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			}

			.car-list{

			}
			.car-list li{
				list-style: none;
				border-bottom: 1px solid grey;
				text-align: left;
				margin-bottom: 2px;
			}
          </style>

		<div class="justify-content" style="background: #f6f8f7b3;">
         <div class="container">
          <h1>Travel all around Rwanda > <strong class="text-muted"><?php echo $fromPlace.'-to-'.$toPlace; ?></strong></h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

   <section id="boxes" >
		<form method="post" action="../class/travelControler.php">
   	<div class="container">
<?php if(!empty($availableCars)): foreach($availableCars as $show): ?>
   		<div class="box col-md-4"  style="border: 1px solid grey; margin-right: 3.2%;">
   			<a href="payment.php"><img style="width: 300px; height: 170px;" src="../img/cars/<?php echo $show['car_picture']; ?>"></a>
   			<h3><strong> <?php echo $show['car_name']; ?></strong></h3>
   			<ul class="container-fluid car-list">
					<li ><center>  <strong class="pull-left "> <?php echo $show['from_date']; ?></strong> <small style="color: #e8491d;" class="glyphicon glyphicon-calendar pull-center"> </small> <strong class="pull-right"><?php echo $show['from_time']; ?></strong></center></li>
   				<li>Car Model : <strong class="pull-right"><?php echo $show['car_model'] ?></strong></li>
   				<li>Vehicle Plate : <strong class="pull-right"><?php echo $show['car_plate']; ?></strong></li>
   				<li>Driver Name : <strong class="pull-right"><?php echo $show['f_name'].' '.$show['l_name']; ?></strong></li>
   				<li>Driver Phone : <strong class="pull-right"><?php echo $show['phone_number']; ?></strong></li>
					<li>Travel Fees : <strong class="pull-right"><?php echo $show['travel_fees']; ?> Rwf</strong></li>

					<input type="text" hidden name="tripID" value="<?php echo $show['trip_id'];?>">
					<center><input type="submit" style="background: #e8491d; color: white;margin-left: 0%;margin-bottom: 0px;font-size: 11px;" class="btn btn-xs col-md-12" name="goPassengerInfo" value="Travel with this Car"></center>
   			</ul>
   		</div>
<?php endforeach; endif; ?>
   	</div>
	</form>
   </section>


<?php
include("footer.php");
?>
