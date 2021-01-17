<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>College</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/DBlogo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.php" title="Home"><img alt="Bell Logo" src="img/DBlogo.png" width="70" height="70"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            College Management
          </h1>

        <p class="tagline">
          "An investment in knowledge always pays the best interest." ... 
        </p>
        <a class="btn btn-full" href="mentor.php">Home </a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/DBlogo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li id="sdt"><a href="#ab">Student Details</a></li>
          <li id="count"><a href="#port">Total Male And Female Students</a></li>
          <li id="ia"><a href="#t">Student Internal Marks</a></li>
          <li id="miav"><a href="#t">Average Marks</a></li>

          
            
         
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      
    </div>
  </header>
  <!-- #header -->

  <!-- About -->
  <div id="sdetform" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Student Details</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                        <h4 class="form-input form-control">Branch  :  <select class="form-input" id="bran" name="bran">
                                        <option value="CS">CSE</option>
                                        <option value="IS">ISE</option>
                                        <option value="EC">ECE</option>
                                        <option value="EE">EEE</option>
                                        <option value="ME">ME</option>
                                        <option value="CIV">CIV</option>
                          </select></h4>
             </div>
              <div class="form-group">
                        <h4 class="form-input form-control">Semester  :  <select class="form-input" id="sem" name="sem">
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                          </select></h4>
                    </div>
              <div class="form-group">
                        <h4 class="form-input form-control">Section  :  <select class="form-input" id="sec" name="sec">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                       
                          </select></h4>
                    </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger sdetform">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
    
  </div>
  <section id="sdetail">

    <div class='container'>
      <div class='card'>
        <h3 class='text-center'>Students Detail</h3>
        <div class='card-header bg-success'>
          <div class='row'>
            <div class='col-md-2'> USN</div>
             <div class='col-md-2'> Name</div>
              <div class='col-md-2'>Section </div>
               <div class='col-md-2'> Semester</div>
                <div class='col-md-2'> Branch</div>
                 <div class='col-md-2'>Phone</div>
          </div>
        </div>
        <div class='card-body bg-dark'>
         <div id="sdetailres"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="ssex">
   <div id="ssexdet"></div>
  </section>
  <div id="siamark" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Detail</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="usn" placeholder="USN"/>    
             </div>
              <div class="form-group">
                        <h4 class="form-input form-control">Internal  :  <select class="form-input" id="semia" name="sem">
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                          </select></h4>
                    </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger sdetia">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
    <div id="siaresult" class="container">
         <div id="iaresult"></div>
    </div>
   <div id="siamarkav" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter USN</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="usn1" placeholder="USN"/>    
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger siamarkav">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
  <div id="siamarkavres" class='container'>
      <div class='card'>
        <h3 class='text-center'>Average Internal Marks</h3>
        <div class='card-header bg-success'>
          <div class='row'>
            <div class='col-md-2'> Subject 1</div>
             <div class='col-md-2'>  Subject 2</div>
              <div class='col-md-2'> Subject 3 </div>
               <div class='col-md-2'>  Subject 4</div>
                <div class='col-md-2'>  Subject 5</div>
                 <div class='col-md-2'> Subject 6</div>
          </div>
        </div>
        <div class='card-body bg-dark'>
        <div id="result"></div>
        </div>
      </div>
    </div>
    <?php
   include("about.php");
  ?>
  <!-- /About -->

  <!-- Team -->

  <?php
   include("footer.php");
  ?>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
