<?php
include "db.php" ;
$sql="select * from category";
$query=mysqli_query($con,$sql);
//$data=mysqli_fetch_array($query);
//$data=mysqli_fetch_assoc($query);
//print_r($data);

//echo  $data['category'];

//exit();


?>

<?php
include "head.php" ;
?>

<body>
    <!-- Left Panel -->

   <?php
   include "sidebar.php" ;

   ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php
            include "topbar.php" ;
        ?>
        
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                

                <div class="col-lg-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Category</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                   <?php
                                        while($data=mysqli_fetch_assoc($query)){

                                            ?>
                                            

                                             <tr>
                                        <th scope="row"><?php echo $data['id']; ?> </th>
                                        <td><?php echo $data['category']; ?></td>
                                        <td><a href="edit-category.php?id=<?php echo $data['id'] ;?>" class="btn btn-success">Edit</a> <a href="delete-category.php?catid=<?php echo $data['id'] ;?>" class="btn btn-danger">Delete</a></td>
                                        
                                    </tr>
                                    <?php

                                        }

                                   ?>

                                            

                                             
                                   
                                            
                                           


                                  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
               
            </div>




            
          

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

  <?php
include "footer.php" ;
  ?>