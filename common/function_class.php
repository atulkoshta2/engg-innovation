<? class function_class{
	function getday($value)
	{
		$current=strtotime(date('d-m-Y'));
		if($value>=$current)
		{
			$newvalue=$value-$current;
			echo $newvalue/(60*60*24);
			
		}
	}
}
$OBJ=new function_class;