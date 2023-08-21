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
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='addactor.php';">Add Actors</button>  
                                       <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="addactor.php">Add Actor</a></li>
                                            <li class="breadcrumb-item active">View Actors</li> 
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Manage Actors</h4>
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
                                                        <th>Image</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $r=0;
                                                    $q="select * from actor";
                                                    $rs=mysqli_query($conn,$q);
                                                    while($row=mysqli_fetch_array($rs))
                                                    {
                                                        $r+=1;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $r; ?></th>
                                                        <td><?php echo $row['anm']; ?></td>
                                                        <td><img width="60px" height="60px" src="../apics/<?php echo $row['aurl']; ?>" alt=""></td>
                                                        <td>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='editactor.php?acid=<?php echo $row['acid']; ?>';">Edit</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" name="save" onclick="window.location.href='deleteactor.php?acid=<?php echo $row['acid']; ?>';">Delete</button>
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