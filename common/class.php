<?php
class INSERT
{
	function __construct($table)
	{
		global $conn;
		$this->conn=$conn;
		$this->table=$table;
		$this->path="https://vakeelsahab.loopdevelopers.in/image/";
	}
	///////////////
	function q($qry)
	{
		$sql=mysqli_query($this->conn,$qry);
			return $sql;
	}
	////////////////////////////////////////
	function fa_q($qry)
	{
		$array=array();
		$sql=mysqli_query($this->conn,$qry);
		while($fetch=mysqli_fetch_assoc($sql))
		{
			array_push($array,$fetch);
		}
			return $array;
	}
	////////////////////////////
	function f_q($qry)
	{
		$fetch=mysqli_fetch_assoc(mysqli_query($this->conn,$qry));
			return $fetch;
	}///////////
	function num($fill1)
	{
		if(!empty($fill1))
		{
			$fill="WHERE $fill1";
		}
		$qry="SELECT * FROM `$this->table` $fill ";
		$fetch=mysqli_num_rows(mysqli_query($this->conn,$qry));
			return $fetch;
	}
	//////////////////////////////////
	function count($fil=[],$debug=false)
	{
		if(!empty($fil))
		{
			$cond="";
			$i=1;
			foreach($fil as $key =>$value)
			{
				if($i==1)
				{
					$cond.="`$key`".'='."'$value'";
				}
				else{
					$cond.=" AND "."`$key`".'='."'$value'";
				}
				$i++;
			}
			if($debug==true)
			{
				echo $qry="SELECT * FROM `$this->table` WHERE $cond";
			}
			else{
				$qry="SELECT * FROM `$this->table` WHERE $cond";
			}
			
		}
        else{
			if($debug==true)
			{
				 echo $qry="SELECT * FROM `$this->table` ";
			}
			else{
				 $qry="SELECT * FROM `$this->table` ";
			}
           
        }
		$fetch=mysqli_num_rows(mysqli_query($this->conn,$qry));
			return $fetch;
	}
	////////////////////////
	function delete($fil,$sdsd=false)
	{
		if($sdsd==true)
		{
			$cond="";
			$i=1;
			foreach($fil as $key =>$value)
			{
				if($i==1)
				{
					$cond.="`$key`".'='."'$value'";
				}
				else{
					$cond.=" AND "."`$key`".'='."'$value'";
				}
				$i++;
			}
			 $qry="DELETE FROM `$this->table` WHERE $cond";
		}
		else{
			$qry="DELETE FROM `$this->table`";
			if(!empty($fil))
			{
				$qry.="WHERE $fil";
			}
		}
		$sql=mysqli_query($this->conn,$qry);
			return $sql;
	}
	//////////////////////
	function get($fil)
	{
		$array=array();
		if(!empty($fil))
		{
			$cond="";
			$i=1;
			foreach($fil as $key =>$value)
			{
				if($i==1)
				{
					$cond.="`$key`".'='."'$value'";
				}
				else{
					$cond.=" AND "."`$key`".'='."'$value'";
				}
				$i++;
			}
			 $qry="SELECT * FROM `$this->table` WHERE $cond";
		}
		else
		{
			$qry="SELECT * FROM `$this->table`";
		}
		$sql=mysqli_query($this->conn,$qry);
		while($fetch=mysqli_fetch_assoc($sql))
		{
			$fetch['path']=$this->path;
			array_push($array,$fetch);
		}
			return $array;
	}
	////////////////////////
	function all($fil)
	{
		$array=array();
		if(!empty($fil))
		{
			$qry="SELECT * FROM `$this->table` WHERE $fil";
		}
		else
		{
			$qry="SELECT * FROM `$this->table`";
		}
		$sql=mysqli_query($this->conn,$qry);
		while($fetch=mysqli_fetch_assoc($sql))
		{
			array_push($array,$fetch);
		}
			return $array;
	}
	//////////////////////////
	function fetch()
	{
		$array=array();
		$qry="SELECT * FROM `$this->table`";
		$sql=mysqli_query($this->conn,$qry);
		while($fetch=mysqli_fetch_assoc($sql))
		{
			$fetch['path']=$this->path;
			array_push($array,$fetch);
		}
			return $array;
	}
	///////////////
	function insert($value,$debug=false)
	{
		$i=0;
		foreach($value as $key=>$values)
		{
			if($i==0)
			{
				$comma="";
			}
			else{
				$comma=",";
			}
			$data=$data.$comma."`$key`='$values'";
			$i++;
		}
        if($debug==true)
        {
           echo  $qry="INSERT INTO `$this->table` SET $data";
        }
		  else{
               $qry="INSERT INTO `$this->table` SET $data";
          }
       
        //$qry="INSERT INTO `branches` SET `name`='sdfsdf',`price`='155',`location`='gsdfd',`description`='dsfsfs'";
		mysqli_query($this->conn,$qry);
	return mysqli_insert_id($this->conn);
		//echo "Rav";
		
	}
	////////////////////////
		function update($value,$fill)
	{
		$i=0;
		foreach($value as $key=>$values)
		{
			if($i==0)
			{
				$comma="";
			}
			else{
				$comma=",";
			}
			$data=$data.$comma."`$key`='$values'";
			$i++;
		}
		 $qry="UPDATE `$this->table` SET $data WHERE $fill";
		 $sql=mysqli_query($this->conn,$qry);
	return $sql?"1":"0";
		
	}
	//////////////////////
		function edit($value,$fill,$debuge=false,$image='')
	{
		$i=0;
		foreach($value as $key=>$values)
		{
			if($i==0)
			{
				$comma="";
			}
			else{
				$comma=",";
			}
			$data=$data.$comma."`$key`='$values'";
			$i++;
		}
			$a=0;
			foreach($fill as $key1=>$values1)
		{
			if($a==0)
			{
				$comma1="";
			}
			else{
				$comma1="AND";
			}
			$data1=$data1.$comma1."`$key1`='$values1'";
			$a++;
		}
            if($debuge==true)
            {
                echo $qry="UPDATE `$this->table` SET $data WHERE $data1";
            }
            else{
                $qry="UPDATE `$this->table` SET $data WHERE $data1";
            }
		if($image!='')
        {
            $this->remove_update($fill,$image);
        }
		 $sql=mysqli_query($this->conn,$qry);
	return $sql?"1":"0";
		

	}
	////////////////////////
	function image($img1='image',$path="../../image/")
	{
		$img=$_FILES[$img1];
		$image = md5(uniqid($img['name'], true));
		$image .= "." . pathinfo($img['name'], PATHINFO_EXTENSION);
		move_uploaded_file($img["tmp_name"],$path.$image);
			return $image;
	}
	function img($img)
	{
        $exte=array('png','jpe','jpeg','jpg' ,'gif' ,'AVI','avi','WMV','wmv','MP4','mp4','flv','FLV','WEBM','webm','3gp','MOV','mov');
        if(in_array(pathinfo($img['name'], PATHINFO_EXTENSION),$exte))
        {
            $path="../image/";
            $image = md5(uniqid($img['name'], true));
            $image .= "." . pathinfo($img['name'], PATHINFO_EXTENSION);
            move_uploaded_file($img["tmp_name"],$path.$image);
            return $image;
        }
        else{
            return 1;
        }
	}
	function image1($img)
	{
		$path="../image/";
		$image = md5(uniqid($img['name'], true));
		$image .= "." . pathinfo($img['name'], PATHINFO_EXTENSION);
		move_uploaded_file($img["tmp_name"],$path.$image);
			return $image;
	}
	function images($img='image',$path="../../image/")
	{
		$img=$_FILES[$img];
		$array=array();
		foreach($img['name'] as $key =>$value)
		{
			if($img['name'][$key]!='')
			{
				$image = md5(uniqid($img['name'][$key], true));
				$image .= "." . pathinfo($img['name'][$key], PATHINFO_EXTENSION);
				move_uploaded_file($img["tmp_name"][$key],$path.$image);
				array_push($array,$image);
				//mysqli_query($this->conn,"INSERT INTO `product_image`(`productID`, `image`) VALUES ('$productid','$image')");
			}
		}
		return $array;
		
	}
	////////////////////////////
	function find($fil)
	{
		$array=array();
		if(!empty($fil))
		{
			$qry="SELECT * FROM `$this->table` WHERE $fil";
		}
		else
		{ 
			$qry="SELECT * FROM `$this->table`";
		}
		$sql=mysqli_query($this->conn,$qry);
		return $fetch=mysqli_fetch_assoc($sql);
	}
	/////////////////////////////////////
	function finds($fil)
	{
		$array=array();
		if(!empty($fil))
		{
			$cond="";
			$i=1;
			foreach($fil as $key =>$value)
			{
				if($i==1)
				{
					$cond.="`$key`".'='."'$value'";
				}
				else{
					$cond.=" AND "."`$key`".'='."'$value'";
				}
				$i++;
			}
			 $qry="SELECT * FROM `$this->table` WHERE $cond";
		}
		$sql=mysqli_query($this->conn,$qry);
		$fetch=mysqli_fetch_assoc($sql);
		// $fetch['path']=$this->path;
		return $fetch;
	}
	///////////////////////////////
	function findBY($table,$id)
	{
		$array=array();
		$qry="SELECT * FROM `$table` WHERE `id`='$id'";
		$sql=mysqli_query($this->conn,$qry);
		return $fetch=mysqli_fetch_assoc($sql);
	}
	///////////////
	function ID($id)
	{
		$array=array();
		 $qry="SELECT * FROM `$this->table` WHERE `".$this->table."ID`='$id'";
		$sql=mysqli_query($this->conn,$qry);
		return $fetch=mysqli_fetch_assoc($sql);
	}
	/////////////////////////////
//	function id($id)
//	{
//		$array=array();
//		 $qry="SELECT * FROM `$this->table` WHERE `id`='$id'";
//		$sql=mysqli_query($this->conn,$qry);
//		return $fetch=mysqli_fetch_assoc($sql);
//	}
	///////////////////////////////////////
	function remove($id,$index,$iname)
	{
		$path="../../image/";
		$fethc=$this->finds(array($index=>$id));
        foreach(explode(',',$iname) as $nams)
        {
            if($nams!='')
            {
                unlink($path.$fethc[$nams]);
            }
            
        }
		
		$qrys=mysqli_query($this->conn,"DELETE FROM `$this->table` WHERE `$index`='$id'");
		if($qrys)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
	//////////////////
	function remove_file($id,$index,$iname)
	{
		$path="../../image/";
		$fethc=$this->finds(array($index=>$id));
        foreach(explode(",",$iname) as $values)
        {
            $qrys=unlink($path.$fethc[$iname]);
        }
		if($qrys)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
    ///////////////////////////////////
    function remove_update($id,$iname)
	{
		$path="../../image/";
		$fethc=$this->finds($id);
        foreach(explode(",",$iname) as $values)
        {
            $qrys=unlink($path.$fethc[$values]);
        }
		if($qrys)
		{
			return 1;
		}
		else{
			return 0;
		}
	}
    ////////////////////////////////////
     
}

class encriptions  {
//	function __construct()
//	{
//		$this->varia=1;
//	}
	function enc($value,$text)
	{
		return md5($text).'='.base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($value)))))));
	}
	/////////////////////
	function denc($text)
	{
		return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET[md5($text)])))))));
	}
	///////////////////////////////
	function enc1($value)
	{
		return md5('action_id').'='.base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($value)))))));
	}
	/////////////////////
	function denc1()
	{
		return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET[md5('action_id')])))))));
	}
	function encode($value)
	{
		return base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($value)))))));
	}
	function decode($value)
	{
		return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($value)))))));
	}
	function token()
	{
		echo '<input type="hidden" name="token" id="tokendata" value="'.($_SESSION['token']=md5(strtotime('now').rand(1000000,1000000456645654))).'">';
	}
	function deltoken()
	{
		echo ($_SESSION['deltoken']=md5(strtotime('now').rand(1000000,1000000456645654)));
	}
	function auth()
	{
		return md5(strtotime('now').rand(1000000,1000000456645654).uniqid());
	}
	
	function tokens()
	{
		$tok=md5(strtotime('now').rand(1000000,1000014244500456645654));
		$_SESSION['tokens'][count($_SESSION['tokens'])]=$tok;
		return($tok);
	}
	function check($value)
	{
		
		if(in_array($value,$_SESSION['tokens']))
		{
			return true;
		}
		else{
			return false;
		}
		
	}
	function post($value)
	{
		foreach($value as $value)
		{
			$ar[$value]=$this->decode($_POST[md5($value)]);
		}
		return $ar;
	}
}
class WEB
{
	function __construct()
	{
		global $conn;
		$this->conn=$conn;
	}
	function encode($value)
	{
		return base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($value)))))));
	}
	function decode($value)
	{
		return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($value)))))));
	}
	//////////////////////////////////
	 function sanitizer($array)
    {
        $data=array();
        foreach($array as $key=> $array1)
        {
            $data[$key]= mysqli_real_escape_string($this->conn,$array1);
        }
        return $data;
    }
	////////////////////////
	function redirect($value,$time=1000)
	{
        if($value=='')
        {
            $ext='';
        }
        else{
             $ext='.php';
        }
		echo '<script>window.setTimeout(function () { window.location="'.$value.'"; },'.$time.');</script>';
	}
	function go_to($value)
	{
		header("Location:".$value.'.php');
	}
	function session_check($value,$path='login')
	{
		if(empty($value))
		{
			header("Location:".$path);
		}
		
	}
	function session_set($value,$text)
	{
		 $_SESSION[md5($text)]=$this->encode($value);
	}
	function session_get($text)
	{
		if (!empty($_SESSION[md5($text)])) {
			return $this->decode($_SESSION[md5($text)]);
		}
	}
	function danger($value,$vsl=false,$time=1000)
	{
        if($vsl==true)
        {
            echo '<div class="alert alert-danger text-center" id="fasfsdfsfsfsff">'.$value.'</div>';
            echo '<script>window.setTimeout(function () {$("#fasfsdfsfsfsff").remove("slow"); },'.$time.');</script>';
            
        }
        else{
            echo '<div class="alert alert-danger text-center">'.$value.'</div>';
        }
		
	}
	function success($value,$vsl=false,$time=1000)
	{
         if($vsl==true)
        {
            echo '<div class="alert alert-success text-center" id="fasfsdfsfsfsff">'.$value.'</div>';
            echo '<script>window.setTimeout(function () {$("#fasfsdfsfsfsff").remove(); },'.$time.');</script>';
            
        }else{
             echo '<div class="alert alert-success text-center">'.$value.'</div>';
         }
		
	}
	function success1($value)
	{
		return '<div id="alertsid" class="alert alert-success text-center">'.$value.'</div>';
	}
	function danger1($value)
	{
		return '<div id="alertsid" class="alert alert-danger text-center">'.$value.'</div>';
	}
	//////////////////
	function permission($value,$type=0)
	{
		$per=array();
		foreach($_SESSION['permission'] as $valus)
		{
			array_push($per,$valus['link']);
		}
		if($this->session_get('role')==0)
		{
			if(in_array($valus,$per)==false && $type==0)
			{ ?>
				<script>
					alert("You Are Not permitted To Visit This Page !");
					window.history.back();</script>
			<?php }
		}
		else{
			
		}
	}
	 function check($filename='image',$type='IMAGE') 
	 {
//		 echo $filename;
//		  echo "<pre>";
//		 print_r($_FILES[$filename]);
//		 echo "</pre>";
		 $image=array('png','PNG','jpe','jpeg','jpg','gif','bmp','ico','tiff','tif','svg','svgz');
		 $zip=array( 'zip','rar','exe','msi','cab');
		 $audio=array('mp3','amr');
		 $video=array('mp4','avi','mov','flv','3gp');
        $file = array('txt' ,'pdf' ,'psd' ,'ai' ,'eps' ,'ps' ,'doc','rtf' ,'xls','ppt' ,'odt' ,'ods' ,);
		  if(is_array($_FILES[$filename]['name'])==true)
		 {
			 foreach($_FILES[$filename]['name'] as $name)
			 {
				$ext=pathinfo($name,PATHINFO_EXTENSION);
				if($type=='IMAGE' && in_array($ext,$image)==false)
				{
					$this->danger('This File Type Not Valid Use '.implode(" , ",$image));
					die;
				}
				elseif($type=='VIDEO' && in_array($ext,$video)==false)
				{
					$this->danger('This File Type Not Valid Use '.implode(" , ",$video));
					die;
				}
				elseif($type=='AUDIO' && in_array($ext,$audio)==false)
				{
					$this->danger('This File Type Not Valid Use '.implode(" , ",$audio));
					die;
				}
				elseif($type=='FILE' && in_array($ext,$file)==false)
				{
					$this->danger('This File Type Not Valid Use '.implode(" , ",$file));
					die;
				}
			 }
		 }
		 else{
			 
				$ext=pathinfo($_FILES[$filename]['name'],PATHINFO_EXTENSION);
			 if($type=='IMAGE' && in_array($ext,$image)==false)
			 {

				$this->danger('This File Type Not Valid Use '.implode(" , ",$image));
				 die;
			 }
			 elseif($type=='VIDEO' && in_array($ext,$video)==false)
			 {
				$this->danger('This File Type Not Valid Use '.implode(" , ",$video));
				 die;
			 }
			 elseif($type=='AUDIO' && in_array($ext,$audio)==false)
			 {
				$this->danger('This File Type Not Valid Use '.implode(" , ",$audio));
				 die;
			 }
			 elseif($type=='FILE' && in_array($ext,$file)==false)
			 {
				$this->danger('This File Type Not Valid Use '.implode(" , ",$file));
				 die;
			 }
			 
		 }
		
		 
      }
}
?>