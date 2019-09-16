<?php
session_start();
//load and initialize database class
require_once '../core/db.php';
$db = new DB();
if(isset($_POST['data']))
{
$fromplace = $_POST['data'];

$toplac=$db->getRows('set_travel',array('Order by'=>'from_place desc','where'=>array('from_place'=>$fromplace)));
if(!empty($toplac)):
 ?>
 <!--Grid column-->
 <div class="col-md-3">
   <div class="md-form">
     <div class="md-form">
       <select id="to_place" onchange="getTravelDestination();" id="element" name="from_place" class="form-control">

        <option value="" hidden>Destination</option>
<?php $tmp=array(); foreach($toplac as $showDest):
  if(!in_array(strtolower($showDest['destination_place']), $tmp)):?>
         <option style="color: black;" value="<?php echo $showDest['destination_place'] ?>"><?php echo $showDest['destination_place']; ?></option>
<?php endif; $tmp[]=strtolower($showDest['destination_place']); endforeach; ?>
       </select>
       <!-- <label for="l_name" class="">Your Destination</label> -->
     </div>
   </div>
 </div>
 <!--Grid column-->
<span id="displayTravel_b">
<div class="col-md-2">
 <div class="md-form">
   <input type="date" style="border: none; border-bottom: 1px solid;padding: 0px;" id="subject" name="from_date" class="form-control">
   <label for="subject" class=""></label>
 </div>
</div>


<div class="col-md-2">
 <div class="md-form">
   <input type="time" style="border: none; border-bottom: 1px solid;padding: 0px;" id="subject" name="from_time" class="form-control">
   <label for="subject" class=""></label>
 </div>
</div>
<input type="text" hidden name="fromPlace" value="<?php echo $fromplace; ?>">

<input type="button" disabled  style="background: #e8491d; font-weight: bold; font-size: 11px" name="goToAvailableCar" value="Continue" class="btn btn-lg fa fa-arrow-right col-md-1 ">
</span>
<?php  endif;
}

if(isset($_POST['toplace']))
{
?>
<div class="col-md-2">
 <div class="md-form">
   <input type="date" style="border: none; border-bottom: 1px solid;padding: 0px;" id="subject" name="from_date" class="form-control">
   <label for="subject" class=""></label>
 </div>
</div>


<div class="col-md-2">
 <div class="md-form">
   <input type="time" style="border: none; border-bottom: 1px solid;padding: 0px;" id="subject" name="from_time" class="form-control">
   <label for="subject" class=""></label>
 </div>
</div>
<!-- <input type="text" hidden name="from" value=""> -->
<input type="text" hidden name="toPlace" value="<?php echo $_POST['toplace']; ?>">


<input type="submit"  style="background: #e8491d; font-weight: bold; font-size: 11px" name="goToAvailableCar" value="Continue" class="btn btn-lg fa fa-arrow-right col-md-1 ">
</form>
<?php
} ?>
