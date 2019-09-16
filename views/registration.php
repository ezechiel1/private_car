<?php
	include("header.php");
	if($_SESSION['tripID']=='') header('location: ../index.php');
	$tripID=$_SESSION['tripID'];
	$pDate= $_SESSION['client_date'];
	$pTime= $_SESSION['client_time'];
	$fromPlace=$_SESSION['fromPlace'];
	$toPlace=$_SESSION['toPlace'];

	$availableCars=$db->getCarTrip($tripID);
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

			.car-list-primary li{
				list-style: none;
				/* border-bottom: 1px solid grey; */
				text-align: left;
				margin-bottom: 2px;
			}
          </style>

		<div class="justify-content" style="background: #f6f8f7b3;">
         <div class="container">
          <h1>Travel all around Rwanda</h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

   <section id="boxes" >
   	<div class="container" >
			<form class="cmxform form-horizontal style-form" id ="contact-form" name="contact-form" action="../class/passengerControler.php" method="POST"  onsubmit="return validateForm()" >
		<div class="col-md-8">
				 <!--Grid row-->
				 <div class="row">

					 <!--Grid column-->

						 <div class="col-md-6">
							<div class="md-form">
								<input type="text" id="name" name="f_name" class="form-control">
								<label for="name" class="">Your First Name</label>
							</div>
						 </div>

						<div class="col-md-6">
						 <div class="md-form">
							 <input type="text" id="l_name" name="l_name" class="form-control">
							 <label for="l_name" class="">Your Last Name</label>
						 </div>
						</div>

						<div class="col-md-6">
						 <div class="md-form">
							 <input type="text" id="l_name" name="s_name" class="form-control">
							 <label for="l_name" class="">Surname</label>
						 </div>
						</div>

						<div class="col-md-6">
						 <div class="md-form">
							<input type="email" id="email" name="email" required="" class="form-control">
							<label for="subject" class="">Email</label>
						 </div>
						</div>

						<div class="col-md-6">
						 <div class="md-form">
							<input type="text" id="phone" name="phone" class="form-control">
							<label for="subject" class="">Telephone Number</label>
						 </div>
						</div>

						<div class="col-md-6">
						 <div class="md-form">
							<input type="text" id="address" name="address" class="form-control">
							<label for="subject">Address</label>
						 </div>
						</div>

					 <div class="col-md-6">
						 <div class="md-form">
							<select style="border:none; border-bottom: 1px solid; margin-bottom:-1%;"  id="phone" name="gender" class="form-control">
								 	<option value="" hidden> Gender</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
							 </select>
						 </div>
						</div>
						<div class="col-md-6">
						 <div class="md-form">
							<input type="text" id="age" name="age" class="form-control">
							<label for="subject" class="">Age</label>
						 </div>
						</div>


						<div class="col-md-6">
						 <div class="md-form">
							<input type="password" id="password" name="password" required="" class="form-control">
							<label for="subject" class="">Password</label>
						 </div>
						</div>

						<div class="col-md-6">
						 <div class="md-form">
							<input type="password" id="phone" name="password_c" required="" class="form-control">
							<label for="subject">Confirm Password</label>
						 </div>
						</div>
					 </div>

					 <br>
					 	<input type="text" hidden name="tripID" value="<?php echo $_SESSION['tripID']; ?>">
								 <p>
								<button type="Submit" name="registerpassenger" style="background: #e8491d; color: white;margin-left: 0%;margin-bottom: 0px;font-size: 11px;" class="btn btn-xs col-md-3 pull-left" ><b>Submit</b></button>
								 </p>
						 </form>
					</div>
					<div lg-hidden class="container">
<?php if(!empty($availableCars)): foreach($availableCars as $show): ?>
						<div hidden-sm class="box col-md-4"  style="border: 1px solid grey; margin-left: 1.5%;">
							<ul  class="container-fluid car-list-primary text-bold ">
								<li>
									<center><strong class="pull-left"> <small><em>From </em></small>
										 <b class="glyphicon glyphicon-map-marker"><?php echo $fromPlace;?></b> </strong> <b class=" glyphicon glyphicon-minus "></b> <strong class="pull-right"> <small><em>To </em></small> <b class=" glyphicon glyphicon-map-marker"><?php echo $toPlace; ?></b> </strong></center>
								</li>

								<li style="margin-top:  3%;"><center> <strong class="pull-left glyphicon glyphicon-calendar"> <?php echo $show['from_date']; ?></strong><strong class="pull-right"><?php echo $show['from_time']; ?>'</strong> </li>

							</ul>
							<a href="payment.php"><img style="width: 300px; height: 170px;" src="../img/cars/<?php echo $show['car_picture']; ?>"></a>
							<h3><strong> <?php echo $show['car_name']; ?></strong></h3>
							<ul class="container-fluid car-list">
								<li>Car Model : <strong class="pull-right"><?php echo $show['car_model']; ?></strong></li>
								<li>Vehicle Plate : <strong class="pull-right"><?php echo $show['car_plate']; ?></strong></li>
								<li>Driver Name : <strong class="pull-right"><?php echo $show['f_name'].' '.$show['l_name']; ?></strong></li>
								<li>Driver Phone : <strong class="pull-right"><?php echo $show['phone_number']; ?></strong></li>
								<li>Travel Fees : <strong class="pull-right"><?php echo $show['travel_fees']; ?> Frw</strong></li>

							</ul>
						</div>
<?php endforeach; endif; ?>
					</div>
		 </div>

   </section>
</div>
<?php
include("footer.php");
?>
