<?php
	class proses{
		function __construct(){
			$server='localhost';
			$user='root';
			$psw='';
			$dbname='kartu_kendali';
			$kon=$this->con=new PDO("mysql:host=$server;dbname=$dbname",$user,$psw);
		}
		function get ($cel=null,$table=null,$property=null){
			$qw="select $cel from $table $property";
			$ret=$this->con->query($qw);
			return $ret;
		}
		function insert($table=null,$val=null){
			$qw="insert into $table values($val)";
			$ret=$this->con->query($qw);
			return $ret;
		}
		function update($table=null,$val=null,$property){
			$qw="update $table set $val where $property";
			$ret=$this->con->query($qw);
			return $ret;
		}
		function delete($table=null,$property=null){
			$qw="DELETE FROM $table WHERE $property";
			$ret=$this->con->query($qw);
			return $ret;
		}
	}
	$db=new proses;
?>
