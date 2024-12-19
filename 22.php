<?php
    class PhuongTrinhBacHai{
        public $hsa;
        public $hsb;
        public $hsc;

        function __construct($a, $b, $c){
            $this->hsa = $a;
            $this->hsb = $b;
            $this->hsc = $c;
        }

        public function giaiPT(){
            if ($this->hsa == 0) {
                // Giải phương trình bậc nhất bx + c = 0
                if ($this->hsb == 0) {
                    if ($this->hsc == 0) {
                        echo "Phương trình vô số nghiệm";
                    } else {
                        echo "Phương trình vô nghiệm";
                    }
                } else {
                    $nghiem = -$this->hsc / $this->hsb;
                    echo "Phương trình có nghiệm x = $nghiem";
                }
            } else {
                $delta = $this->hsb * $this->hsb - 4 * $this->hsa * $this->hsc;
                if ($delta < 0) {
                    echo "Phương trình bậc 2 vô nghiệm<br>";
                } elseif ($delta == 0) {
                    $nghiemKep = -$this->hsb / (2 * $this->hsa);
                    echo "Phương trình bậc 2 có nghiệm kép x = $nghiemKep<br>";
                } else {
                    $canDelta = sqrt($delta);
                    $x1 = (-$this->hsb + $canDelta) / (2 * $this->hsa);
                    $x2 = (-$this->hsb - $canDelta) / (2 * $this->hsa);
                    echo "Phương trình bậc 2 có hai nghiệm phân biệt: x1 = $x1, x2 = $x2<br>";
                }
            }
        }
    }

    $pt1 = new PhuongTrinhBacHai(0, 2, 3);
    $pt1->giaiPT();
    echo "<br>";

    $pt1 = new PhuongTrinhBacHai(1, 2, -3);
    $pt1->giaiPT();
    echo "<br>";

    $pt1 = new PhuongTrinhBacHai(2, 3, 7);
    $pt1->giaiPT();
    echo "<br>";


?>