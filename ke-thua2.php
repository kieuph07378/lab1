<?php
    class anhtrai{
        public function an(){
            echo "Anh ấy đang ăn cơm";
        }
    }
    class emtrai extends anhtrai {
        public function an(){
            echo "Anh ấy không có gì để ăn";
        }
    }
    $Emtrai = new emtrai();
    echo $Emtrai->an();
?>