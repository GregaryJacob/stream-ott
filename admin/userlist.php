<?php
include"adminheader.php";
include "../dbconnection.php";
if (isset($_GET['idb']))
{
    $id=$_GET['idb'];
    $sql = "UPDATE `user` SET `isdel` = '0' WHERE `user`.`uid` = $id";
    mysqli_query($conn,$sql);
    //dbset($sql,1);


}
if (isset($_GET['ida']))
{
    $id=$_GET['ida'];
    $sql = "UPDATE `tbl_user` SET `isdel` = '1' WHERE `tbl_user`.`uid` = $id";
    mysqli_query($conn,$sql);


}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
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
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"></li>
                                            
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Customer subscription & payment report</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">User List</h4>
                                    
                                        <div class="bootstrap-table bootstrap5">
      <div class="fixed-table-toolbar"></div>
      
      <div class="fixed-table-container" style="padding-bottom: 0px;">
      <div class="fixed-table-header" style="display: none;"><table></table></div>
      <div class="fixed-table-body">
      <div class="fixed-table-loading table table-bordered table-hover" style="top: 1px;">
      <span class="loading-wrap">
    
      <span class="animation-wrap"><span class="animation-dot"></span></span>
      </span>
    
      </div>
      <table data-toggle="table" data-page-size="10" data-buttons-class="xs btn-light" data-pagination="true" class="table-bordered table table-hover" style="display: table;">
                                            <thead class="table-light" style="">
                                                <tr>
                                                <th style="" data-field="id"><div class="th-inner ">#</div><div class="fht-cell"></div></th>
                                                <th style="" data-field="id"><div class="th-inner ">Name</div><div class="fht-cell"></div></th>
                                                    <th style="" data-field="id"><div class="th-inner ">Email</div><div class="fht-cell"></div></th>
                                                   
                                                    <th style="" data-field="date"><div class="th-inner ">Plan</div><div class="fht-cell"></div></th>
                                                    <th style="" data-field="date"><div class="th-inner ">Amount</div><div class="fht-cell"></div></th>
                                                    <th style="" data-field="date"><div class="th-inner ">Date Of Activation</div><div class="fht-cell"></div></th>
                                                    <th class="text-center" style="" data-field="user-status"><div class="th-inner ">Action</div>
                                                    <div class="fht-cell"></div></th></tr></thead>
                                        
                                            <tbody>
              <?php

            $sql = "SELECT *  FROM `tbl_user` WHERE `types` = 1 AND `isdel` = 1;";
            $rlt=mysqli_query($conn,$sql);
            $r=0;
            while ($row =mysqli_fetch_array($rlt))
            {
                $r+=1;
                $sql2 = "SELECT *  FROM `tbl_sub` WHERE `user` = $row[0];";
                $ur=mysqli_query($conn,$sql2);//dbset($sql2,3);
                $ur1=mysqli_fetch_array($ur);
                
                $sql3 = "SELECT *  FROM `tbl_plans` WHERE `id` = $ur1[2];";
                $pln=mysqli_query($conn,$sql3);
                $pln1=mysqli_fetch_array($pln);
              ?>
                                            <tr data-index="0">  
            <td><?php echo $r ?></td> 
            <td><?php echo $row [3]." ".$row [4] ?></td>                                  
            <td><?php echo $row [2] ?></td>
          
            <td><?php echo  $pln1 [1] ?></td>
            <td><?php echo  $pln1 [2] ?></td>
            <td><?php echo  $ur1['dates'] ?></td>
            <td class="text-center">
              <?php if($row[6]==1)
              {

              ?>

            <a href="?idb=<?php echo $row[0]?>" class="btn btn-danger waves-effect waves-light">Block</a>
              <?php
              }
              else
              {

              ?>
            <a href="?ida=<?php echo $row[0]?>" class="btn btn-success waves-effect waves-light">Active</a>

       <?php
              }
       ?>
            </td>
        </tr>
    <?php

            }
?>



    
    </tbody>
                                        </table></div>
      <div class="fixed-table-footer"></div>
      </div>
     
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
              
                <!-- end Footer -->

            </div>
        <?php
include "adminfooter.php";
?>