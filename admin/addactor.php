<?php
    include "adminheader.php";
    include "../dbconnection.php";

    #$uid=$_SESSION["userid"];

    if(isset($_POST['save']))
    {
      $nm=$_POST['txtnm'];
      $path = '../apics/';

      $img1 = $_FILES['txtfile']['name'];
      $thumb1 = $path . $_FILES['txtfile']['name'];
      move_uploaded_file($_FILES['txtfile']['tmp_name'], $thumb1); 

      $q="select * from actor where anm='$nm'";
      $rs=mysqli_query($conn,$q);
      $rw=mysqli_fetch_array($rs);
      if($rw['anm']==$nm)
      {
        echo "<script>alert('Actor Already Added.');window.location='addactor.php';</script>";
      }
      else
      {
        $qry="insert into actor(anm,aurl) values('$nm','$img1')";
        mysqli_query($conn,$qry);
        echo "<script>alert('Actor Added.');</script>";
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
                                <ol class="breadcrumb m-0">
                                   <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Actors</a></li> -->
                                   <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='viewactors.php';">View Actors</button> 
                                   <!-- <li class="breadcrumb-item active">Add Actor</li> -->
                                </ol>
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

                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="txtnm" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter name" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="txtfile" id="exampleInputPassword1"
                                            placeholder="" required="">
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light" name="save">Submit</button>
                                    <button type="submit" class="btn btn-secondary waves-effect waves-light" name="save" onclick="window.location.href='viewactors.php';">Back</button>    
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
                        <script>document.write(new Date().getFullYear())</script> &copy; Designed By <a href="">Gregary</a> 
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