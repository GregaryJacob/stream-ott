<?php
include 'header.php';
$g=$_GET['m'];

$sql = "SELECT *  FROM `movies` WHERE `mid` LIKE '$g';";
$row=dbset($sql,4);
?>
 <!-- Slider Start -->
 <div class="iq-breadcrumb-one  iq-bg-over iq-over-dark-50" style="background-image: url(images/about-us/01.jpg);">  
         <div class="container-fluid"> 
               <div class="row align-items-center">
                  <div class="col-sm-12">
                     <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                           <h2 class="title">Pricing Plan </h2>
                           <ol class="breadcrumb main-bg">
                              <li class="breadcrumb-item"><a href="#">Home</a></li> 
                              <li class="breadcrumb-item active">Pricing Plan </li>
                           </ol>
                     </nav>
                  </div>
               </div> 
         </div>
      </div>
      <div class="site-content-contain"> 
         <div id="content" class="site-content">
            <div id="primary" class="content-area">
               <main id="main" class="site-main">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 col-sm-12">
                              <div class="iq-pricing-card-two">
                                 <div class="table-responsive iq-pricing pt-2">
                                    <table id="my-table" class="table" data-active="premium">
                                          <thead>
                                             <tr>
                                                <th class="text-center iq-price-head"></th>
                                                   <th class="text-center iq-price-head free">
                                                      <div class="iq-price-box">
                                                         <span class="">Free</span>
                                                      </div>
                                                   </th>
                                                   <th class="text-center iq-price-head premium">
                                                      <div class="iq-price-box">
                                                         <span class="">Premium</span>
                                                      </div>
                                                   </th>
                                                   <th class="text-center iq-price-head basic">
                                                      <div class="iq-price-box active">
                                                         <span class="">Basic</span>
                                                      </div>
                                                   </th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                          <tr>
                                             <th class="text-left" scope="row"> Ad Free Entertainment</th>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="text-left" scope="row"> American Tv Shows</th>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="text-left" scope="row"> Hollywood Movies</th>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="text-left" scope="row"> New Movies</th>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="text-left" scope="row"> Streamit Special</th>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                <i class="fa fa-check-circle-o"></i>
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                <i class="fa fa-times-circle"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="text-left" scope="row"> Video Quality</th>
                                             <td class="text-center iq-child-cell">
                                                SD(480p)
                                             </td>
                                             <td class="text-center iq-child-cell">
                                                FHD(1080p)
                                             </td>
                                             <td class="text-center iq-child-cell active">
                                                HD(720p)
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="iq-price-bottom">
                                    <div class="iq-select-price row">
<?php
$sql = "SELECT *  FROM `tbl_plans` WHERE `isdel` = 1;";
$rl=dbset($sql,1);
while($row = mysqli_fetch_array($rl))
{
?>

                                       <div onclick="showDetails(this)" class="col-lg-4 col-md-6 col-sm-12" data-plan="<?php echo $row[0] ?>">
                                          <div class="iq-price-rate-wrap">
                                             <i class="fa fa-check-square"></i>
                                                <div class="iq-price-label">
                                                   <span class="type1"><?php echo $row[1] ?></span>
                                                   <div class="iq-price-rate text-white d-flex align-items-end justify-content-center flex-wrap">
                                                      <h3 class="mr-2">₹ <?php echo $row[2] ?></h3>
                                                      <small>/  <?php echo $row[3] ?></small></div>
                                                </div>
                                          </div>
                                       </div>
<?php

}
?>

                                     
                                    </div>
                                    <div class="align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.3">
                                       <a id="subpln" href="sign-up.html" class="btn btn-hover iq-button">Subscribe</a>
                                    </div>
                                 </div>
                              </div>                        
                        </div>
                     </div>   
                  </div>
               </main>
           </div>
         </div>
      </div>
      <script>
function showDetails(animal) {
  var animalType = animal.getAttribute("data-plan");
  $("#subpln").attr("href", "payment/?bk="+animalType);
}
</script>
<?php
include 'footer.php';
?>