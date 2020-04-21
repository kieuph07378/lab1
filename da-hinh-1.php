<?php
     class sv{
         function say(){
             echo "Xin chào mọi người";
         }
     }
class student extends sv{

}

class meo extends student{
    function say(){
        echo "<br> Meo Meo";
    }
}
class cho extends student{
    function say()
    {
        echo "<br> Gâu Gâu";
    }
    
}
$kieu = new student();
$kieu->say();
$lili = new meo();
$lili->say();
$alaska = new cho();
$alaska->say();
?>