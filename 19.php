<?php
    //Khai báo class cha
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
    //Khai báo class con kế thừa từ class con
    class XeTai extends Xe{
        public $trongTai;
        public $donGia;
        function __construct($tx, $nhsx, $nsx, $tt, $dg){
            //Gọi construct của class cha
            parent::__construct($tx, $nhsx, $nsx);

            $this->trongTai = $tt;
            $this->donGia = $dg;
        }
        public function inThongTin(){
            parent::inThongTin(); //Gọi hàm inThongTin ở class cha
            echo " - Trọng tải: $this->trongTai - Đơn giá: $this->donGia";
        }
    }

    $xe = new XeTai("Phương Trang", "Kim Long", 2024, 4000, 250000);
    $xe->inThongTin();
?>