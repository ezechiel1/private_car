<?php
  include("header.php");
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
      <form class="cmxform form-horizontal style-form" id ="contact-form" name="contact-form" action="" method="POST"  onsubmit="return validateForm()" >
    <div class="col-md-8">
         <!--Grid row-->
         <div class="row">

           <!--Grid column-->

             <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="name" name="name" class="form-control">
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
               <input type="text" id="l_name" name="l_name" class="form-control">
               <label for="l_name" class="">Surname</label>
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="email" id="email" name="email" class="form-control">
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
              <input type="text" id="phone" name="phone" class="form-control">
              <label for="subject" class="">Address</label>
             </div>
            </div>

           <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="phone" class="form-control">
              <label for="subject" class="">Gender</label>
             </div>
            </div>
            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="phone" class="form-control">
              <label for="subject" class="">Age</label>
             </div>
            </div>


            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="phone" class="form-control">
              <label for="subject" class="">Password</label>
             </div>
            </div>

            <div class="col-md-6">
             <div class="md-form">
              <input type="text" id="phone" name="phone" class="form-control">
              <label for="subject" class="">Confirm Password</label>
             </div>
            </div>
           </div>

           <br>
                 <p clas>
                
                 </p>
             </form>
          </div>
          <div lg-hidden class="container">
            <div hidden-sm class="box col-md-4"  style="border: none; margin-left: 1.5%;">
              <a href="payment.php"><img src="./img/ui-sam.jpg" class="img-circle"></a>
              <br><br>
              <p>
                <button type="button" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>
              </p>
            </div>
          </div>
     </div>

   </section>
</div>

<?php
include("footer.php");
?>
