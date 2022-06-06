<?php
class Table
{
	function __construct()
	{
		$this->enc=new encriptions;
		foreach(include('database.php')as $database)
		{
			$this->{strtoupper($database)}=new INSERT($database);
		}
	}
}
?>