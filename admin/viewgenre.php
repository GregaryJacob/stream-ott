<?php
    include "adminheader.php";
    include "../dbconnection.php";
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
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='addgenre.php';">Add Genre</button>
                                       <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="addgenre.php">Add Genre</a></li>
                                            <li class="breadcrumb-item active">View Genres</li>
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Manage Genres</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">View Details</h4>
                                        <p class="sub-header">
                                            <code></code>
                                        </p>
            
                                        <div class="table-responsive .table-striped table-bordered">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                      
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $r=0;
                                                    $q="select * from genre";
                                                    $rs=mysqli_query($conn,$q);
                                                    while($row=mysqli_fetch_array($rs))
                                                    {
                                                        $r+=1;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $r; ?></th>
                                                        <td><?php echo $row['gnm']; ?></td>
                                                        
                                                        <td>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='editgenre.php?gid=<?php echo $row['gid']; ?>';">Edit</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" name="save" onclick="window.location.href='deletegenre.php?gid=<?php echo $row['gid']; ?>';">Delete</button>
                                                    </td>
                                                    </tr>
                                                <?php
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
         <!-- end col -->
                        </div>
                        <!--- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Designed by <a href="">StreamNow</a> 
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
<?php
    include "adminfooter.php";
?>