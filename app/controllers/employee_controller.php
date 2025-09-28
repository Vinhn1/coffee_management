<?php
    require_once('base_controller.php');
    require_once __DIR__ . "/../models/Employee.php";
    class EmployeeController extends BaseController{
        function __construct()
        {
            // Gọi đến folder trong views
            $this->folder = "employee";
        }

        // Lấy dữ liệu từ moodle getAll hiển thị ra view
        public function list(){
            $employeeModel = new Employee();
            $employee = $employeeModel->getAll();
            $this->render("list", ['employees' => $employee]);
        }

        // Create 
        public function create(){
            // $this->render("create");
            if($_SERVER['REQUEST_METHOD'] == "POST"){
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
                $success = $employeeModel->create($data);

                if($success){
                    header("Location: index.php?controller=employee&action=list");
                }else{
                    echo "Thêm Nhân Viên Thất Bại";
                }

            }else{
                // Hiển thị form create
                $this->render("create");
            }
        }
    }
?>