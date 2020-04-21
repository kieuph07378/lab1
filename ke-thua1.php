<?php
        class xe{
            public $mausac = "Màu đen";
            public function banhxe(){
                return "Bánh xe làm bằng cao xu";
            }
            public function tocdo(){
                return "Vận tốc tối đa là 100km/h";
            }
        }
        class xemay extends xe {
            public function mauxemay(){
                return $this->mausac;
            }
        }

        $xewave = new xemay();
        echo $xewave->mauxemay();
        echo "<br>" .$xewave->tocdo();
?>