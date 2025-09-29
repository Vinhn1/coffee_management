<?php
require_once('base_controller.php');
require_once __DIR__ . "/../models/Employee.php";
class EmployeeController extends BaseController
{
    function __construct()
    {
        // Gọi đến folder trong views
        $this->folder = "employee";
    }

    // Lấy dữ liệu từ moodle getAll hiển thị ra view
    public function list()
    {
        $employeeModel = new Employee();
        $employee = $employeeModel->getAll();
        $this->render("list", ['employees' => $employee]);
    }

    // Create 
    public function create()
    {
        // $this->render("create");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'id' => $_POST['id'],
                'ten' => $_POST['ten'],
                'gioitinh' => $_POST['gioitinh'],
                'ngaysinh' => $_POST['ngaysinh'],
                'sdt' => $_POST['sdt'],
                'chucvu' => $_POST['chucvu'],
                'luongcoban' => $_POST['luongcoban'],
                'ngayvaolam' => $_POST['ngayvaolam'],
                'trangthai' => $_POST['trangthai'],
            ];


            $employeeModel = new Employee();
            // Gọi hàm kiểm tra tồn tại
            if ($employeeModel->exists($data['id'])) {
                $error = "ID nhân viên đã tồn tại, vui lòng nhập ID khác.";
                $this->render("create", ['error' => $error, 'old' => $data]);
                return;
            }

            $success = $employeeModel->create($data);

            if ($success) {
                header("Location: index.php?controller=employee&action=list");
                exit;
            } else {
                $error = "Thêm Nhân Viên Thất Bại";
                $this->render("create", ['error' => $error, 'old' => $data]);
            }
        } else {
            // Hiển thị form create
            $this->render("create");
        }
    }

    // Tìm kiếm nhân viên theo id or name
    public function search()
    {
        $employeeModel = new Employee();
        $employees = [];
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $type = $_POST['type']; // id or name
            $keyword = trim($_POST['keyword']);

            if ($keyword) {
                if ($type == 'id') {
                    $employee = $employeeModel->getById($keyword);

                    if ($employee) {
                        $employees[] = $employee; // Đưa về mảng hiển thị chung
                    } else {
                        $error = "Không tìm thấy nhân viên với ID = $keyword";
                    }
                } elseif ($type == 'name') {
                    $employees = $employeeModel->searchByName($keyword);
                    if (!$employees) {
                        $error = "Không tìm thấy nhân viên có tên chứa '$keyword'";
                    }
                }
            } else {
                $error = "Vui lòng nhập từ khóa tìm kiếm";
            }

            $this->render("search", [
                'employees' => $employees,
                'error' => $error
            ]);
        }
    }


    // Update
    public function update()
    {
        // $this->render("update");
        $employeeModel = new Employee();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'id_nhanvien' => $_POST['id_nhanvien'],
                'ten_nhanvien' => $_POST['ten_nhanvien'],
                'gioitinh' => $_POST['gioitinh'],
                'ngaysinh' => $_POST['ngaysinh'],
                'sdt' => $_POST['sdt'],
                'chucvu' => $_POST['chucvu'],
                'luongcoban' => $_POST['luongcoban'],
                'ngayvaolam' => $_POST['ngayvaolam'],
                'trangthai' => $_POST['trangthai'],
            ];

            $success = $employeeModel->update($data);

            if ($success) {
                header("Location: index.php?controller=employee&action=list&success=1");
                exit;
            } else {
                $error = "Cập nhật nhân viên thất bại";
                $this->render("update", ["employee" => $data]);
            }
        } else {
            // Lấy id từ GET để hiển thị thông tin cần sửa
            $id = $_GET['id_nhanvien'] ?? null;
            $employee = $employeeModel->getById($id);
            if($employee && is_array($employee)){
                $this->render("update", ["employee" => $employee]);
            }else{
                $error = "Không tìm thấy nhân viên với ID này";
                $this->render("update", ["error" => $error, "employee" => null]);
            }
        }
    }


    // Update Trạng thái nhân viên
    public function deactivete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $employeeModel = new Employee();
            $employeeModel->deactivete($id);
        }
        header("Location: index.php?controller=employee&action=list");
    }
}
?>