<?php
include 'header.php';
$uid=$_SESSION['user'];

if(isset($_GET['id']))
{
   $id=$_GET['id'];
   $sql = "UPDATE `tbl_fev` SET `sts` = '0' WHERE `tbl_fev`.`fid` = $id;";
   dbset($sql,1);
}
?>
<div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(images/video/bg.jpg);">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-sm-12">
                  <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                     <h2 class="title">Favorite List</h2>
                     <ol class="breadcrumb main-bg">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Movie</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      <main id="main" class="site-main watchlist-contens">
         <div class="container-fluid">
            <div class="iq-main-header d-flex align-items-center justify-content-between mt-5 mt-lg-0">
               <h4 class="main-title">Favorite List</h4>
            </div>
            <ul class=" row list-inline  mb-0 iq-rtl-direction ">
<?php
$sql = "SELECT *  FROM `tbl_fev` WHERE `user` = $uid AND `sts` = 1;";
$klm=dbset($sql,1);
while($rows=mysqli_fetch_array($klm))
{

    if($rows['types']==1)
    {
        $sql2 = "SELECT *  FROM `movies` WHERE `mid` LIKE '$rows[shid]';";
        $dbs=dbset($sql2,1);
        while($rw=mysqli_fetch_array($dbs))
        {
?>
<li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="thumb/<?php echo $rw['thumb']?>" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="moviedl.php?m=<?php echo $rw['mid']  ?>"><?php echo $rw['title']  ?></a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white"><?php echo $rw['duration']  ?></span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="moviedl.php?m=<?php echo $rw['mid']?>" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Watch Now
                                    </a>
                                 </div>

                                 <ul class="list-inline p-0 mt-2  music-play-lists mb-1">


                              <li id="evlist">
                                 <a href="?id=<?php echo $rows['fid']?>">
                                 <span><i class="ri-close-fill"></i></span></a>
                              </li>
                             
                              
                           </ul>
                              </div>
                            
                           </div>
                        </li>


<?php

        }

    }
    else
    {

        $sql2 = "SELECT *  FROM `shows` WHERE `genre` LIKE '$rowk[gnm]' OR `genret` LIKE '$rowk[gnm]';";
        $dbs=dbset($sql2,1);
    while($rw=mysqli_fetch_array($dbs))
    {

?>




               <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                  <div class="block-images position-relative  watchlist-first">
                     <div class="img-box">
                        <img src="images/genre/37.jpg" class="img-fluid" alt="" loading="lazy">
                     </div>
                     <div class="block-description">
                        <h6 class="iq-title text-left"><a href="genres-detail.html">Pirates of Sea</a></h6>
                        <div class="movie-time d-flex align-items-center my-2">
                           <span class="text-white">1hr : 45mins</span>
                        </div>
                        <div class="hover-buttons text-left">
                           <a href="genres-detail.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                              Play Now</a>
                        </div>
                     </div>
               
                  </div>
               </li>
<?php
    }
}
    
}
?>
               
               
            </ul>
            
            
         </div>
      </main>


<?php
include 'footer.php';
?>