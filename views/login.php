<?php
	include("header.php");
?>

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
          <div class="col-md-12">
         <div class="container">
          <h1>Travel all around Rwanda</h1>
          <p id="">Please field this form below </p>
          </div>
                  <!-- FORM VALIDATION -->
                  <form enctype="multipart/form-data" style="padding-left: 40%" id ="contact-form" name="contact-form" action="../class/loginControlerForPassenger.php" method="POST"  onsubmit="return validateForm()" >
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
                            <div class="col-md-5">
                              <div class="md-form">
                                <div class="md-form">
                                  <input type="email" id="name" name="email" class="form-control">
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
                                  <input type="password" id="l_name" name="password" class="form-control">
                                  <label for="l_name" class="">Your Password</label>
                                </div>
                              </div>
                            </div>
                        	</div>

                        	<div id="continuation">
                          	  <input class="btn btn-info" type="submit" name="login" value="SIGN IN"><a style="margin-left: 12%;" data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                            <div>
                            	<br>
                        	<div class="registration">
					          Don't have an account yet?
					          <a class="" style="margin-left: 4%;" href="newDriver.php">
					            Create an account
					           </a>
					        </div>
								</div>
							</div>
                    </form>
										<br><br><br><br><br><br><br><br>
</div>
</section>
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
                <button data-dismiss="modal" class="btn btn-theme" type="button">Cancel</button>
								 <button  class="btn btn-default" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
    </div>
				<style>
				  footer {
				    /* padding: 10px; */
				    margin-top: 0px;
				    color: #ffffff;
				    background-color: #35424a;
				    text-align: center;
				    font-size: 15px;
				}

				</style>
				<br>
				<footer style="position: absolute; left: 0px; bottom: 0px; width: 100%;">
				     <p> Travel with Private Car, Copyright & 2019, Powered by Ghislain. M </p>
				   </footer>

				  <script src="../lib/jquery/jquery.min.js"></script>

				  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>

				  <script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
				  <script src="../lib/jquery.scrollTo.min.js"></script>
				  <script src="../lib/jquery.nicescroll.js" type="text/javascript"></script>
				  <script src="../lib/common-scripts.js"></script>
				  <script src="../lib/form-validation-script.js"></script>

				  <script type="text/javascript" src="../js/popper.min.js"></script>
				    <!-- Bootstrap core JavaScript -->
				  <script type="text/javascript" src="../js/bootstrap.js"></script>
				    <!-- MDB core JavaScript -->
				  <script type="text/javascript" src="../js/mdb.js"></script>

				  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

				  <script>
				    $('.contact-map').click(function() {

				      //google map in tab click initialize
				      function initialize() {
				        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
				        var mapOptions = {
				          zoom: 11,
				          scrollwheel: false,
				          center: myLatlng,
				          mapTypeId: google.maps.MapTypeId.ROADMAP
				        }
				        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
				        var marker = new google.maps.Marker({
				          position: myLatlng,
				          map: map,
				          title: 'Private Car!'
				        });
				      }
				      google.maps.event.addDomListener(window, 'click', initialize);
				    });
				  </script>
				  <!-- PNotify -->
				  <script src="../pnotify/dist/pnotify.js"></script>
				  <script src="../pnotify/dist/pnotify.buttons.js"></script>
				  <script src="../pnotify/dist/pnotify.nonblock.js"></script>
				</div>
				<?php $_SESSION['sessData']=''; ?>
				</body>
				</html>
