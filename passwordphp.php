<?php
session_start();
include"dbcon.php";
$msg="";
$uid=$_GET['u'];
if(isset($_POST['login']))
{
    $email=$_POST['usr'];
    $pass=$_POST['pass'];
    $sql = "UPDATE `tbl_user` SET `pass` = '$pass' WHERE `tbl_user`.`uid` = $email;";
    $log=dbset($sql,1);
    if($log==1) 
    {
        $msg="Password changed successfully";
        header("Location:settings.php");

    }
    else
    {
      
    }
}

?>

<!doctype html>
<html lang="en-US">
   
<!-- Mirrored from templates.iqonic.design/streamit/frontend/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 14:43:37 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit - Responsive Bootstrap 4 Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico"/>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style -->
      <link rel="stylesheet" href="css/style.css"/>
      <!-- Responsive -->
      <link rel="stylesheet" href="css/responsive.css"/>
   </head>
   <body>
   <!-- loader Start -->
   <!-- <div id="loading">
      <div id="loading-center">
      </div>
   </div> -->
   <!-- loader END -->
   <!-- MainContent -->
   <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center">
               <div class="sign-user_card ">                    
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 m-auto">
                        <h3 class="mb-3 text-center">Change password</h3>
                        <span style="color:red" >
                            <?php echo $msg ?>
                    </span>
                        <form class="mt-4" action="?u=<?php echo $uid?>" method="post">
                          <input type="hidden" name="usr" value="<?php echo $uid ?>"/>
                           <div class="form-group">                                 
                              <input type="password" name="pass" class="form-control mb-0" id="exampleInputPassword2" placeholder="Enter New Password" required>
                           </div>
                           
                              <div class="sign-info">
                                 <button type="submit" name="login" class="btn btn-hover">Save</button>
                                 <a href="settings.php"name="login" class="btn btn-hover">Cancel</a>                  
                              </div>                                    
                           
                        </form>
                     </div>
                  </div>
               
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- MainContent End-->
   <div class="rtl-box">
      <button type="button" class="btn btn-light rtl-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>
      </button>
      <div class="rtl-panel">
         <ul class="modes">
            <li class="dir-btn"  data-mode="rtl" data-active="false" data-value="ltr"><a href="#">LTR</a></li>
            <li class="dir-btn" data-mode="rtl" data-active="true"   data-value="rtl"><a href="#">RTL</a></li>
         </ul>
      </div>
   </div>
   <!-- back-to-top End -->
   <!-- jQuery, Popper JS -->
   <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="js/bootstrap.min.js"></script>
   <!-- owl carousel Js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- select2 Js -->
   <script src="js/select2.min.js"></script>
   <!-- Magnific Popup-->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- Custom JS-->
   <script src="js/custom.js"></script>
   <!-- rtl -->
   <script src="js/rtl.js"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/streamit/frontend/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 14:43:38 GMT -->
</html>