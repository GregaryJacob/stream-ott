<?php
session_start();
include 'dbcon.php';
$kid=0;
if(isset($_GET['kid']))
{
   $kid=$_GET['kid'];
   if($kid ==1)
   {
      $_SESSION['kid']=1;
   }
   else
   {
      $kid=0;
      $_SESSION['kid']=0;
   }
}
if(isset($_SESSION['kid']))
{
   $kid=$_SESSION['kid'];
}

if($kid==1)
{
   $chk="checked";
}
else
{
   $chk="";
}
?>

<!doctype html>
<html lang="en-US">
   
<!-- Mirrored from templates.iqonic.design/streamit/frontend/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 14:42:40 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- Responsive -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- swiper -->
      <link rel="stylesheet" href="css/swiper.min.css">
      <link rel="stylesheet" href="css/swiper.css">
      <style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 18px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 4px;
  bottom: 1px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #bf000a;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Header -->
      <header id="main-header">
         <div class="main-header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <div class="navbar-toggler-icon" data-toggle="collapse">
                              <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                              <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                           </div>
                        </a>
                        <a class="navbar-brand" href="./"> <img class="img-fluid logo" src="images/logo.png" loading="lazy"
                           alt="streamit" /> </a>
                        <div class="mobile-more-menu">
                           <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                              data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                           <i class="ri-more-line"></i>
                           </a>
                           <div class="more-menu" aria-labelledby="dropdownMenuButton">
                              <div class="navbar-right position-relative">
                                 <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                    <li>
                                       <a href="#" class="search-toggle">
                                       <i class="ri-search-line"></i>
                                       </a>
                                       <div class="search-box iq-search-bar">
                                          <form action="#" class="searchbox">
                                             <div class="form-group position-relative">
                                                <input type="text" class="text search-input font-size-12"
                                                   placeholder="type here to search...">
                                                <i class="search-link ri-search-line"></i>
                                             </div>
                                          </form>
                                       </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                       <a href="#" class="search-toggle position-relative">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                             height="22" class="noti-svg">
                                             <path fill="none" d="M0 0h24v24H0z" />
                                             <path
                                                d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                          </svg>
                                          <span class="bg-danger dots"></span>
                                       </a>
                                       <div class="iq-sub-dropdown">
                                          <div class="iq-card shadow-none m-0">
                                             <div class="iq-card-body">
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3" loading="lazy"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">Boop Bitty</h6>
                                                         <small class="font-size-12"> just now</small>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3" loading="lazy"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">The Last Breath</h6>
                                                         <small class="font-size-12">15 minutes ago</small>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                   <div class="media align-items-center">
                                                      <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3" loading="lazy"
                                                         alt="streamit" />
                                                      <div class="media-body">
                                                         <h6 class="mb-0 ">The Hero Camp</h6>
                                                         <small class="font-size-12">1 hour ago</small>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                       <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" loading="lazy"
                                          alt="user">
                                       </a>
                                       <div class="iq-sub-dropdown iq-user-dropdown">
                                          <div class="iq-card shadow-none m-0">
                                             <div class="iq-card-body p-0 pl-3 pr-3">
                                                <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-file-user-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Manage Profile</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-settings-4-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Settings</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="pricing-plan-1.html" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-settings-4-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0 ">Pricing Plan</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                                <a href="login.html" class="iq-sub-card setting-dropdown">
                                                   <div class="media align-items-center">
                                                      <div class="right-icon">
                                                         <i class="ri-logout-circle-line text-primary"></i>
                                                      </div>
                                                      <div class="media-body ml-3">
                                                         <h6 class="mb-0">Logout</h6>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <div class="menu-main-menu-container">
                              <ul id="top-menu" class="navbar-nav ml-auto">
                                 
                                 <li class="menu-item">
                                    <a href="movilist.php">MOVIES</a>
                                    <ul class="sub-menu">
                                        <?php
                                            $sql = "SELECT * FROM `genre`;";
                                            $db=dbset($sql,1);
                                            while($row =mysqli_fetch_array($db))
                                            {

                                                $sql3 = "SELECT *  FROM `movies` WHERE `genre` LIKE '$row[gnm]' OR `genret` LIKE '$row[gnm]';";
                                                $cnt=dbset($sql3,2);
                                        ?>
                                       <li class="menu-item"><a href="viewall.php?g=<?php echo $row['gnm'] ?>"><?php echo $row['gnm'] ?> ( <?php echo $cnt ?> )</a></li>
                                       <?php
                                            }
                                       ?>
                                    </ul>
                                 </li>
                                 <li class="menu-item">
                                    <a href="tvlist.php">TV SHOWS</a>
                                    <ul class="sub-menu">
                                        <?php
                                            $sql = "SELECT * FROM `genre`;";
                                            $db=dbset($sql,1);
                                            while($row =mysqli_fetch_array($db))
                                            {

                                                $sql3 = "SELECT *  FROM `shows` WHERE `genre` LIKE '$row[gnm]' OR `genret` LIKE '$row[gnm]';";
                                                $cnt=dbset($sql3,2);
                                        ?>
                                       <li class="menu-item"><a href="viewalltv.php?g=<?php echo $row['gnm'] ?>"><?php echo $row['gnm'] ?> ( <?php echo $cnt ?> )</a></li>
                                       <?php
                                            }
                                       ?>
                                    </ul>
                                 </li>
                                 <li class="menu-item active">
                                    <a href="index.html"></a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="movie-category.html"></a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="show-category.html"></a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="video.html"></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="navbar-right menu-right">
                           <ul class="d-flex align-items-center list-inline m-0">
                           <li class="nav-item nav-icon">
                                 <a href="#" class="search-toggle device-search">
                                 <i class="ri-search-line"></i>
                                 </a>
                                 <div class="search-box iq-search-bar d-search">
                                    <form action="search.php" method="get" class="searchbox">
                                       <div class="form-group position-relative">
                                          <input type="text" name="q" class="text search-input font-size-12"
                                             placeholder="type here to search...">
                                          <i class="search-link ri-search-line"></i>
                                       </div>
                                    </form>
                                 </div>
                              </li>
                              <li class="nav-item nav-icon">
                                 <a href="#" class="search-toggle" data-toggle="search-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"
                                       class="noti-svg">
                                       <path fill="none" d="M0 0h24v24H0z" />
                                       <path
                                          d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                 </a>
                                 <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body">
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3" loading="lazy"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">Boot Bitty</h6>
                                                   <small class="font-size-12"> just now</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3" loading="lazy"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">The Last Breath</h6>
                                                   <small class="font-size-12">15 minutes ago</small>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="#" class="iq-sub-card">
                                             <div class="media align-items-center">
                                                <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3" loading="lazy"
                                                   alt="streamit" />
                                                <div class="media-body">
                                                   <h6 class="mb-0 ">The Hero Camp</h6>
                                                   <small class="font-size-12">1 hour ago</small>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <label style="padding-right: 10px;">Kids Mode</label>
                           <label class="switch mr-1"  > 
  <input type="checkbox" id="kid" <?php echo $chk ?>>
  <span class="slider round"></span>
</label>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $( document ).ready(function() {
       $('#kid').click(function() {
         if($(this).prop('checked')==true)
         {
           // alert("ok")
           window.location.href ="index.php?kid=1";
         }
         else
         {
            window.location.href ="kidsoff.php";
            //salert("not ok")
         }
       })
    });
    </script>
                             
                              <li class="nav-item nav-icon">
                                 <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                    data-toggle="search-toggle">
                                    <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>

<?php
if(isset($_SESSION['user']))
{

?>

                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                          <a href="settings.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-file-user-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">Manage Profile</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="fevliost.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-settings-4-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 "> Favorite list</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="plans.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-settings-4-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">Pricing Plan</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="logout.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-logout-circle-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">Logout</h6>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
   <?php
 }
else
{
?>
 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                          <a href="sign-up.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-file-user-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">Register</h6>
                                                </div>
                                             </div>
                                          </a>
                                          <a href="login.php" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-file-user-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="my-0 ">Login</h6>
                                                </div>
                                             </div>
                                          </a>
                                   
                                   
                                       </div>
                                    </div>
                                 </div>
<?php
}
?>


                              </li>
                           </ul>
                        </div> 
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>