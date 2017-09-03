<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.09.2017
 * Time: 11:58
 */



class Db
 {

        public static function getConnection()
     {
                $paramsPath = ROOT . '/config/db_params.php';
                $params = include($paramsPath);


                $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
                $db = new PDO($dsn, $params['user'], $params['password']);

                return $db;
    }
 }