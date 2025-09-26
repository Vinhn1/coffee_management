<?php
    require_once('./constants.php');
    class Database{
        private static $instance = null;
        private $conn;

        // Để private không cho tạo đối tượng new Database() trực tiếp bên ngoài
        private function __construct()
        {
            try{
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
                $this->conn = new PDO($dsn, DB_USER, DB_PASS);

                // Thiet lap che do bao loi
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Tắt giả lập tăng tính an toàn khi chạy câu lệnh sql
                $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }catch(PDOException $e){
                die("Lỗi kết nối: " . $e->getMessage());
            }
        }

        // Singleton: Lấy thể hiện duy nhất
        public static function getInstance()
        {
            if (self::$instance == null) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        // Lấy kết nối PDO
        public function getConnection(){
            return $this->conn;
        }
    }
?>