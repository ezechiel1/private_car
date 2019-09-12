<?php
	include("header.php");
?>
		<div class="justify-content">
         <div class="container">
          <h1>Travel all around Rwanda</h1>
          <p id=""> We want to know more about you, please fill up this form below </p>
          </div>

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
          </style>

     <section id="boxes">
       <div class="container">
        <form id ="contact-form" name="contact-form" action="" method="POST"  onsubmit="return validateForm()" >
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form">
               <div class="md-form">
                 <input type="text" id="name" name="name" class="form-control">
                 <label for="name" class="">Your First Name</label>
               </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
             <div class="md-form">
              <div class="md-form">
                <input type="text" id="l_name" name="l_name" class="form-control">
                <label for="l_name" class="">Your Last Name</label>
              </div>
             </div>
            </div>
            <!--Grid column-->

          </div>
            <!--Grid row-->
            <br><br>
            <!--Grid row-->
            <div class="row">
             <div class="col-md-6">
              <div class="md-form">
               <input type="email" id="email" name="email" class="form-control">
               <label for="subject" class="">Email</label>
              </div>
            </div>

            <div class="row">
             <div class="col-md-6">
              <div class="md-form">
               <input type="text" id="phone" name="phone" class="form-control">
               <label for="subject" class="">Telephone Number</label>
              </div>
             </div>
            </div>

            <p>Please choose one of the car below in wich you want to travel</p>
        </form>
      </div>
   </section>
   <section id="boxes">
   	<div class="container">
   		<div class="box">
   			<a href="payment.php"><img src="./img/car1.png"></a>
   			<h3> car name </h3>
   			<ul>
   				<li>car name</li>
   				<li>car model</li>
   				<li>car plaque</li>
   				<li>car price</li>
   				<li>car name chaufa</li>
   			</ul>
   		</div>

   		<div style="padding-left: 10%" class="box">
   			<a href="payment.php"><img src="./img/car1.png"></a>
   			<h3> car name </h3>
   			<ul>
   				<li>car name</li>
   				<li>car model</li>
   				<li>car plaque</li>
   				<li>car price</li>
   				<li>car name chaufa</li>
   			</ul>
   		</div>

   		<div style="padding-left: 15%" class="box">
   			<a href="payment.php"><img src="./img/car1.png"></a>
   			<h3> car name </h3>
   			<ul>
   				<li>car name</li>
   				<li>car model</li>
   				<li>car plaque</li>
   				<li>car price</li>
   				<li>car name chaufa</li>
   			</ul>
   		</div>
   	</div>
   </section>

   
<?php
include("footer.php");
?>