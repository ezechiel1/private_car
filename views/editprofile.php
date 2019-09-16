<?php
  include("header_driver.php");
  $driverInfo = $db->getRows('driver', array('where'=>array('driver_id'=>$_SESSION['driverID'])));
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

      .btn-success {
          background-color: #00c851 !important;
          color: #fff;
          font-size: 1.51rem;
      }

      .btn-danger {
        background-color: #ff3547 !important;
        color: #fff;
        font-size: 1.51rem;
    }
          </style>

      

    <div class="justify-content" style="background: #f6f8f7b3;">
         <div class="container">
          <h1>Travel all around Rwanda</h1>
          <!-- <p id=""> We want to know more about you, please fill up this form below </p> -->
          </div>

   <section id="boxes" >
    <div class="container" >
      <form enctype="multipart/form-data" class="cmxform form-horizontal style-form" id ="contact-form" name="contact-form" action="../class/driverControler.php" method="POST"  onsubmit="return validateForm()" >
    <div class="col-md-8">
         <!--Grid row-->
         <div class="row">

           <!--Grid column-->
<?php if(!empty(($driverInfo))): foreach ($driverInfo as $show) : ?>
             <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="name" name="f_name" class="form-control" value="<?php echo $show['f_name'] ?>">
              </div>
             </div>

            <div class="col-md-6">
             <div class="md-form">
               <input type="text" id="l_name" name="l_name" class="form-control" value="<?php echo $show['l_name'] ?>">
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="email" id="email" name="email" class="form-control" value="<?php echo $show['email'] ?>">
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $show['phone_number'] ?>">
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="address" class="form-control" value="<?php echo $show['address'] ?>">
             </div>
            </div>

           <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="gender" class="form-control" value="<?php echo $show['gender'] ?>">
             </div>
            </div>
            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="age" class="form-control" value="<?php echo $show['age'] ?>">
             </div>
            </div>


            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="permit_id" class="form-control" value="<?php echo $show['permit_id'] ?>">
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="old_password" class="form-control">
              <label>Old Password</label>
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="password" class="form-control">
              <label>New Password</label>
             </div>
            </div>
           </div>
           <input type="text" hidden="" name="ID" value="<?php echo $show['driver_id'] ?>">
 <?php endforeach; endif; ?>
           </div>  
          <div lg-hidden class="container">
            <div hidden-sm class="box col-md-4"  style="border: none; margin-left: 1.5%;">
              <a><img src="../img/profile/index.jpeg" class="img-circle"></a>
              <br><br>
              <input type="file" name="updateProfile" style="margin-left: 60px;">
              <br>
              <p>
                <button type="submit" name="update" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>
              </p>
            </div>
          </div>
          </form>
          </div>
     </div>

   </section>
</div>
</div>

<?php
include("footer.php");
?>
