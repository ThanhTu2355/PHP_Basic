<?php
    class PhuongTrinhBacNhat{
        public $hsa;
        public $hsb;

        function __construct($a, $b){
            $this->hsa = $a;
            $this->hsb = $b;
        }

        public function giaiPT(){
            if ($this->hsa == 0) {
                if ($this->hsb == 0) {
                    echo "Phương trình vô số nghiệm";
                } else {
                    echo "Phương trình vô nghiệm";
                }
            } else {
                $nghiem = -$this->hsb / $this->hsa;
                echo "Phương trình có nghiệm x = $nghiem";
            }
        }
    }

    $pt1 = new PhuongTrinhBacNhat(0, 0);
    $pt1->giaiPT();
    echo "<br>";

    $pt1 = new PhuongTrinhBacNhat(0, 2);
    $pt1->giaiPT();
    echo "<br>";

    $pt1 = new PhuongTrinhBacNhat(2, 3);
    $pt1->giaiPT();
    echo "<br>";


?>