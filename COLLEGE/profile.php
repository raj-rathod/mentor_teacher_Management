<?php
 session_start();
 if(!isset($_SESSION['usn'])){
 header('location:registration/login.php');
}
?>
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
        <a class="btn btn-full" href="registration/logout.php">Logout</a>
         
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
          <li id="men"><a href="#q">Mentor</a></li>
          <li id="ia1"><a href="#int1">Ist Internal Marks</a></li>
          <li id="ia2"><a href="#int2">2nd Internal Marks</a></li>
          <li id="ia3"><a href="#int3">3rd Internal Marks</a></li>
          <li id="avg"><a href="#int3">Average Marks</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      
    </div>
  </header>
  <!-- #header -->

  <!-- About -->
  <section id="mentor">
    <div class="container">
      <div class="card">
        <div class="card-header">
         <div id="mentorname"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="ia1res">
    <div class="container">
      <div class="card">
        <h3 class="text-center ">Ist Internal Marks</h3>
        <div class="card-header bg-info">
         <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM subject WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";
          

             }          
  
           ?>
         </div>
        </div>
        <div class="card-body bg-dark">
          <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM internal1 WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     if (mysqli_num_rows($run)==0) {
                        echo "<h4 class='text-center text-white'>Result Cooming Soon</h4>";
                 }else{
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

       }
             }          
  
           ?>
         </div>
        </div>
      </div>
    </div>
  </section>
  <section id="ia2res">
    <div class="container">
      <div class="card">
        <h3 class="text-center ">2nd Internal Marks</h3>
        <div class="card-header bg-info">
         <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM subject WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

             }          
  
           ?>
         </div>
        </div>
        <div class="card-body bg-dark">
          <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM internal2 WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     if (mysqli_num_rows($run)==0) {
                        echo "<h4 class='text-center text-white'>Result Cooming Soon</h4>";
                 }else{
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

         }
             }          
  
           ?>
         </div>
        </div>
      </div>
    </div>
  </section>
    <section id="ia3res">
    <div class="container">
      <div class="card">
        <h3 class="text-center ">3rd Internal Marks</h3>
        <div class="card-header bg-info">
         <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM subject WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

             }          
  
           ?>
         </div>
        </div>
        <div class="card-body bg-dark">
          <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM internal3 WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     if (mysqli_num_rows($run)==0) {
                        echo "<h4 class='text-center text-white'>Result Cooming Soon</h4>";
                 }else{
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

         }
             }          
  
           ?>
         </div>
        </div>
      </div>
    </div>
  </section>
   <section id="iaavg">
    <div class="container">
      <div class="card">
        <h3 class="text-center "> Average Internals  Marks</h3>
        <div class="card-header bg-info">
         <div class="row">
           <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
              if (isset($_SESSION['usn'])) {
                     $usn=$_SESSION['usn'];
                     $sql="SELECT * FROM subject WHERE usn='$usn'";
                     $run=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
                     echo "
           <div class='col-md-2 text-white'> $sub1</div>
           <div class='col-md-2 text-white'> $sub2</div>
           <div class='col-md-2 text-white'> $sub3</div>
           <div class='col-md-2 text-white'> $sub4</div>
           <div class='col-md-2 text-white'> $sub5</div>
           <div class='col-md-2 text-white'> $sub6</div>";

             }          
  
           ?>
         </div>
        </div>
        <div class="card-body bg-dark">
          <div class="row">
          <?php 
              $con=mysqli_connect('localhost','root','','collage'); 
  if (isset($_SESSION['usn'])) {
     $usn=$_SESSION['usn'];
     $sql="SELECT * FROM internal1 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub1=$row['sub1'];
                     $sub2=$row['sub2'];
                     $sub3=$row['sub3'];
                     $sub4=$row['sub4'];
                     $sub5=$row['sub5'];
                     $sub6=$row['sub6'];
     $sql="SELECT * FROM internal2 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub21=$row['sub1'];
                     $sub22=$row['sub2'];
                     $sub23=$row['sub3'];
                     $sub24=$row['sub4'];
                     $sub25=$row['sub5'];
                     $sub26=$row['sub6'];
     $sql="SELECT * FROM internal3 WHERE usn='$usn'";
     $run=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($run);
                     $sub31=$row['sub1'];
                     $sub32=$row['sub2'];
                     $sub33=$row['sub3'];
                     $sub34=$row['sub4'];
                     $sub35=$row['sub5'];
                     $sub36=$row['sub6'];
     $sub1avg=ceil(($sub1+$sub21+$sub31)/3);
     $sub2avg=ceil(($sub2+$sub22+$sub32)/3);
     $sub3avg=ceil(($sub3+$sub23+$sub33)/3);
     $sub4avg=ceil(($sub4+$sub24+$sub34)/3);
     $sub5avg=ceil(($sub5+$sub25+$sub35)/3);
     $sub6avg=ceil(($sub6+$sub26+$sub36)/3);
                     echo "
           <div class='col-md-2 text-white'> $sub1avg</div>
           <div class='col-md-2 text-white'> $sub2avg</div>
           <div class='col-md-2 text-white'> $sub3avg</div>
           <div class='col-md-2 text-white'> $sub4avg</div>
           <div class='col-md-2 text-white'> $sub5avg</div>
           <div class='col-md-2 text-white'> $sub6avg</div>";

             }          
  
           ?>
         </div>
        </div>
      </div>
    </div>
  </section>
<!----About----->
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
