<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="container-fluid">
<?php foreach ($latestTasks as $task): ?>
                <table class="table table-hover">
                        <thead>
                        <tr>
                                <th>Фото</th>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Задача</th>
                                <th>Статус</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td><img src="/template/images/<?php echo $task['image'];?>" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"></td>
                                <td> <?php echo $task['name'];?><br></td>
                                <td> <?php echo $task['email'];?><br></td>
                                <td><?php echo $task['task'];?><br></td>
                                <td> <?php echo $task['status'];?><button type="button" class="btn btn-primary"><a href="/task/<?php echo $task['id'];?>">
                                            <font color="white">...</font>
                                        </a></button<br></td>

                            </tr>

                        </tbody>
                    </table>
<?php endforeach; ?>
    </div>
    

    <?php include ROOT . '/views/layouts/footer.php'; ?>