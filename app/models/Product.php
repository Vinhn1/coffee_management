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

        // Tim sp ID
        public function findById($id)
        {
            $sql = "SELECT sp.masp, sp.tensanpham, sp.image, cthd.giaban AS giatien
                FROM sanpham sp
                INNER JOIN chitiethoadon cthd ON sp.masp = cthd.masanpham
                WHERE sp.masp = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // Update Product
        public function update($id, $tensanpham, $giatien, $image){
            // Cập nhật bản sản phẩm
            $sql1 = "UPDATE sanpham SET tensanpham = :tensanpham, image = :image WHERE masp = :id";
            $stmt1 = $this->conn->prepare($sql1);
            $stmt1->execute([
                ":tensanpham" => $tensanpham,
                ":image" => $image,
                ":id" => $id
            ]);

            // Cập nhật giá bán trong bản chi tiết hóa đơn 
            $sql2 = "UPDATE chitiethoadon SET giaban = :giatien WHERE masanpham = :id";
            $stmt2 = $this->conn->prepare($sql2);
            $stmt2->execute([
                ":giatien" => $giatien,
                ":id" => $id
            ]);
        }

        // Delete 
        public function delete($id){
            // Xóa chi tiết hóa đơn liên quan
            $sql1 = "DELETE FROM chitiethoadon WHERE masanpham = :id";
            $stmt1 = $this->conn->prepare($sql1);
            $stmt1->execute([':id' => $id]);

            // Xóa sản phẩm
            $sql2 = "DELETE FROM sanpham WHERE masp = :id";
            $stmt2 = $this->conn->prepare($sql2);
            $stmt2->execute([':id' => $id]);
        }
    }
?>