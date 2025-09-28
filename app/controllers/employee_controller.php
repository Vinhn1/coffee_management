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
    }
?>