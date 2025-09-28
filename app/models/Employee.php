<?php
require_once __DIR__ . "/../../config/db.php";
class Employee
{
    private $conn;
    function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    // getAll employee
    public function getAll()
    {
        $sql = "SELECT * FROM nhanvien";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
