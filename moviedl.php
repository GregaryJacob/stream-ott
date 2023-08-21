<?php
include 'header.php';
$g=$_GET['m'];

$sql = "SELECT *  FROM `movies` WHERE `mid` LIKE '$g';";
$row=dbset($sql,4);
?>
 <!-- Slider Start -->
 <section class="iq-main-slider site-video">
      <div class="container-fluid">
         <div class="row">
            
         </div>
      </div>
   </section>
   <div class="main-content movi ">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="trending-info mt-4 pt-0 pb-4">
                  <div class="row">
                    <div class="col-md-6 col-12  mb-auto">
                    <div class="iq-blog-image">
                           <img width="1920" height="1080" src="banner/<?php echo  $row['banner'] ?>" alt="">				
                        </div>
                    </div>
                     <div class="col-md-6 col-12  mb-auto">
                        <div class="d-md-flex">
                           <h3 class="trending-text big-title text-uppercase mt-0 fadeInLeft animated" data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">  <?php echo $row['title'] ?>
                           </h3>
                           <div class="slider-ratting d-flex align-items-center ml-md-3 ml-0">
                              <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                 <?php 
                                 $k=$row['rate'];
                                 for($i = 0; $i < $k; $i++)
                                 {
                                 ?>
                                 <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <?php
                                 }
                                 ?>
                                
                              </ul>
                              
                           </div>
                        </div>
                        <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-content">
                           <li class="trending-list"><a class="text-primary title" href="tags/thriller.html"><?php echo $row['genre'] ?> <?php echo $row['genret'] ?></a></li>
                        </ul>
                        <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                           <span class="badge badge-secondary font-size-16"><?php echo $row['lang'] ?></span>
                           <span class="ml-3 font-Weight-500 genres-info"><?php echo $row['duration'] ?></span>
                          
                          
                        
                       
                     </div>
                     <ul class="list-inline p-0 m-0 share-icons music-play-lists mb-1">
                              <li id="evlist"><span><i class="ri-add-line"></i></span></li>
                             
                              <input type="hidden" id="mvid" value="<?php echo $row['mid'] ?>"/>
                           </ul>
                     <div class="d-flex align-items-center r-mb-23" data-iq-gsap="onStart" data-iq-position-x="0" data-iq-position-y="150" data-iq-duration="1" data-iq-delay=".6">
                     <a href="<?php echo $row['trailer'] ?>"  class="btn btn-hover iq-button video-open playbtn block-images position-relative playbtn_thumbnail  mr-2">
                              <i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Watch Trailer </a><a href="movieview.php?g=<?php echo $g ?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                 aria-hidden="true"></i>Watch Now</a>
                           </div>
                    
                  </div>
               </div>
               <div class="streamit-content-details trending-info g-border iq-rtl-direction">
                  <ul class="trending-pills-header d-flex nav nav-pills align-items-center text-center  mb-5 justify-content-center" role="tablist">
                    
                  
                     <li class="nav-item">
                        <a class="nav-link active show" data-toggle="pill" href="#sourse-1" role="tab" aria-selected="false">Description</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " data-toggle="pill" href="#dectripton-1" role="tab" aria-selected="true">Director</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#sourse-2" role="tab" aria-selected="false">Staring</a>
                     </li>
                  </ul>
                  <div class="tab-content">

                  <div id="sourse-1" class="tab-pane fade active show" role="tabpanel">
                        <div class="source-list-content">
                        <?php echo $row['longd'] ?>
                        </div>
                     </div>
                     <div id="dectripton-1" class="tab-pane fade " role="tabpanel">
<?php
$sql = "SELECT *  FROM `director` WHERE `did` = '$row[did]';";
$dr=dbset($sql,4);


?>
                        <div class="description-content">
                                       <p><li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6">

                              <div class="cast-images position-relative row mx-0">
                                    <div class="col-sm-4 col-12 img-box p-0">
                                       <img src="dpics/<?php echo $dr[2] ?>" class="person__poster--image img-fluid" alt="image" loading="lazy">
                                    </div>
                                    <div class="col-sm-8 col-12 block-description starring-desc ">
                                       <h6 class="iq-title">
                                          <a href="#" tabindex="0">
                                             <?php echo $dr[1] ?></a>
                                       </h6>
                                       <div class="video-time d-flex align-items-center my-2">
                                          
                                       </div>
                                    </div>
                                       </div>
                                    </li></p>
                                    </div>
                     </div>
                   
                
                     
                     <div id="sourse-2" class="tab-pane fade" role="tabpanel">
                        <div class="source-list-content">
                        <div class="container-fluid">
            <div class="row m-0">
               <div class="col-sm-12 overflow-hidden p-0">
                  <div class="iq-main-header d-flex align-items-center justify-content-between iq-ltr-direction">
                        <h4 class="main-title">Starring</h4>
                  </div>
               </div>
            </div>  
            <ul class="inner-slider list-inline row p-0  iq-ltr-direction">
<?php
$string = $row['actor'];
$str_arr = explode (",", $string); 
foreach($str_arr as $value) //loop over values
{
   $sql = "SELECT *  FROM `actor` WHERE `anm` LIKE '$value';";
   $actr=dbset($sql,4);

?>
               <li class=" slide-item iq-ltr-direction col-xl-3 col-lg-4 col-md-4 col-6">
                  <div class="cast-images position-relative row mx-0">
                        <div class="col-sm-4 col-12 img-box p-0">
                           <img src="apics/<?php echo $actr['aurl'] ?>" class="person__poster--image img-fluid" alt="image" loading="lazy">
                        </div>
                        <div class="col-sm-8 col-12 block-description starring-desc ">
                           <h6 class="iq-title">
                              <a href="#" tabindex="0">
                                 <?php echo $actr['anm'] ?></a>
                           </h6>
                           
                        </div>
                  </div>
               </li>
<?php
}
?>
            </ul>
      </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="iq-favorites" class="s-margin detail-cast-list iq-rtl-direction starring">
         
   </div>

  <?php
   include'raltedm.php';

?>
   </div>  

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#evlist").click(function(){

   var ids=$('#mvid').val();
    $.post("addfev.php",
    {
      mid: ids,
      types: 1
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
<?php
include 'footer.php';
?>