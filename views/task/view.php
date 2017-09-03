<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.09.2017
 * Time: 13:20
 */
?>

<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container">
    
            <h2>Panel Heading</h2>
            <div class="panel panel-default">
                    <div class="panel-heading">
                            <p><?php echo $tasks['name'];?></p>
                            <p><?php echo $tasks['email'];?></p>
            
                        </div>
                    <div class="panel-body">
            
                            <div class="row">
                                    <div class="col-sm-4">
                                            <img src="/template/images/<?php echo $tasks['image'];?>" class="img-circle" alt="Cinque Te" width="304" height="236">
                                        </div>
                                    <div class="col-sm-8"><?php echo $tasks['task'];?></div>
                                </div>
                        </div>
                </div>
    
        </div>

<?php include ROOT . '/views/layouts/footer.php'; ?> 