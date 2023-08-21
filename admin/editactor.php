<?php
    include "adminheader.php";
    include "../dbconnection.php";

    $acid=$_GET['acid'];

    #$uid=$_SESSION["userid"];

    if(isset($_POST['save']))
    {
      $nm=$_POST['txtnm'];
      $path = '../apics/';

      if($_FILES["txtfile"]["error"]!=4)
      {
        $img1 = $_FILES['txtfile']['name'];
        $thumb1 = $path . $_FILES['txtfile']['name'];
        move_uploaded_file($_FILES['txtfile']['tmp_name'], $thumb1);
      }
      else
      {
        $img1=$_POST['txturl'];
      }

        $qry="update actor set anm='$nm',aurl='$img1' where acid='$acid'";
        mysqli_query($conn,$qry);
        echo "<script>alert('Actor Details Updated.');</script>";
      
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Actors</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">View Actors</a></li>
                                    <li class="breadcrumb-item active">Add Actors</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Actors</h4>
                        </div>
                    </div>
                </div>     


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title"></h4>
                                <?php
                                    $a1="select * from actor where acid='$acid'";
                                    $a2=mysqli_query($conn,$a1);
                                    $a3=mysqli_fetch_array($a2);
                                ?>

                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="txtnm" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo $a3['anm'] ?>" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="txtfile" id="exampleInputPassword1"
                                            placeholder="">
                                        <input type="hidden" name="txturl" value="<?php echo $a3['aurl'] ?>">
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light" name="save">Submit</button>
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