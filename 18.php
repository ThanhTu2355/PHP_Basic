<?php
    //Khai báo class
    class Xe{
        //Khai báo các thuộc tính
        private $tenXe;
        private $nhaSanXuat;
        private $namSanXuat;

        //Xây dụng hàm set, get để truy xuất thuộc tính
        //Hàm get
        public function getTenXe(){
            return $this->$tenXe;
        }
        public function getNhaSanXuat(){
            return $this->$nhaSanXuat;
        }
        public function getNamSanXuat(){
            return $this->$namSanXuat;
        }
        
        //Hàm set
        public function setTenXe($val){
            $this->$tenXe = $val;
        }
        public function setNhaSanXuat($val){
            $this->$nhaSanXuat = $val;
        }
        public function setNamSanXuat($val){
            $this->$namSanXuat = $val;
        }


        //Khai báo hàm
        public function inThongTin(){
            echo "<br> Thông tin xe: $this->tenXe - Nhãn hiệu: $this->nhaSanXuat - Năm sản xuất: $this->namSanXuat";
        }
    }
    //Khai báo đối tượng thuộc class và gán giá trị
    $xe1 = new Xe();
    $xe1->setTenXe("VF8");
    $xe1->setNhaSanXuat("VinFast");
    $xe1->setNamSanXuat(2024);
    
    //Gọi hàm trong class
    $xe1->inThongTin();
?>