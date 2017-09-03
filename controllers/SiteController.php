<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.09.2017
 * Time: 12:16
 */

//include_once ROOT . '/models/Task.php';


class SiteController {

    public function actionIndex()
 {
 

     require_once(ROOT . '/views/site/index.php');

     return true;
 }

    /**
     * @return bool
     * my test view
     * Site/test
     */
     public function actionTest()
     {

            require_once(ROOT . '/views/site/test.php');
            return true;
     }

    public function actionTz()
    {

        require_once(ROOT . '/views/site/tz.php');
        return true;
    }

 
 } 