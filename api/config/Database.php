<?php

namespace api\config\Database;
// Используем для подключения к базе данных MySQL
use PDO;

class Database
{
    // Учётные данные базы данных
    private $host = "localhost";
    private $db_name = "authentication_jwt";
    private $username = "root";
    private $password = "";
    public $conn;

    // Получаем соединение с базой данных
    public function getConnection()
    {
        return new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    }
}