<?php

namespace Core;

use PDO;
use App\Config;

/**
 * Base model
 */
abstract class Model
{

    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            try {
                $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
                $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

                return $db;

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        //try exception when error occurs
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}
