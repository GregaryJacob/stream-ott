<?php
    include "adminheader.php";
    include "../dbconnection.php";

    #$uid=$_SESSION["userid"];

    #if(!isset($_SESSION["userid"]))
    #{
        #echo "<script>window.location='index.php';</script>";
    #}
?>

      <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                    <i class="fe-film font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <?php
                                                        $qry="select count(mid) as mcount from movies";
                                                        $rss=mysqli_query($conn,$qry);
                                                        $rrow=mysqli_fetch_array($rss);
                                                    ?>
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $rrow['mcount'] ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Movies</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-film font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php
                                                        $qry1="select count(sid) as scount from shows";
                                                        $rss1=mysqli_query($conn,$qry1);
                                                        $rrow1=mysqli_fetch_array($rss1);
                                                    ?>                                                    
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $rrow1['scount'] ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Series</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                    <i class="fe-user font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php
                                                        $qry2="select count(uid) as ucount from tbl_user";
                                                        $rss2=mysqli_query($conn,$qry2);
                                                        $rrow2=mysqli_fetch_array($rss2);
                                                    ?>                                                    
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $rrow2['ucount'] ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Users</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                    <i class="fe-eye font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php
                                                        $qry3="select count(sid) as subcount from tbl_sub where isdel=1";
                                                        $rss3=mysqli_query($conn,$qry3);
                                                        $rrow3=mysqli_fetch_array($rss3);
                                                    ?>                                                   
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $rrow3['subcount'] ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Subscriptions</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>

                        <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                    <i class="fe-briefcase font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                <?php
                                                        $qry33="select sum(tbl_plans.amount) as amt from tbl_plans inner join tbl_sub on tbl_plans.id=tbl_sub.plan where tbl_sub.isdel=1";
                                                        $rss33=mysqli_query($conn,$qry33);
                                                        $rrow33=mysqli_fetch_array($rss33);
                                                    ?>                                                   
                                                    <h3 class="text-dark mt-1">Rs. <span data-plugin="counterup"><?php echo $rrow33['amt'] ?></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Revenue</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <!-- end row -->

                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; GJ <a href="">Administrator</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
<?php
    include "adminfooter.php";
?>