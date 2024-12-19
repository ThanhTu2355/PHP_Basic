<?php
    //Khai báo class
    class Xe{
        //Khai báo các thuộc tính
        public $tenXe;
        public $nhaSanXuat;
        public $namSanXuat;
        //Khai báo hàm khởi tạo
        function __construct($tx, $nhsx, $nsx){
            $this->tenXe = $tx;
            $this->nhaSanXuat = $nhsx;
            $this->namSanXuat = $nsx;
        }
        //Khai báo hàm
        public function inThongTin(){
            echo "<br> Thông tin xe: $this->tenXe - Nhãn hiệu: $this->nhaSanXuat - Năm sản xuất: $this->namSanXuat";
        }
    }
    //Khai báo đối tượng thuộc class và gán giá trị
    $xe1 = new Xe("VF5", "VinFast", 2024);
    // $xe1->tenXe = "VF8";
    // $xe1->nhaSanXuat = "VinFast";
    // $xe1->namSanXuat = 2023;
    //Gọi hàm trong class
    $xe1->inThongTin();
?>