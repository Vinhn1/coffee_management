<?php
require_once("base_controller.php");
require_once __DIR__ . "/../models/Product.php";
class ProductController extends BaseController
{
    function __construct()
    {
        $this->folder = "product";
    }

    public function list()
    {
        // $this->render("list");
        $productModel = new Product();
        $product = $productModel->getAll();
        $this->render("list", ["products" => $product]);
    }

    public function create()
    {
        $productModel = new Product();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $masp = $_POST['masp'];
            $tensanpham = $_POST['tensanpham'];
            $giatien = $_POST['giatien'];

            // Xử lý upload ảnh
            $image = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../public/images/product/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = basename($_FILES['image']['name']);
                $targetPath = $uploadDir . $fileName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    $image = $fileName;
                }
            }

            $productModel->create($masp, $tensanpham, $giatien, $image);
            header("Location: index.php?controller=product&action=list");
            exit;
        } else {
            $this->render("create");
        }
    }

    // update
    public function update()
    {
        // $this->render("update");
        $productModel = new Product();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['masp'];
            $tensanpham = $_POST['tensanpham'];
            $giatien = $_POST['giatien'];

            // Xử lý upload ảnh
            $image = '';
            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../public/images/product/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileName = basename($_FILES['image']['name']);
                $targetPath = $uploadDir . $fileName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    $image = $fileName; // Chỉ lưu tên file
                } else {
                    $image = $_POST['old_image'] ?? '';
                }
            } else {
                $image = $_POST['old_image'] ?? '';
            }

            $productModel->update($id, $tensanpham, $giatien, $image);
            // Chuyển hướng hoặc thông báo
            header("Location: index.php?controller=product&action=list");
            exit;
        } else {
            $id = $_GET['id'] ?? null;
            $product = $productModel->findById($id);
            $this->render("update", ['products' => $product]);
        }
    }

    // Xóa sản phẩm
    public function delete($id = null)
    {
        $productModel = new Product();
        if ($id === null) {
            $id = $_GET['id'] ?? null;
        }
        if ($id) {
            $productModel->delete($id);
        }
        header("Location: index.php?controller=product&action=list");
        exit;
    }
}
