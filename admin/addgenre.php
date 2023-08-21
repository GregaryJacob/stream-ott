<?php
    include "adminheader.php";
    include "../dbconnection.php";

    #$uid=$_SESSION["userid"];

    if(isset($_POST['save']))
    {
      $nm=$_POST['txtnm']; 

      $q="select * from genre where gnm='$nm'";
      $rs=mysqli_query($conn,$q);
      $rw=mysqli_fetch_array($rs);
      if($rw['gnm']==$nm)
      {
        echo "<script>alert('Genre Already Added.');window.location='addgenre.php';</script>";
      }
      else
      {
        $qry="insert into genre(gnm) values('$nm')";
        mysqli_query($conn,$qry);
        echo "<script>alert('Genre Added.');</script>";
      }
    }
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='viewgenre.php';">View Genre</button>                
                               <!-- <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Actors</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">View Actors</a></li>
                                    <li class="breadcrumb-item active">Add Actor</li>
                                </ol> -->
                            </div>
                            <h4 class="page-title">Add Actor</h4>
                        </div>
                    </div>
                </div>     


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>

                                <form action="#" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="txtnm" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter name" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light" name="save">Submit</button>
                                        <button type="submit" class="btn btn-secondary waves-effect waves-light" name="save" onclick="window.location.href='viewgenre.php';">Back</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
                <!-- RADIOS -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; Designed By <a href="">StreamNow</a> 
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