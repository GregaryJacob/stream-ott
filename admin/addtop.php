<?php
    include "adminheader.php";
    include "../dbconnection.php";

    if(isset($_POST['set']))
    {
        $mid=$_POST['txtmid'];
        $qry="insert into top(mid) values('$mid')";
        mysqli_query($conn,$qry);
        echo "<script>alert('Movie Added to top picks.');</script>";
    }

    if(isset($_POST['remove']))
    {
        $mid=$_POST['txtmid'];
        $qry="delete from top where mid='$mid'";
        mysqli_query($conn,$qry);
        echo "<script>alert('Movie removed to top picks.');</script>";
    }
?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dtBasicExample");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
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
                                            <li class="breadcrumb-item"><a href="viewmovies.php">Movies</a></li>
                                            <li class="breadcrumb-item active">Add Top Picks</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">View Movies</h4>
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
                                        <p>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search movies">
                                        </p>
                                        </p>
            
                                        <div class="table-responsive .table-striped table-bordered">
                                            <table class="table mb-0" id="dtBasicExample">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Director</th>
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
                                                        $mid=$row['mid'];
                                                        $ccq="select mid from top where mid='$mid'";
                                                        $ccrs=mysqli_query($conn,$ccq);
                                                        $ccrw=mysqli_fetch_array($ccrs);
                                                        if($ccrw!=null)
                                                        {
                                                            $ccmid=$ccrw['mid'];
                                                        }
                                                        else
                                                        {
                                                            $ccmid=0;
                                                        }
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $r; ?></th>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['dnm']; ?></td>
                                                        <td><?php echo $row['lang']; ?></td>
                                                        <td><img width="60px" height="60px" src="../thumb/<?php echo $row['thumb']; ?>" alt=""></td>
                                                        <td>
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="txtmid" value="<?php echo $row['mid']; ?>">
                                                                <?php
                                                                    if($ccmid<=0)
                                                                    {
                                                                ?>
                                                                <button type="submit" name="set" class="btn btn-primary waves-effect waves-light">Set as Top Picks</button>
                                                                <?php
                                                                    }
                                                                    else
                                                                    {
                                                                ?>
                                                                <button type="submit" name="remove" class="btn btn-primary waves-effect waves-light">Remove from Top Picks</button>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </form>
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