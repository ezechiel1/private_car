<?php
	include('header_driver.php');
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
          <h1>Register New Travel</h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

   <section id="boxes" >
					<div  class="container">
						
						<div class="col-md-12">
						<div class="col-md-4"></div>
						<div hidden-sm class="box col-md-6"  style="border: 1px solid grey; margin-left: 1.5%;">

<?php
//Get Car Information
$carInfo = $db->getRows('car',array('Order by'=>'car_id', 'where'=>array('driver_id'=>$dID)));
if(!empty($carInfo)): foreach($carInfo as $showCar):
?>
							<a href="payment.php"><img style="width: 300px; height: 170px;" src="../img/cars/<?php echo $showCar['car_picture'];?>"></a>
							<h3><strong> <?php echo $showCar['car_name']; ?> </strong></h3>
							<ul class="container-fluid car-list">
								<li>Car Model : <strong class="pull-right">
									<?php echo $showCar['car_model']; ?> </strong></li>
								<li>Vehicle Plate : <strong class="pull-right">
									<?php echo $showCar['car_plate']; ?> </strong></li>
								<li>Number of seats : <strong class="pull-right">
									<?php echo $showCar['car_seat']; ?> </strong></li>
								<li>Driver Name : <strong class="pull-right">
									<?php echo $driverName; ?> </strong></li>
								<li>Driver Phone : <strong class="pull-right"> <?php echo $driverPhone; ?> </strong></li>
							</ul>
<?php endforeach;
endif; ?>
						</div>
					 </div>
					</div>
		 </div>
<br><br><br>
   </section>
</div>

<?php
include("footer.php");
?>
