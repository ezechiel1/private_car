<?php
include("header.php");
?>

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

      .btn-primary {
        background-color: #e8491d !important;
        color: #fff;
      }

    </style>
<section id="content">
      <section class="">
        <div class="row mt">
          <div class="col-lg-12">
            <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
             
                <div class="col-md-6 profile-text">
                  <div class="right-divider hidden-sm hidden-xs">
                    <div class="form-group ">
                        <div class="col-md-6">
                          <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">The name of your car</label>
                          </div>
                        </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-md-6">
                        <div class="md-form">
                          <input type="text" id="l_name" name="l_name" class="form-control">
                          <label for="l_name" class="">The model of your car</label>
                        </div>
                       </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-md-6">
                        <div class="md-form">
                         <input type="email" id="email" name="email" class="form-control">
                         <label for="subject" class="">Number of seat</label>
                        </div>
                       </div>
                    </div>
              </div>
              <!-- /col-md-4 -->
              <!-- /col-md-4 -->
              
              <!-- /col-md-4 -->
            </div>
            <div style="padding-top: 30px" class="col-md-6 centered">
                <div class="profile-pic">
                  <p><img src="img/car1.png"></p>
                  <p>
                    <button type="button" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                  </p>
                </div>
              </div>
            </form>

            <!-- /row -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
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
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
<?php
  include("footer.php")
?>