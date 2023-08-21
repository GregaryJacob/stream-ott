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
                                    <button type="submit" class="btn btn-success waves-effect waves-light" name="save" onclick="window.location.href='addmovie.php';">Add Movies</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light" name="save" onclick="window.location.href='addlatest.php';">Add Latest</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='addtrend.php';">Add Trend</button>
                                    <button type="submit" class="btn btn-warning waves-effect waves-light" name="save" onclick="window.location.href='addtop.php';">Add Top Picks</button>
                                       <!-- <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item "><a href="addmovie.php">Add Movies</a></li>
                                            <li class="breadcrumb-item active">View Movies</li>
                                        </ol> -->
                                    </div>
                                    <h4 class="page-title">Manage Movies</h4>
                                    <?php 
                                        if (isset($_SESSION['msg']))
                                        {
                                            $msg=$_SESSION['msg'];
                                    ?>
                                    <div class="alert alert-secondary" role="alert">
                                        <?php
                                             echo $msg; 
                                             $_SESSION['msg']=null;
                                        ?>
                                    </div>
                                    <?php
                                        }
                                    ?>
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
                                                        <th>Thumbnail</th>
                                                        <th>Title</th>
                                                        <th>Duration</th>
                                                        <th>Language</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $r=0;
                                                    $q="select movies.*,director.dnm from movies inner join director on 
                                                    movies.did=director.did";
                                                    $rs=mysqli_query($conn,$q);
                                                    while($row=mysqli_fetch_array($rs))
                                                    {
                                                        $r+=1;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $r; ?></th>
                                                        <td><img width="60px" height="60px" src="../thumb/<?php echo $row['thumb']; ?>" alt=""></td>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['duration']; ?></td>
                                                        <td><?php echo $row['lang']; ?></td>
                                                        <td>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='editmovie.php?mid=<?php echo $row['mid']; ?>';">Edit</button>
                                                        <button type="submit" class="btn btn-danger waves-effect waves-light" name="save" onclick="window.location.href='deletemovie.php?mid=<?php echo $row['mid']; ?>';">Delete</button>
                                                        </td> 
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