<?php

    //Connect to the MySql database and execute a query
/*
namespace Core;

require base_path("config.php");

use PDO;*/
    class Database
    {
        public $connection;
        public function __construct($config, $username = 'root', $password = '')
        {

           $dsn = 'mysql:' .http_build_query($config,'', ';');



            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        public function query($query, $params=[])
        {

            $statement = $this->connection->prepare($query);

            $statement->execute($params);

            return $statement;

        }

    }
