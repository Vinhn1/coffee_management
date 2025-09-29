<?php
    require_once('base_controller.php');
    require_once __DIR__ . "/../models/Statistical.php";
    class StatisticalController extends BaseController{
        function __construct()
        {
            $this->folder = "statistical";
        }

        public function list(){
            // $this->render("list");
            $statisModel = new Statistical();
            $data = $statisModel->getRevenueByEmployee();

            // Gửi dữ liệu sang view 
            $this->render('list',  ['revenues' => $data]);
        }
    }
?>