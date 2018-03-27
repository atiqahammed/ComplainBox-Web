<?php  


	/**
	* 
	*/
	class ClassTest
	{
		
		function __construct()
		{
			echo "this is in constructor<br>";
		}

		function print() {
			echo "this is in print function";
		}
	}



$test = new ClassTest();
$test->print();












?>