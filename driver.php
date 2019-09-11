<?php
	include("header.php");
?>

         <div class="container">
          <h1>Travel all around Rwanda</h1>
          <p id="">Please field this form below </p>
          </div>

          <style>
          	.md-form label {
		    position: absolute;
		    top: 0;
		    left: 0;
		    font-size: 1.5rem;
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
		    font-size: 19px;
		    line-height: 1.42857143;
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

			.md-form label.active {
    		font-size: 1.5rem;
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

			body {
		    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #333;
			}

			a {

		    cursor: pointer;
		    text-decoration: none;
		    color: #e8491d;
		    transition: all 0.2s ease-in-out;
			}

			.btn-info {
    		background-color: #e8491d !important;
    		color: #fff;
			}

			.btn-default {
    		background-color: #e8491d !important;
    		color: #fff;
			}

			.modal-header {
		    padding: 15px;
		    border-bottom: 1px solid #e5e5e5;
		    background-color: #e8491d !important;
			}

			#sentence{
				font-size: 15px;
			}

			.modal-footer .btn + .btn {
		    margin-bottom: 4.7px;
		    margin-left: 5px;
			}

			.form-control {
				font-size: 14px;
			}
          </style>
                  <!-- FORM VALIDATION -->
                  <form style="padding-left: 40%" id ="contact-form" name="contact-form" action="" method="POST"  onsubmit="return validateForm()" >
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
                            <div class="col-md-5">
                              <div class="md-form">
                                <div class="md-form">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Enter your email here</label>
                                </div>
                              </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-5">
                              <div class="md-form">
                                <div class="md-form">
                                  <input type="text" id="l_name" name="l_name" class="form-control">
                                  <label for="l_name" class="">Your Password</label>
                                </div>
                              </div>
                            </div>
                        	</div>

                        	<div id="continuation">
                          	  <a href="welcomeDriver.php" class="btn btn-info" type="submit" name="continuation">Login</a>
                            <div>
                            	<br>
                        	<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                        	<div class="registration">
					          Don't have an account yet?<br/>
					          <a class="" href="newDriver.php">
					            Create an account
					           </a>
					        </div>
                    </form>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p id="sentence">Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button  class="btn btn-default" type="button">Submit</button>
                <button data-dismiss="modal" class="btn btn-theme" type="button">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

<?php
include("footer.php");
?>