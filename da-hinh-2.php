<?php
class fpt {
    
}

class Poly extends fpt{
    function xinchao(){
        echo "Trần Hữu Thiện";
    }
}

class sv extends Poly{
    
}

class SinhVien extends sv{
    function xinchao(){
        echo "Xin Chào Thế Giới";
    }
}

$cuong = new SinhVien();
$cuong->xinchao();
echo"<br>";
$cuong = new sv();
$cuong->xinchao();


?>