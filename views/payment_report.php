<?php
	include("header_driver.php");
	$availableCars=$db->getFollowupTravel($driverID);
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
          <style>

  table td {
    font-size: 1.5rem;
    font-weight: 300;
}

.table {
    width: 90%;
    max-width: 100%;
    margin-bottom: 20px;
    margin-left: 70px;
    margin-top: 0px;
    margin-right: 90px;
}

table th {
    font-size: 1.7rem;
    font-weight: 400;
    background: #424c59;
    color: #ffffff;
}
</style>

		<!-- <div class="justify-content" style="background: #f6f8f7b3;"> -->
         <div class="container">
          <h1>Payment Report</h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">From</th>
      <th scope="col">Destination</th>
      <th scope="col">Date</th>
      <th scope="col">Passenger Number</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Total Payment</th>
      <th scope="col">System Tax</th>
      <th scope="col">Net Salary</th>
    </tr>
  </thead>
  <tbody>
<?php if(!empty($availableCars)): $count=0; foreach($availableCars as $show): $count++; ?>
<?php 
$tripID = $show['trip_id'];
$totPass = $db->totalPassenger($tripID);  ?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $show['from_place'];?></td>
      <td><?php echo $show['destination_place']; ?></td>
      <td><?php echo $show['from_date']; ?> at <?php echo $show['from_time']; ?></td>
      <td><?php echo $totPass;?></td>
      <td><?php echo $show['travel_fees'];  ?> <small class="pull-right">Rwf</small></td>
      <td><?php if($totPass==0) echo 0; else echo ($show['travel_fees'] * $totPass); ?> <small class="pull-right">Rwf</small></td>
      <td><?php if($totPass==0) echo 0; else echo ($show['travel_fees'] * $totPass)/10; ?> <small class="pull-right">Rwf</small></td>
      <td><?php if($totPass==0) echo 0; else echo (($show['travel_fees'] * $totPass))-($show['travel_fees'] * $totPass)/10;; ?> <small class="pull-right">Rwf</small></td>
      <!-- <td><?php  ?></td> -->
    </tr>
<?php endforeach; 
   	else:?>
    <tr>
      <th colspan="7"><center>No Passenger registered yet now!...</center></th>
    </tr>
<?php endif; ?>
  </tbody>
</table>

</div>
<br><br><br><br><br><br><br>
<?php
include("footer.php");
?>
