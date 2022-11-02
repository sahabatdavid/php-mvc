<?php

class Database {
    private static $_instance = null;
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=mini_framework', 'miaw', 'dadada');
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Database();
        }

        return self::$_instance;
    }

    public function index($table) {
        $query = "SELECT * FROM $table";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}