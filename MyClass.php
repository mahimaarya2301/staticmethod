<?php
	//Class Declaration
	class MyClass{
		//1.Property
		
		//2.Constructor
		public function __construct(){
			echo 'Hello from constructor';//Statement
			echo '<br>';//break line
			//$this->myMethod2();//$this is an internal object
			//echo '<br>';//break line
		}
		//3.Method
		public function myMethod1(){
			echo 'Hello from myMethod1';//Statement
			echo '<br>';//break line
			$this->myMethod2();//$this is an internal object
		}
		public function myMethod2(){
			echo 'Hello from myMethod2'; 
		}
	}
	//Create an external object of the class
	$obj = new MyClass();
	//Access the member using -> member selection operator
	$obj->myMethod1();
?>