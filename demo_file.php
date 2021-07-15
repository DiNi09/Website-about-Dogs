<?php
class Student
{
	public $sid;
	public $name;
	public $email;
	public $address;
}

$student=new Student();

$Student->sid='IT18104936';
$Student->name='Dinithi';
$Student->email='dinithi@gmail.com';
$Student->address='Beruwala';

$myJSON = json_encode($student);

echo $myJSON;

?>