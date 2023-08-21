<?php
include 'header.php';
$uid= $_SESSION['user'];
$sql = "SELECT *  FROM `tbl_user` WHERE `uid` LIKE '$uid';";
$row=dbset($sql,4);

if(isset($_GET['cal']))
{
   $id=$_GET['cal'];
   $sql="DELETE FROM tbl_sub WHERE `tbl_sub`.`sid` = $id";
   dbset($sql,1);

   $sql2 = "UPDATE `tbl_user` SET `types` = '0' WHERE `tbl_user`.`uid` = $uid;";
   dbset($sql2,1);

}

?>
 <!-- Slider Start -->
 <section class="m-profile setting-wrapper">        
         <div class="container">
            <h4 class="main-title mb-4">Account Setting</h4>
            <div class="row">
                  <div class="col-lg-4 mb-3">
                     <div class="sign-user_card text-center">
                        <img src="images/user/user.jpg" class="rounded-circle img-fluid d-block mx-auto mb-3" alt="user" loading="lazy">
                        <h4 class="mb-3"><?php echo  $_SESSION['uname']?></h4>
                     
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="sign-user_card">
                        <h5 class="mb-3 pb-3 a-border">Personal Details</h5>
                        <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-md-8">
                                 <span class="text-light font-size-13">Email</span>
                                 <p class="mb-0"><?php echo $row[2] ?></p>
                              </div>   
                            
                        </div>
                        <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-md-8">
                                 <span class="text-light font-size-13">Password</span>
                                 <p class="mb-0">**********</p>
                              </div>
                              <div class="col-md-4 text-md-right text-left">
                                 <a href="passwordphp.php?u=<?php echo $uid ?>" class="text-primary">Change</a>
                              </div>
                        </div>
 <?php
$sql = "SELECT *  FROM `tbl_sub` WHERE `user` = $uid AND `isdel` = 1;";
$db=dbset($sql,2);
 ?>
                      
                       
                        <h5 class="mb-3 mt-4 pb-3 a-border">Plan Details</h5>
<?php
    if($db==0)
    {
?>
                        <div class="row justify-content-between mb-3">
                              <div class="col-md-8">
                                 <p>Premium</p>                                
                              </div>
                              <div class="col-md-8 r-mb-15">
                                 <a href="plans.php" class="btn btn-hover">Subscribe</a>
                              </div>
                             
                        </div>
 <?php
    }
    else
    {
        $rl=dbset($sql,3);
 ?>
                    <div class="row justify-content-between mb-3">
                              <div class="col-md-8">
                                 <p>Premium</p>                                
                              </div>
                              <div class="col-md-8 r-mb-15">
                                 <a href="?cal=<?php echo $rl[0] ?>" class="btn btn-hover">Cancel Membership</a>
                              </div>
                              <div class="col-md-4 text-md-right text-left">
                                 <a href="plans.php" class="text-primary">Change Plan</a>
                              </div>
                        </div>
 <?php
    }
 ?>
                     </div>
                  </div>
            </div>
         </div>
      </section>
<?php
include 'footer.php';
?>