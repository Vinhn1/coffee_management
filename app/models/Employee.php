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

    // create
    // $data là một mảng chứa thông tin nhân viên cần thêm (được truyền từ Controller).
    public function create($data)
    {
        $sql = "INSERT INTO nhanvien(id_nhanvien, ten_nhanvien, gioitinh, ngaysinh, sdt, chucvu, luongcoban, ngayvaolam, trangthai) VALUES (:id, :ten, :gioitinh, :ngaysinh, :sdt, :chucvu, :luongcoban, :ngayvaolam, :trangthai)";

        // prepare($sql) chuẩn bị câu lệnh SQL để thực thi, nhưng chưa truyền giá trị thật.
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute($data);
        // execute([...]) truyền dữ liệu từ mảng $data vào các placeholder :id, :ten, :sdt... trong SQL.
        // return $stmt->execute([
        //     ':id' => $data['id'],
        //     ':ten' => $data['ten'],
        //     ':gioitinh' => $data['gioitinh'],
        //     ':ngaysinh' => $data['ngaysinh'],
        //     ':sdt' => $data['sdt'],
        //     ':chucvu' => $data['chucvu'],
        //     ':luongcoban' => $data['luongcoban'],
        //     ':ngayvaolam' => $data['ngayvaolam'],
        //     ':trangthai' => $data['trangthai'],
        // ]);
    }

    // Tìm kiếm nhân viên theo ID
    public function getById($id){
        $sql = "SELECT * FROM nhanvien WHERE id_nhanvien = :id";
        $stmt = $this->conn->prepare($sql);
        // bindParam(':id', $id) dùng để gắn biến $id vào placeholder :id trong câu SQL
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tìm kiếm nhân viên theo Name
    public function searchByName($name){
        $sql = "SELECT * FROM nhanvien WHERE ten_nhanvien LIKE :name";
        $stmt = $this->conn->prepare($sql);
        $like = "%" . $name . "%"; // Tìm theo chuỗi hoặc theo chữ cái
        $stmt->bindParam(':name', $like);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_ASSOC); // trả về nhiều nhân viên 
    }

    // Hàm kiểm tra xem id đó tồn tại hay chưa
    public function exists($id)
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM nhanvien WHERE id_nhanvien = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetchColumn() > 0;
    }
}
