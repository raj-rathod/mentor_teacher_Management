<?php 
include('../action.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Internal Marks </title>

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
                    <h2> 3rd Internal Marks </h2>
                     <div class="form-group">
                        <input type="text" class="form-input" name="usn" id="name" placeholder="USN"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub1" id="name" placeholder="Subject 1: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub2" id="name" placeholder="Subject 2: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub3" id="name" placeholder="Subject 3: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub4" id="name" placeholder="Subject 4: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub5" id="name" placeholder="Subject 5: Marks"/>
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-input" name="sub6" id="name" placeholder="Subject 6: Marks"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="ia3" id="submit" class="form-submit submit" value="Submit"/>
                        
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