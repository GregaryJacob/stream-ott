<?php
    include "adminheader.php";
    include "../dbconnection.php";

    #$uid=$_SESSION["userid"];

    if(isset($_POST['save']))
    {
      $type=$_POST['txtpln'];
      $amt=$_POST['txtamt'];
      $vall=$_POST['txtval'];


      $q="select * from tbl_plans where type='$type'";
      $rs=mysqli_query($conn,$q);
      $rw=mysqli_fetch_array($rs);
      if($rw['type']==$type)
      {
        echo "<script>alert('Plan Already Added.');window.location='addplan.php';</script>";
      }
      else
      {
        $qry="insert into tbl_plans(type,amount,val,isdel) values('$type','$amt','$vall',1)";
        mysqli_query($conn,$qry);
        echo "<script>alert('Plans Added.');</script>";
      }
    }

    if(isset($_GET['del']))
    {
        $ids=$_GET['del'];
        $sql = "UPDATE `tbl_plans` SET `isdel` = '0' WHERE `tbl_plans`.`id` = $ids;";
        mysqli_query($sql);

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
                              <!--  <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Director</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">View Directors</a></li>
                                    <li class="breadcrumb-item active">Add Directors</li>
                                </ol> -->
                            </div>
                            <h4 class="page-title">Add Plan</h4>
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
                                        <label for="exampleInputEmail1" class="form-label">Plan</label>
                                        <input type="text" class="form-control" name="txtpln" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Plan" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Amount</label>
                                        <input type="text" required class="form-control" name="txtamt" id="exampleInputPassword1"
                                            placeholder="" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Validity</label>
                                        <input type="text" required class="form-control" name="txtval" id="exampleInputPassword1"
                                            placeholder="" required="">
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light" name="save">Submit</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
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
                                                        <th>Plan</th>
                                                        <th>Amount</th>
                                                        <th>Validity</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php

$sql = "SELECT *  FROM `tbl_plans` WHERE `isdel` = 1;";
$rs=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($rs))
{
?>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td><?php echo $row[1] ?></td>
                                                        <td><?php echo $row[2] ?></td>
                                                        <td><?php echo $row[3] ?></td>
                                                        <td><a href="?del=<?php echo $row[0] ?>">Removie</a></td>
                                                    </tr>
<?php
}
?>
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
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