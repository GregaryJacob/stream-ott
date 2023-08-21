<?php
    include "adminheader.php";
    include "../dbconnection.php";

    #$uid=$_SESSION["userid"];

    if(isset($_POST['save']))
    {
      $title=$_POST['txttitle'];
      $trailer=$_POST['txttrailer'];
      $movie=$_POST['txtmovie'];
      $duration=$_POST['txtduration'];
      $long=$_POST['txtlong'];
      $short=$_POST['txtshort'];
      $did=$_POST['cmbdir'];
      if($_POST['cmbactor2']!="Nil" && $_POST['cmbactor3']!="Nil")
      {
        $actor=$_POST['cmbactor1'].",".$_POST['cmbactor2'].",".$_POST['cmbactor3'];
      }
      elseif($_POST['cmbactor2']!="Nil" && $_POST['cmbactor3']=="Nil")
      {
        $actor=$_POST['cmbactor1'].",".$_POST['cmbactor2'];
      }
      elseif($_POST['cmbactor2']=="Nil" && $_POST['cmbactor3']!="Nil")
      {
        $actor=$_POST['cmbactor1'].",".$_POST['cmbactor3'];
      }
      elseif($_POST['cmbactor2']=="Nil" && $_POST['cmbactor3']=="Nil")
      {
        $actor=$_POST['cmbactor1'];
      } 
      //---------
      if($_POST['cmbgen1']!="Nil" && $_POST['cmbgen2']!="Nil")
      {        
        $genre=$_POST['cmbgen1'].",".$_POST['cmbgen2'];
      }
      elseif($_POST['cmbgen1']!="Nil" && $_POST['cmbgen2']=="Nil")
      { 
        $genre=$_POST['cmbgen1'];
      }
      elseif($_POST['cmbgen1']=="Nil" && $_POST['cmbgen2']!="Nil")
      { 
        $genre=$_POST['cmbgen2'];
      }     
      $genre2=$_POST['cmbgen2'];
      $lang=$_POST['cmblan'];
      $pub=$_POST['txtpub'];
      $rate=$_POST['cmbrate'];
      $feature=$_POST['cmbfeature'];
      $kids=$_POST['cmbkids'];

      $tpath = '../thumb/';
      $bpath = '../banner/';

      $img1 = $_FILES['txtthumb']['name'];
      $thumb1 = $tpath . $_FILES['txtthumb']['name'];
      move_uploaded_file($_FILES['txtthumb']['tmp_name'], $thumb1); 

      $img2 = $_FILES['txtbanner']['name'];
      $thumb2 = $bpath . $_FILES['txtbanner']['name'];
      move_uploaded_file($_FILES['txtbanner']['tmp_name'], $thumb2); 


     $qry="INSERT INTO `movies`(`title`, `trailer`, `movie`, `duration`, `longd`, `shortd`, `did`, `actor`, `genre`,`genret`, 
     `lang`, `pub`, `rate`, `feature`, `kids`, `thumb`, `banner`) VALUES ('$title','$trailer','$movie','$duration','$long','$short','$did',
     '$actor','$genre','$genre2','$lang','$pub','$rate','$feature','$kids','$img1','$img2')";
    mysqli_query($conn,$qry);
    echo "<script>alert('Movie Added.');</script>";
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="save" onclick="window.location.href='viewmovies.php';">View Movies</button>
                                <!--<ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Movies</a></li>
                                    
                                    <li class="breadcrumb-item active">Add Movie</li>
                                </ol> -->
                            </div>
                            <h4 class="page-title">Add Movie</h4>
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
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="txttitle" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter title" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Trailer URL</label>
                                        <input type="text" class="form-control" name="txttrailer" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter URL" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Movie URL</label>
                                        <input type="text" class="form-control" name="txtmovie" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter URL" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>                                                                                                           
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Thumb Image</label>
                                        <input type="file" class="form-control" name="txtthumb" id="exampleInputPassword1"
                                            placeholder="" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" name="txtbanner" id="exampleInputPassword1"
                                            placeholder="" required="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Duration</label>
                                        <input type="text" class="form-control withoutampm" name="txtduration" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Duration" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>  
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Long Des</label>
                                        <input type="textarea" class="form-control" name="txtlong" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Des" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Short Des</label>
                                        <input type="textarea" class="form-control" name="txtshort" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Des" required="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> 
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Director</label>
                                        <select class="form-select" name="cmbdir" id="example-select">
                                            <?php
                                                $a1="select did,dnm from director";
                                                $ars=mysqli_query($conn,$a1);
                                                while($arow=mysqli_fetch_array($ars))
                                                {
                                            ?>
                                            <option value="<?php echo $arow['did'] ?>"><?php echo $arow['dnm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>   
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Actors</label>
                                        <select class="form-select form-label select-label" name="cmbactor1" id="example-select">
                                            <?php
                                                $a2="select acid,anm from actor";
                                                $ars2=mysqli_query($conn,$a2);
                                                while($arow2=mysqli_fetch_array($ars2))
                                                {
                                            ?>                                            
                                            <option value="<?php echo $arow2['anm'] ?>"><?php echo $arow2['anm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select> 
                                        <select class="form-select form-label select-label" name="cmbactor2" id="example-select">
                                        <option value="Nil">Nil</option>
                                        <?php
                                                $a3="select acid,anm from actor";
                                                $ars3=mysqli_query($conn,$a3);
                                                while($arow3=mysqli_fetch_array($ars3))
                                                {
                                            ?>                                            
                                            <option value="<?php echo $arow3['anm'] ?>"><?php echo $arow3['anm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select> 
                                        <select class="form-select form-label select-label" name="cmbactor3" id="example-select">
                                        <option value="Nil">Nil</option>
                                        <?php
                                                $a4="select acid,anm from actor";
                                                $ars4=mysqli_query($conn,$a4);
                                                while($arow4=mysqli_fetch_array($ars4))
                                                {
                                            ?>                                            
                                            <option value="<?php echo $arow4['anm'] ?>"><?php echo $arow4['anm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>                                      
                                    </div>  
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                                        <select class="form-select form-label select-label" name="cmbgen1" id="example-select">
                                            <?php
                                                $a5="select distinct gnm from genre";
                                                $ars5=mysqli_query($conn,$a5);
                                                while($arow5=mysqli_fetch_array($ars5))
                                                {
                                            ?>                                            
                                            <option value="<?php echo $arow5['gnm'] ?>"><?php echo $arow5['gnm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select> 
                                        <select class="form-select form-label select-label" name="cmbgen2" id="example-select">
                                        <?php
                                                $a6="select gnm from genre";
                                                $ars6=mysqli_query($conn,$a6);
                                                while($arow6=mysqli_fetch_array($ars6))
                                                {
                                            ?>                                            
                                            <option value="<?php echo $arow6['gnm'] ?>"><?php echo $arow6['gnm'] ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>                                     
                                    </div>   
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Language</label>
                                        <select class="form-select form-label select-label" name="cmblan" id="example-select">
                                            <option>English</option>
                                            <option>Malayalam</option>
                                            <option>Hindi</option>
                                            <option>Tamil</option>
                                            <option>Kannada</option>
                                            <option>Telugu</option>
                                            <option>Gujarati</option>
                                            <option>Chineese</option>
                                            <option>Spanish</option>
                                            <option>German</option>
                                            <option>Italian</option>
                                            <option>French</option>
                                            <option>Russian</option>
                                            <option>Korean</option>
                                            <option>Thai</option>
                                            <option>Malay</option>
                                            <option>Indonesian</option>
                                            <option>Swedish</option>
                                            <option>Marati</option>
                                            <option>Bhojpuri</option>
                                            <option>Nepali</option>
                                            <option>Japaneese</option>
                                        </select>                                      
                                    </div> 
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Published Year</label>
                                        <input type="textarea" class="form-control" name="txtpub" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="" required="">                                     
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Rating</label>
                                        <select class="form-select form-label select-label" name="cmbrate" id="example-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>                                      
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Featured</label>
                                        <select class="form-select form-label select-label" name="cmbfeature" id="example-select">
                                            <option>On</option>
                                            <option>Off</option>
                                        </select>                                      
                                    </div>  
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kids Mode</label>
                                        <select class="form-select form-label select-label" name="cmbkids" id="example-select">
                                            <option>On</option>
                                            <option>Off</option>
                                        </select>                                      
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-light" name="save">Submit</button>
                                        <button type="submit" class="btn btn-secondary waves-effect waves-light" name="save" onclick="window.location.href='viewmovies.php';">Back</button>
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