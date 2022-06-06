<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
unset($_POST['password']);
if($_SESSION['token']==$token)
{
	if($enc->denc1()=='ADD')
	{
		if(!empty($password))
		{
			$_POST['password']=password_hash($password,PASSWORD_DEFAULT);
		}
		$ins=$ADMIN->insert($_POST);
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
		if(!empty($password))
		{
			$_POST['password']=password_hash($password,PASSWORD_DEFAULT);
		}
		$ins=$ADMIN->edit($_POST,['adminID'=>$id]);
		if($ins)
		{
			$web->success('Update Successfully');
			$web->redirect('admin');
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
		$remve=$ADMIN->remove($id,'adminID','image');
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