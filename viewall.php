<?php
include 'header.php';
$g=$_GET['g'];
?>
 <!-- Slider Start -->
 <div class="iq-breadcrumb-one  iq-bg-over " style="background-image: url(images/video/bg.jpg);">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-sm-12">
                  <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                     <h2 class="title">View All</h2>
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
               <h4 class="main-title"><?php echo $g ?></h4>
            </div>
            <ul class=" row list-inline  mb-0 iq-rtl-direction ">


            <?php
if($kid==1)
{
  // $sql = "SELECT *  FROM `movies` WHERE `feature` LIKE 'On' AND `kids` LIKE 'On';";
   $sql2 = "SELECT *  FROM `movies` WHERE `genre` LIKE '$g' OR `genret` LIKE '$g' AND `kids` LIKE 'On';";
}
else
{
   $sql2 = "SELECT *  FROM `movies` WHERE `genre` LIKE '$g' OR `genret` LIKE '$g';";
  // $sql = "SELECT *  FROM `movies` WHERE `feature` LIKE 'On';";
}

//$sql2 = "SELECT *  FROM `movies` WHERE `genre` LIKE '$g' OR `genret` LIKE '$g';";
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
                                 <h6 class="iq-title"><a href="movie.php?m=<?php echo $rw['mid']  ?>"><?php echo $rw['title']  ?></a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white"><?php echo $rw['duration']  ?></span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="moviedl.php?m=<?php echo $rw['mid']  ?>" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Watch Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info" style="font-size:10px;">
                                <span><?php  ///$rw['shortd']  ?></span>
                              </div>
                           </div>
                        </li>
 <?php
}
 ?>
               
               
               
               
               
               
               
               
               
               
               
            </ul>
            
            
         </div>
      </main>

<?php
include 'footer.php';
?>