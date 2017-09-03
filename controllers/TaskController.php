<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.09.2017
 * Time: 13:18
 */




class TaskController
 {

        public function actionView()
     {

                require_once(ROOT . '/views/task/view.php');
                return true;
     }
 
 } 