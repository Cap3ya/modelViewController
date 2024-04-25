<?php

namespace Afpa\Repository;

use PDO;
use PDOException;

class SPDO
{
    public static $instance = null;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            try {
                self::$instance = new PDO(
                    dsn: "mysql:host=localhost;dbname=cyril;port=3306",
                    username: "root",
                    password: "capeya"
                );
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }
}
