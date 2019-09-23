<?php
  include("header_driver.php");
  //Get the registered passenger from the database Table travel
  $registeredPASSENGER=$db->getPayment($driverID);
?>

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

<div class="container">
    <!-- <h1>Travel all around Rwanda</h1> -->
    <h1 id=""> List of Registered Passengers </h1>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Destination palce</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
<?php
if($registeredPASSENGER): $count=0; foreach($registeredPASSENGER as $show): $count++;
?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $show['passenger_fname'].' '.$show['passenger_lname']; ?></td>
      <td><?php echo $show['destination_place']; ?></td>
      <td><?php echo $show['passenger_phone']; ?></td>
      <td><?php echo $show['passenger_address']; ?></td>
      <td><?php echo $show['passenger_gender']; ?></td>
      <td><?php echo $show['passenger_age']; ?></td>
    </tr>
<?php endforeach;
else:?>
    <tr>
      <th colspan="7"><center>No Passenger registered yet now!...</center></th>
    </tr>
<?php endif; ?>
  </tbody>
</table>

<br><br><br><br><br><br><br><br><br><br><br>
<?php
  include("footer.php");
?>
