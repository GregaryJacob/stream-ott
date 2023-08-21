<?php
session_start();
if(isset($_SESSION['smmadmin']))
{

}
else
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Admin | StreamNow</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
        <!-- Plugins css -->
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        
        
        <!-- Bootstrap css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>
        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="assets/js/head.js"></script>        
        <style>
            .withoutampm::-webkit-datetime-edit-ampm-field{
                display:none;
            }
            input[type=time]::-webkit-validation-bubble-message{
                display:none;
            }
        </style>
    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="dark" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="dark" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">
            
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Admin <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                               
    
                                <!-- item-->
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.php" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>
    
                        <a href="index.php" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>
    
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>   
    
                    </ul>
                    
                    <div class="clearfix"></div>
                    
                </div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-bs-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="index.php">
                                    <i data-feather="airplay"></i>
                                    
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Files</li>

                            <li>
                                <a href="viewdir.php">
                                    <i data-feather="user"></i>
                                    <span> Director </span>
                                </a>
                            </li>

                            <li>
                                <a href="viewactors.php">
                                    <i data-feather="user"></i>
                                    <span> Actor </span>
                                </a>
                            </li>

                            <li>
                                <a href="viewgenre.php">
                                    <i data-feather="list"></i>
                                    <span> Genre </span>
                                    
                                </a>
                            </li>

                            <li>
                          
                              <a href="viewmovies.php">
                                    <i data-feather="film"></i>
                                    <span> Movies </span>
                                    
                                </a>
                                <!--<div class="collapse" id="sidebarCrm">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="addmovie.php">Add Movie</a>
                                        </li>
                                        <li>
                                            <a href="viewmovies.php">Edit Movie</a>
                                        </li>
                                        <li>
                                            <a href="addtrend.php">Add Trend</a>
                                        </li>
                                        <li>
                                            <a href="addlatest.php">Add Latest</a>
                                        </li>
                                        <li>
                                            <a href="addtop.php">Add top Picks</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>

                            <li>
                            <a href="viewshows.php">
                                    <i data-feather="film"></i>
                                    <span> Shows </span>
                                <!--<a href="#sidebarEmail" data-bs-toggle="collapse">
                                    <i data-feather="film"></i>
                                    <span> TV Shows </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEmail">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="addseries.php">Add Show</a>
                                        </li>
                                        <li>
                                            <a href="viewshows.php">Edit Show</a>
                                        </li>
                                    </ul>
                                </div>-->
                            </li>

                         
                            <li>
                                <a href="addplan.php">
                                    <i data-feather="activity"></i>
                                    <span> Plans </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarProjects" data-bs-toggle="collapse">
                                    <i data-feather="briefcase"></i>
                                    <span> Reports </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProjects">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="userlist.php">Subscribed Users</a>
                                        </li>
                                        <li>
                                            <a href="viewusers.php">View Users</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                    


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
