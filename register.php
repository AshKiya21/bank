<?php 
include("include/db_conf.php");
include("include/db_functions.php");
$conn=db_connect();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DAVE BANK| Register</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="action/bootbox.min.js"></script>
    <script src="action/jquery.filter_input.js"></script>
    <script src="action/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    
    
    
    
    <style>
        #container{
        margin-left: 380px;
        border:3px solid #f1f1f1;    
        }
        input[type=text], input[type=password], input[type=email] 
        {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
        }
        
        button 
        {
              background-color: #4c7faf;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
        }
        .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
        </style>
    

    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="login.php">LogIn</a></li>
                                    <li><a href="register.php">SignUp</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> +91 9545551386</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Registration Form</h2>
                    </div>
                    <p>Welcome to Connecting with us</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container" style="margin-right: 227px;">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            
                            <h6 style="margin-left: 364px;">Please Fill All Details</h6>
                        </div>
                        
                        <form action="action/insert.php" method="post" name="myform" id="submitform">
                           
                            <div class="col-md-10" id="container">
                            <br>
                                
                            <div><label>Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                                
                            </div>
                                
                            <div><label>Contact</label>
                            <input type="text" name="contact" id="contact" placeholder="Enter Your Mobile Number" maxlength="10" required>
                            </div>
                                
                            <div><label>Account Number</label>
                            <input type="text" name="accnum" id="accnum" placeholder="Enter Your Account Number" required>
                            </div>  
                                
                            <div><label>Email ID</label>
                            <input type="email" name="username" id="username" placeholder="Enter Your Email Id" required>
                            </div>
                            
                            <div><label>Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter Password" required>
                            </div>
                            
                            <div>
                                 <button type="submit" id="btnsubmit" name="submit">Submit</button>
                            </div>
                                <p>If you Have Account <a href="login.php">Click Here</a></p>
                                
                            </div>
                        </form>    
                       
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>





























