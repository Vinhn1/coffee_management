<?php
    require_once __DIR__ . "/../../config/db.php";
    class Product{
        private $conn;
        function __construct()
        {
            $this->conn = Database::getInstance()->getConnection();
        }

        public function getAll(){
            $sql = "SELECT sp.masp, sp.tensanpham, sp.image, cthd.giaban AS giatien
            FROM sanpham sp
            INNER JOIN chitiethoadon cthd ON sp.masp = cthd.masanpham";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        
    }
?>