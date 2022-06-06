<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
if($_SESSION['token']==$token)
{
	if($enc->denc1()=='ADD')
	{
		if($_FILES['image']['name']!='')
		{
			$web->check();
			
			$_POST['image']=$MENU->image();
		}
		$ins=$MENU->insert($_POST);
		if($ins)
		{
			$web->success('Added Successfully');
			$web->redirect('');
		}
		else{
			$web->danger('FAiled To Add');
		}
	}
/////////////////////////////////////////////////////////////////////////////////	
elseif($enc->denc1()=='UPDATE')
	{
		unset($_POST['id']);
	if($_FILES['image']['name']!='')
		{
			$web->check();
			$_POST['image']=$MENU->image();
		}
		$ins=$MENU->edit($_POST,['menuID'=>$id]);
		if($ins)
		{
			$web->success('Update Successfully');
			$web->redirect('menu');
		}
		else{
			$web->danger('FAiled To Update');
		}
	}
}
elseif($_SESSION['deltoken']==$deltoken)
{
	unset($_POST['deltoken']);
	if($enc->denc1()=='DELETETICETK')
	{
		$remve=$MENU->remove($id,'menuID','image');
		if($remve)
		{
			echo 1;
		}
	}
}
else{
	$web->danger('Token Expired');
}
?>