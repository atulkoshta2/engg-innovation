<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
if (!empty($token)) {
	if($_SESSION['token']==$token)
{
	if($enc->denc1()=='ADD')
	{
		if($_FILES['image']['name']!='')
		{
			$_POST['image']=$PROJECT->image();
		}
		$ins=$PROJECT_DETAIL->insert($_POST);
		if($ins)
		{
			$web->success('Added Successfully');
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
		$ins=$PROJECT_DETAIL->edit($_POST,['project_detailID'=>$id]);
		if($ins)
		{
			$web->success('Update Successfully');
		}
		else{
			$web->danger('FAiled To Update');
		}
	}
}
}
if (!empty($deltoken)) {
    if($_SESSION['deltoken']==$deltoken) {
	unset($_POST['deltoken']);
	if($enc->denc1()=='DELETETICETK')
	{
		$remve=$PROJECT_DETAIL->remove($id,'project_detailID','image');
		if($remve)
		{
			echo 1;
		}
	}
	}
	else{
		$web->danger('Token Expired');
	}
}
?>