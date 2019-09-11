<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="Author" content="Brad Traversy">

     <title> private car | welcome</title>
	<link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="csss/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="csss/mdb.css">
  </head>

  <style type="text/css">
    .md-form label {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 1.6rem;
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

.md-form .form-control {
    margin: 0 0 0.5rem 0;
    border-radius: 0;
    padding: 0.6rem 0 0.9rem 0;
    background-color: transparent;
    height: auto;
}

.md-form label.active {
    font-size: 1.5rem;
}

.btn.btn-lg {
    padding: 1.8rem 2.4rem;
    font-size: 0.94rem;
}

#boxes {

    margin-top: 0px;

}

.btn.btn-lg {

    padding: 1.3rem 2rem;
    font-size: 0.94rem;
    margin-top: 1.1rem;

}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fbf7f7;
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

.md-form label {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 1.6rem;
    transition: color .2s ease-out, -webkit-transform .2s ease-out;
    transition: transform .2s ease-out, color .2s ease-out;
    transition: transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;
    -webkit-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
    -webkit-transform: translateY(12px);
    transform: translateY(12px);
    cursor: text;
    color: #fbf6f6;
}

#element {
    border: none;
        border-bottom-width: medium;
        border-bottom-style: none;
        border-bottom-color: currentcolor;
    border-bottom: 1px solid;
}

footer {
    padding: 10px;
    margin-top: 0px;
    color: #ffffff;
    background-color: #35424a;
    text-align: center;
    font-size: 15px;
}
  </style>
<body>
      <header>
          <div class="container">
             <div id ="branding">
                <h1> <span id="highlight"> PRIVATE </span> CARS </h1>
              </div>
             <nav>
                  <ul>
                     <li> <a href="#"><strong> Home </strong></a></li>
                     <li> <a href="#"><strong>About</strong></a></li>
                     <li> <a href="driver.php"><strong>Driver</strong></a></li>
                     <li> <a href="#"><strong>Follow-Up</strong></a></li>
                  </ul>
            </nav>
          </div>
       </header>


     <section style="background: #22323c;" id="boxes">
       <div class="container">
        <form id ="contact-form" name="contact-form" action="" method="POST"  onsubmit="return validateForm()" >
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
                            <div class="col-md-3">
                              <div class="md-form">
                                <div class="md-form">
                                  <select id="element" name="from_place" class="form-control">
                                    <option value="" hidden>From Place</option>
                                    <option value="Gisenyi">Gisenyi</option>
                                    <option value="Musanze">Musanze</option>
                                    <option value="Nyirangarama">Nyirangarama</option>
                                  </select>
                                  <!-- <label for="name" class="">From place</label> -->
                                </div>
                              </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-3">
                              <div class="md-form">
                                <div class="md-form">
                                  <select id="element" name="from_place" class="form-control">
                                    <option value="" hidden>Destination</option>
                                    <option value="Gisenyi">Gisenyi</option>
                                    <option value="Musanze">Musanze</option>
                                    <option value="Nyirangarama">Nyirangarama</option>
                                  </select>
                                  <!-- <label for="l_name" class="">Your Destination</label> -->
                                </div>
                              </div>
                            </div>
                            <!--Grid column-->

                          <div class="col-md-2">
                            <div class="md-form">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Date</label>
                            </div>
                          </div>


                          <div class="col-md-2">
                            <div class="md-form">
                              <input type="text" id="subject" name="subject" class="form-control">
                              <label for="subject" class="">Time</label>
                            </div>
                          </div>

                           <a type="submit" href="available_cars.php" style="background: #e8491d; font-weight: bold; font-size: 11px" name="delet" class="btn btn-lg fa fa-arrow-right col-md-1 ">continue</a>
                        </div>



                    </form>
       </div>
   </section>


      <section id="showcase">
         <div class="container-fluid">
          <h1>Travel all around Rwanda</h1>
          <p> For a good jeurny this is the best choice that you've ever seen before. </p>
          </div>
      </section>

   <footer>
     <p> Travel with Private Car, Copyright & 2019, Powered by Ghislain. M </p>
   </footer>


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/common-scripts.js"></script>
  <script src="lib/form-validation-script.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
</body>
</html>
