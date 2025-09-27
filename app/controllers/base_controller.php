<?php
class BaseController
{
    // Thư mục views
    protected $folder;
    function __construct() {}
    // Hàm render
    public function render($file, $data = [])
    {
        // Tạo đường dẫn đến file views
        $view_file = __DIR__ . "/../views/" . $this->folder . "/" . $file . ".php";

        // Kiểm tra xem file có tồn tại hay không 
        if (is_file($view_file)) {
            // Biến data thành các biến con
            extract($data);

            // ob_start() → bật bộ đệm (buffer).
            ob_start();
            // nạp view con (vd: error.php, index.php)
            require_once($view_file);
            $content = ob_get_clean();
            require_once(__DIR__ . "/../views/layout/application.php");
        } else {
            // Nếu file lỗi hoặc không tồn tại thì hiển thị thông báo
            if($file != 'error'){
                header("Location: index.php?controller=index&action=error");
                exit();
            }else{
                echo "<h1>File view không tồn tại: {$this->folder}/{$file}.php</h1>";
                exit();
            }
            
        }
    }
}
?>