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
<footer style="position: relative; left: 0px; bottom: 0px; width: 100%;">
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
