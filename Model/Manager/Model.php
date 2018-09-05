<?php

namespace Model\Manager;

class Model
{
    protected function dbConnect()
    {
        $dataBase = new \PDO(
            'mysql:host=localhost;dbname=blog_asdev;charset=utf8',
            'root',
            '',
            array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
        );
        return $dataBase;
    }
}
