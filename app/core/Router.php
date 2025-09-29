<?php
class Router
{
    public function run()
    {
        $controller = $_GET['controller'] ?? 'home';
        $action = $_GET['action'] ?? 'index';

        // Danh sách controller và action 
        $controllerList = array(
            'home' => ['index', 'error'],
            'employee' => ['list', 'create', 'search', 'update', 'deactivete', 'error'],
            'product' => ['list', 'update', 'delete', 'error'],
        );

        // Kiểm tra nếu không có controller tồn tại thì trả về index/error
        if (!array_key_exists($controller, $controllerList) || !in_array($action, $controllerList[$controller])) {
            $controller = 'home';
            $action = 'error';
        }

        // Nạp file php của controller tương ứng (home_controller.php)
        include_once __DIR__ . "/../controllers/" . $controller . "_controller.php";

        // Khởi tạo đối tượng controller và gọi action (HomeController)
        $className = ucfirst($controller) . "Controller";
        $controllerObj = new $className();

        if (isset($_GET['id'])) {
            $controllerObj->$action($_GET['id']);
        } else {
            $controllerObj->$action();
        }
    }
}
?>