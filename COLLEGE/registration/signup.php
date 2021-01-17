<?php 
include('../action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Student Sign Up </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Student Name" required />
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="usn" id="name" placeholder="USN" required/>
                    </div>
                    <div class="form-group">
                        <h4 class="form-input">Sex  :  <select class="form-input" id="sel1" name="sex" required>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                       
                          </select></h4>
                    </div>
                     <div class="form-group">
                        <h4 class="form-input">Scheme  :  <select class="form-input" id="sel1" name="bat" required>
                                        <option value="17">2017</option>
                                        <option value="18">2018</option>
                                        <option value="19">2019</option>
                          </select></h4>
                         
                    </div>
                     <div class="form-group">
                        <h4 class="form-input">Year  :  <select class="form-input" id="sel1" name="yer" required>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                          </select></h4>
                    </div>
                       <div class="form-group">
                        <h4 class="form-input">Branch  :  <select class="form-input" id="sel1" name="bran" required>
                                        <option value="CS">CSE</option>
                                        <option value="IS">ISE</option>
                                        <option value="EC">ECE</option>
                                        <option value="EE">EEE</option>
                                        <option value="ME">ME</option>
                                        <option value="CIV">CIV</option>
                          </select></h4>
                    </div>
                     <div class="form-group">
                        <h4 class="form-input">Semester  :  <select class="form-input" id="sel1" name="sem" required>
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
                        <h4 class="form-input">Section  :  <select class="form-input" id="sel1" name="sec" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                       
                          </select></h4>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="email" placeholder="Phone No." required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="email id" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="signup" id="submit" class="form-submit submit" value="Sign up"/>
                        <a href="login.php" class="submit-link submit">Log In</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>