<?php
include('function.php');
if(isset($_POST['National_ID']) && isset($_POST['Password']) && isset($_POST['Confirm Password'])){
    $national_id=$_POST['National_ID'];
    $password=$_POST['Password'];
    $confirm_password=$_POST['Confirm Password'];

    register($national_id, $password, $confirm_password);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierra Essentials</title>
    <link rel="shortcut icon" type="image/x-icon" href="ico/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .SignUp{ width: 350px; padding: 20px; }
    </style>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" > -->
</head>
<body>
    <header>
        <div class="wrapper">
            <div class ="top_nav">
                <div class ="left">
                    <div class ="logo"> 
                        <a href="index.html">
                            <p id="header"><span>Sierra Essentials</span></p>
                        </a>
                    </div>
                    <div class = "right">
                    <ul id="rightheader">
                        <li><a href = "help.html">Signin</a></li>
                        <li><a href = "signup.php">SignUp</a></li> 
                     
                    </ul>
                    </div>
                    </div>
                    <!-- <div id = "stickey"> -->
                    <div class="bottom_nav">
                            <ul class>
                                <li id = "bottom_nav-style"><a href ="#"></a>HOME  |</li>
                                <li id = "bottom_nav-style"><a href ="#"></a></a> ABOUT US | </li>
                                <li id = "bottom_nav-style"><a href ="#"></a></a>SERVICE | </li>
                                <li id = "bottom_nav-style"><a href ="#"></a></a>SEARCH APPLICATION</li>

                            </ul>
                    </div> 
            </div>
        </div>
                </header>
                            <!-- <div class="banner"> -->
                         <div class="SignUp">
                                <h2>Sign Up</h2>
                                <p>Please fill this form to create an account.</p>
                                <form action="signup.php" method="post">
                                    <div class="form-group">
                                        <label>National_ID</label>
                                        <input type="text" name="National_ID" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <input type="reset" class="btn btn-default" value="Reset">
                                    </div>
                                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                                </form>
                            </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
    <!-- <footer>
        <div class ="footer-main">
            <div class= footer-social-icons>
                <ul>
                    <li><a href = "#" target="blank"><i class = "fa fa-facebook"></i></a></li>
                    <li><a href = "#" target="blank"><i class = "fa fa-twitter"></i></a></li>
                    <li><a href = "#" target="blank"><i class = "fa fa-youtube"></i></a></li>
                </ul>
            </div> -->

        </div>
    </footer>
    

</body>
</html>