<?php
require("base_controller.php");
require_once __DIR__ . '/../models/Product.php';
class HomeController extends BaseController
{
    function __construct()
    {
        $this->folder = "home";
    }

    public function index()
    {
        $this->render("index");
    }

    public function menu(){
        $productModel = new Product();
        $products = $productModel->getAll();
        $this->render("menu", ['products' => $products]);
    }

    public function contact(){
        $this->render("contact");
    }

    public function error()
    {
        $this->render("error");
    }
}
