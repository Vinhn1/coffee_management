<?php
    class BaseController{
        // Thư mục views
        protected $folder;
        function __construct(){}
        // Hàm render
        public function render($file, $data = []){
            // Tạo đường dẫn đến file views
            $view_file = __DIR__ . "/app/views/" . $this->folder . "/" . $file . ".php";

            // Kiểm tra xem file có tồn tại hay không 
            if(is_file($view_file)){
                // Biến data thành các biến con
                extract($data);

                ob_start();
                require_once($view_file);
                $content = ob_get_clean();
                require_once(__DIR__ . "/../views/layout/application.php");
            }else{
                header("Location: index.php?controller=home&action=error");
            }
        }
    }
?>