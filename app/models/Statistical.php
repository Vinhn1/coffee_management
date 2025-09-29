<?php
require_once __DIR__ . "/../../config/db.php";
 class Statistical{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    // Hàm thống kê danh thu theo nhân viên 
    public function getRevenueByEmployee(){
        $sql =
            " SELECT 
                nv.id_nhanvien,
                nv.ten_nhanvien,
                SUM(ct.soluongban * ct.giaban) AS doanhthu
            FROM nhanvien nv
            JOIN hoadon hd ON nv.id_nhanvien = hd.id_nhanvien
            JOIN chitiethoadon ct ON ct.sohoadon = hd.soHD
            GROUP BY nv.id_nhanvien, nv.ten_nhanvien
            ORDER BY doanhthu DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 }

?>