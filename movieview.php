<?php
include 'header.php';
$g=$_GET['g'];

$sql = "SELECT *  FROM `movies` WHERE `mid` LIKE '$g';";
$row=dbset($sql,4);

if(isset($_SESSION['user']))
   {
    $user=$_SESSION['user'];

         $sql3="SELECT * FROM `tbl_user` WHERE `uid` = $user";
         $act=dbset($sql3,3);
         if($act[6]==0)
         {
         ?>
               <script type="text/javascript">
                  window.location.href = "plans.php";
               </script>
         <?php
            }
         else
         {
            
         }
    }
    else
   {
      ?>
      <script type="text/javascript">
      window.location.href = "login.php";
   </script>

   <?php
   }
?>
 <!-- Slider Start -->
 <section class="iq-main-slider site-video">
      <div class="container-fluid" style="padding:0">
         <div class="row">
            <div class="col-lg-12">
               <div class="pt-0">
               <iframe width="100%" height="600px" src="<?php echo getEmbedUrl($row['movie']) ?>?&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
               </div>

            </div>
         </div>
      </div>
   </section>
   <style>
video#my-video {
position: fixed; right: 0; bottom: 0;
min-width: 100%; min-height: 100%;
width: auto; height: auto; z-index: -100;
background: url(polina.jpg) no-repeat;
background-size: cover;
}
    </style>
      <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
     <script>
    $( document ).ready(function() {
       
        var video = $('#my-video');
      
            video.play();
        
    });
 
   
    </script>
   <link href="css/video-js.css" rel="stylesheet" />
   <script src="js/video.min.js"></script>
   <script src="plugin/videojs-youtube-master/youtube.js"></script>
<?php

function getEmbedUrl($url) {
   // function for generating an embed link
   $finalUrl = '';

   if (strpos($url, 'facebook.com/') !== false) {
       // Facebook Video
       $finalUrl.='https://www.facebook.com/plugins/video.php?href='.rawurlencode($url).'&show_text=1&width=200';

   } else if(strpos($url, 'vimeo.com/') !== false) {
       // Vimeo video
       $videoId = isset(explode("vimeo.com/",$url)[1]) ? explode("vimeo.com/",$url)[1] : null;
       if (strpos($videoId, '&') !== false){
           $videoId = explode("&",$videoId)[0];
       }
       $finalUrl.='https://player.vimeo.com/video/'.$videoId;

   } else if (strpos($url, 'youtube.com/') !== false) {
       // Youtube video
       $videoId = isset(explode("v=",$url)[1]) ? explode("v=",$url)[1] : null;
       if (strpos($videoId, '&') !== false){
           $videoId = explode("&",$videoId)[0];
       }
       $finalUrl.='https://www.youtube.com/embed/'.$videoId;

   } else if(strpos($url, 'youtu.be/') !== false) {
       // Youtube  video
       $videoId = isset(explode("youtu.be/",$url)[1]) ? explode("youtu.be/",$url)[1] : null;
       if (strpos($videoId, '&') !== false) {
           $videoId = explode("&",$videoId)[0];
       }
       $finalUrl.='https://www.youtube.com/embed/'.$videoId;

   } else if (strpos($url, 'dailymotion.com/') !== false) {
       // Dailymotion Video
       $videoId = isset(explode("dailymotion.com/",$url)[1]) ? explode("dailymotion.com/",$url)[1] : null;
       if (strpos($videoId, '&') !== false) {
           $videoId = explode("&",$videoId)[0];
       }
       $finalUrl.='https://www.dailymotion.com/embed/'.$videoId;

   } else{
       $finalUrl.=$url;
   }

   return $finalUrl;
}
include 'footer.php';
?>