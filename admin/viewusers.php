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
                                    <!-- <button type="submit" class="btn btn-success waves-effect waves-light" name="save" onclick="window.location.href='addmovie.php';">Add Movies</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light" name="save" onclick="window.location.href='addlatest.php';">Add Latest</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='addtrend.php';">Add Trend</button>
                                    <button type="submit" class="btn btn-warning waves-effect waves-light" name="save" onclick="window.location.href='addtop.php';">Add Top Picks</button>
                                       <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item "><a href="addmovie.php">Add Movies</a></li>
                                            <li class="breadcrumb-item active">View Movies</li>
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Manage Users</h4>
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
                                                        <th>Username</th>
                                                        <th>E-Mail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $r=0;
                                                    $q="select * from tbl_user";
                                                    $rs=mysqli_query($conn,$q);
                                                    while($row=mysqli_fetch_array($rs))
                                                    {
                                                        $r+=1;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $r; ?></th>
                                                        <td><?php echo $row['fname'] . " ". $row['lname']; ?></td>
                                                        <td><?php echo $row['usrname']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                       <!-- <td><button type="submit" class="btn btn-warning waves-effect waves-light" name="save" onclick="window.location.href='editmovie.php';">Edit</button><br>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" name="save" onclick="window.location.href='deletemovie.php';">Delete</button>
                                                         </td> -->
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
                                <script>document.write(new Date().getFullYear())</script> &copy; Designed by <a href="">Gregary</a> 
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