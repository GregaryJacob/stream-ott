<?php

?>
<div class="main-content">


<?php
//include 'tops.php';

?>









<?php
    $sql = "SELECT * FROM `genre`;";
    $db=dbset($sql,1);
    while($rowk =mysqli_fetch_array($db))
    {
        $sql3 = "SELECT *  FROM `shows` WHERE `genre` LIKE '$rowk[gnm]' OR `genret` LIKE '$rowk[gnm]';";
        $cnt=dbset($sql3,2);
        if($cnt!=0)
        {


?>
<section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title"><?php echo $rowk['gnm'] ?></h4>
                        <a href="viewall.php?g=<?php echo $rowk['gnm'] ?>" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction swiper-initialized swiper-horizontal swiper-pointer-events" data-swiper="common-slider">
                     <ul class="swiper-wrapper p-0 m-0 " id="swiper-wrapper-97f7f28cf865cd910" aria-live="polite" style="transform: translate3d(-1182px, 0px, 0px); transition-duration: 0ms;">
                     <?php
if($kid==1)
{
  // $sql = "SELECT *  FROM `movies` WHERE `feature` LIKE 'On' AND `kids` LIKE 'On';";
   $sql2 = "SELECT *  FROM `shows` WHERE `genre` LIKE '$rowk[gnm]' OR `genret` LIKE '$rowk[gnm]' AND `kids` LIKE 'On';";
}
else
{
   $sql2 = "SELECT *  FROM `shows` WHERE `genre` LIKE '$rowk[gnm]' OR `genret` LIKE '$rowk[gnm]';";
  // $sql = "SELECT *  FROM `movies` WHERE `feature` LIKE 'On';";
}



$dbs=dbset($sql2,1);
while($rw=mysqli_fetch_array($dbs))
{
                     ?>
                     
                     
                     <li class="slide-item col-lg-3 col-md-4 col-6 mb-4">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="sthumb/<?php echo $rw['thumb']?>" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="tvsdl.php?m=<?php echo $rw['sid']  ?>"><?php echo $rw['title']  ?></a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white"><?php echo $rw['duration']  ?></span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="tvsdl.php?m=<?php echo $rw['sid']  ?>" role="button" class="btn btn-hover">
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
                     <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-4644b45e96da04de"></div>
                     <div class="swiper-button-next" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-4644b45e96da04de"></div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
               </div>
            </div>
         </section>
</div>

<?php

    }else
    {
        
    }
}

    ?>