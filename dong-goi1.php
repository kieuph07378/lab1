<?php
class Person 
{
		
		public  $fullName = "Phan Hữu Kiều ";
		public $age ;
		
		public static function getFullName()
		{
			  return $this->fullName;
		}
		
} 
$per  = new Person();
echo $per->fullName = "Phan Văn Kiên <br/>";
echo $per->age = 20;
?>