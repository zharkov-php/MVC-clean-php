<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.09.2017
 * Time: 13:18
 */

include_once ROOT . '/models/Task.php';


class TaskController
 {

        public function actionView($taskId)
     {
                $tasks = Task::getTaskById($taskId);
                require_once(ROOT . '/views/task/view.php');
                return true;
     }
 
 } 