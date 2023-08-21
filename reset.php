<?php
include 'header.php';
$msg="";
if(isset($_GET['res']))
{

    $msg="Reset link send to email";
}

?>
 <!-- Slider Start -->
 
 <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center">
               <div class="sign-user_card ">                    
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 m-auto">
                        <span style="color:white"><?php echo $msg ?></span>
                        <h3 class="mb-3 text-center">Reset Password</h3>
                        <p class="text-body">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                        <form class="mt-4" action="?">
                           <div class="form-group">                                 
                              <input type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" autocomplete="off" required>
                           </div>                           
                           <div class="sign-info">
                              <button name="res" type="submit" class="btn btn-hover">Reset</button>                                                            
                           </div>                                       
                        </form>
                     </div>
                  </div>                    
               </div>
            </div>
         </div>
         <!-- Sign in END -->
         <!-- color-customizer -->
      </div>
   </section>
<?php
include 'footer.php';
?>