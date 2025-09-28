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
    public function create($data){
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
}
