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

			.m-top{
				margin-top: -20px;
			}

			table thead tr{
				font-size: 17px;
				background: #35424a;
				color: white;
			}

			table thead tr th{
				font-size: 16px;
			}

			table tbody tr td{
				font-size: 13px;
			}

          </style>

		<div class="justify-content" style="background: #f6f8f7b3;">
         <div class="container">
          <h1>Travel all around Rwanda ><small><a title="Click Here to See the List" style="color: #e8491d;" data-toggle="modal" href="login.html#myModal"> Check Our Bank Account Number Here</a> </small></h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

   <section id="boxes" >
   	<div class="container" >
			<form enctype="multipart/form-data" class="cmxform form-horizontal style-form" id ="contact-form" name="contact-form" action="../class/paymentControler.php" method="POST"  onsubmit="return validateForm()" >
		<div class="col-md-8">
				 <!--Grid row-->
				 <div class="row">

					 <!--Grid column-->


						<div class="col-md-11">
						 <div class="md-form">
							 <select style="border:none; border-bottom: 1px solid" class="form-control" name="bank_name">
							 			<option value="" hidden> <b>Select Bank</b> </option>
										<option value="Access Bank">Access Bank</option>
										<option value="Bank of Kigali">Bank of Kigali</option>
										<option value="Eco Bank/Kigali(Former BCDI)">Eco Bank/Kigali(Former BCDI)</option>
										<option value="Equity Bank">Equity Bank</option>
										<option value="I & M(Former BCR)/Kigali">I & M(Former BCR)/Kigali</option>
										<option value="Kenya Commercial BanK">Kenya Commercial Bank</option>
										<option value="Unguka Bank">Unguka Bank</option>
							 </select>
							 <label for="name" class=""></label>
						 </div>
						</div>

						<div class="col-md-11 m-top">
						 <div class="md-form">
							 <input type="date" id="date_of_payment" name="date_of_payment" class="form-control">
							 <label for="date_of_payment" class=""></label>
						 </div>
						</div>

						<div class="col-md-11 m-top">
						 <div class="md-form">
							<input type="text" id="amount_paid" name="amount_paid" class="form-control">
							<label for="amount_paid" class="">Amount Paid(Rwf)</label>
						 </div>
						</div>

						<div class="col-md-11 m-top">
						 <div class="md-form">
							<input type="text" id="phone" name="BankSlipNumber" class="form-control">
							<label for="subject" class="">Bank Slip Number</label>
						 </div>
						</div>

						<div class="col-md-11 m-top">
							
				            <div class="row fileupload-buttonbar">
				             <div class="col-md-4">
				              <label style="font-size: 14px; color: #757575; padding-top: 10px;" for="bankslip">Upload the bank sleep</label>
				              <br>
				              <div class="md-form">
				               <input style="border: none; " type="file" id="bankslip" name="bankslip" class="form-control">
				               <!-- <label for="subject" class="">Car Picture</label> -->
							 </div>
						    </div>
						</div>
					</div>
					 <br>
								 <p clas>
								<button type="submit" name="register_payment" style="background: #e8491d; color: white;margin-left: 0%;margin-bottom: 0px;font-size: 11px;" class="btn btn-xs col-md-3 pull-left"><b>Submit</b></button>
								 </p>
						 </form>
					</div>
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
<br><br>
   </section>
</div>
 <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content modal-md">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Our Bank Accounts Numbers</h4>
              </div>
              <div class="modal-body">
 <table   class="table table-bordered table-hover">
  <thead style="font-size: 20px;" class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Bank</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
  		<td>1</td>
  		<td>Access Bank</td>
  		<td>2021-36363-36</td>
  	</tr>
  	<tr>
  		<td>2</td>
  		<td>Bank of Kigali</td>
  		<td>3884-59595-65</td>
  	</tr>
  	<tr>
  		<td>3</td>
  		<td>Eco Bank/Kigali(Former BCDI)</td>
  		<td>4959-37374-21</td>
  	</tr>
  	<tr>
  		<td>4</td>
  		<td>Equity Bank</td>
  		<td>1073-58583-10</td>
  	</tr>
  	<tr>
  		<td>5</td>
  		<td>I & M(Former BCR)/Kigali</td>
  		<td>2021-36363-36</td>
  	</tr>
  	<tr>
  		<td>6</td>
  		<td>Kenya Commercial Bank</td>
  		<td>9989-67675-70</td>
  	</tr>
  	<tr>
  		<td>5</td>
  		<td>Unguka Bank</td>
  		<td>5648-764568-11</td>
  	</tr>
  </tbody>
  </table>
</div>
            </div>
            </div>
          </div>
        </div>


<?php
include("footer.php");
?>
