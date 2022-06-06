<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
if($_SESSION['token']==$token)
{
	if($enc->denc1()=='ADD')
	{
		$_POST['strtotime']=strtotime('now');
		if($_FILES['image']['name']!='')
		{
			$_POST['image']=$PROJECT->image();
		}
		if($_FILES['pdf']['name']!='')
		{
			$_POST['pdf']=$PROJECT->image('pdf');
		}
		$ins=$PROJECT->insert($_POST);
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
			$_POST['image']=$PROJECT->image();
		}
		if($_FILES['pdf']['name']!='')
		{
			$_POST['pdf']=$PROJECT->image('pdf');
		}
		$ins=$PROJECT->edit($_POST,['projectID'=>$id]);
		if($ins)
		{
			$web->success('Update Successfully');
			$web->redirect('project');
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
		$remve=$PROJECT->remove($id,'projectID','image');
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