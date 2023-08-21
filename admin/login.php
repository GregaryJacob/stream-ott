

<?php
session_start();
include "../dbconnection.php";
    if(isset($_SESSION['smmadmin']))
    {
        header("location:index.php");
    }
    $msg="";
    if(isset($_POST['login']))
    {
        $id=$_POST['lgcode'];
        $pass=$_POST['lgpass'];
        $sql = "SELECT *  FROM `tbl_admin` WHERE `user` LIKE '$id' AND `pass` LIKE '$pass' AND `sts` = 1";
        $q=mysqli_query($conn,$sql);
        $rlt=mysqli_fetch_array($q,MYSQLI_NUM);
        if($rlt[1]==$id && $rlt[2]==$pass)
        {
            $_SESSION['smmadmin']=$rlt[0];
            // $_SESSION['distname']=$rlt[1];
            header("location:index.php");
        }
        else
        {
            $msg="Invalid login credentials";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | StreamIt</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="assets/js/head.js"></script>

    </head>

    <body style="background-color: black;" class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                    
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="#" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Enter your Username and password to access admin panel.</p>
                                </div>

                                <form action="?" method="post">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Username</label>
                                        <input class="form-control" name="lgcode" type="text" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="lgpass" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="mb-3">
                                        <div class="form-check">
                                            
                                            <label class="form-check-label" style="color:red" for="checkbox-signin"><?php echo $msg?></label>
                                        </div>
                                    </div>
                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" name="login" type="submit"> Log In </button>
                                    </div>

                                </form>

                              

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2020 - <script>document.write(new Date().getFullYear())</script> &copy; Streamit theme by <a href="" class="text-white-50">Gregary</a> 
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>