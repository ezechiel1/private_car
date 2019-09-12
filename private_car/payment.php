<?php
	include("header.php");
?>

	<div class="container">
      <h1>Travel all around Rwanda</h1>
      <p id=""> Here is found a form for your payment</p>
    </div>
    <br><br>
    <style>
    	#expitymonth {
    		padding-top: 1px;
    	}

    	#titlelabel{
    		padding-right: 100px;
    	}
    	
    	.nav-pills > li > a {
   		 border-radius: 4px;
		}
		.nav > li > a {
   		 position: relative;
    	display: block;
    	padding: 10px 125px;
		}

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
			
			.btn {
		    margin: 0.375rem;
		    color: inherit;
		    text-transform: uppercase;
		    word-wrap: break-word;
		    white-space: normal;
		    cursor: pointer;
		    border: 0;
		    border-radius: 0.125rem;
		    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		    padding: 0.84rem 2.14rem;
		    font-size: 1.51rem;
			}

			.btn-success {
    		background-color: #e8491d !important;
    		color: #fff;
			}

    </style>
    <div class="container">
   	   <form class="cmxform form-horizontal style-form" id ="contact-form" name="contact-form" action="" method="POST"  onsubmit="return validateForm()" >
          <!--Grid row-->
          <div class="row" style="padding-left: 40%;">

            <!--Grid column-->
            <div class="form-group">
              <div class="col-md-6">
               <div class="md-form">
                 <input type="text" id="name" name="name" class="form-control">
                 <label for="name" class="">Amount</label>
               </div>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="form-group">
             <div class="col-md-6">
              <div class="md-form">
                <input type="text" id="l_name" name="l_name" class="form-control">
                <label for="l_name" class="">Date of payment</label>
              </div>
             </div>
            </div>
            <!--Grid column-->

            <!--Grid row-->
            <div class="form-group">
             <div class="col-md-6">
              <div class="md-form">
               <input type="email" id="email" name="email" class="form-control">
               <label for="subject" class="">numero de bordereau</label>
              </div>
             </div>
            </div>

            <div class="form-group">
             <div class="col-md-6">
              <div class="md-form">
               <input type="text" id="phone" name="phone" class="form-control">
               <label for="subject" class="">Account Number</label>
              </div>
             </div>
            </div>
            <div class="form-group">
             <div class="col-md-6">
              <div class="md-form">
               <input type="text" id="phone" name="phone" class="form-control">
               <label for="subject" class="">Gestionnaire</label>
              </div>
             </div>
            </div>
            <div class="form-group">
             <div class="col-md-6">
              <div class="md-form">
               <input type="text" id="phone" name="phone" class="form-control">
               <label for="subject" class="">Agence du client</label>
              </div>
             </div>
            </div>
                  <p>
                    <button type="button" class="btn btn-success">Submit</button>
                  </p>
           </div>
        </form>
    </div>


<?php
include("footer.php");
?>