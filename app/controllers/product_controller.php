<?php
    require_once("base_controller.php");
    require_once __DIR__ . "/../models/Employee.php";
    class ProductController extends BaseController{
        function __construct()
        {
            $this->folder = "product";
        }

        public function list(){
            $this->render("list");
        }
    }


?>