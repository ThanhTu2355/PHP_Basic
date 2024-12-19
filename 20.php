<?php
    //Khai báo class cha
    class Xe{
        //Khai báo các thuộc tính
        public $tenXe;
        public $nhaSanXuat;
        public $namSanXuat;
        public static $soLuong = 0;

        //Khai báo hàm khởi tạo
        function __construct($tx, $nhsx, $nsx){
            $this->tenXe = $tx;
            $this->nhaSanXuat = $nhsx;
            $this->namSanXuat = $nsx;
            self::$soLuong  += 1;
        }
        //Khai báo hàm
        public function inThongTin(){
            echo "<br> Thông tin xe: $this->tenXe - Nhãn hiệu: $this->nhaSanXuat - Năm sản xuất: $this->namSanXuat
                                     - Số lượng xe được tạo:" . self::$soLuong;
        }
    }
    $x1 = new Xe("Xe một", "Hãng 1", 2016);
    $x1->inThongTin();
    $x2 = new Xe("Xe hai", "Hãng 2", 2016);
    $x2->inThongTin();
    //Truy xuất giá trị thuộc tính static bên ngoài class => truy xuất phương thức static
    //bên trong và bên ngoài class tương tự như thuộc tính static
    echo "<br>Tổng số xe đã tạo" . Xe::$soLuong;


?>