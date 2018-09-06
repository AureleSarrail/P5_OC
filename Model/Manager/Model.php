<?php

namespace Model\Manager;

class Model
{
    protected function dbConnect()
    {
        $dataBase = new \PDO(
            'mysql:host=<host>;dbname=<dbName>;charset=utf8',
            '<user>',
            '<password>',
            array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
        );
        return $dataBase;
    }
}
