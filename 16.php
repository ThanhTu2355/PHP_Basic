<?php
    //Khai báo class
    class Xe{
        //Khai báo các thuộc tính
        public $tenXe;
        public $nhaSanXuat;
        public $namSanXuat;
        //Khai báo hàm
        public function inThongTin(){
            echo "<br> Thông tin xe: $this->tenXe - Nhãn hiệu: $this->nhaSanXuat - Năm sản xuất: $this->namSanXuat";
        }
    }
    //Khai báo đối tượng thuộc class và gán giá trị
    $xe1 = new Xe();
    $xe1->tenXe = "VF8";
    $xe1->nhaSanXuat = "VinFast";
    $xe1->namSanXuat = 2023;
    //Gọi hàm trong class
    $xe1->inThongTin();
?>