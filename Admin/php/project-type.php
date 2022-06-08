<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
if (!empty($token)) {
	if($_SESSION['token']==$token)
{
	if($enc->denc1()=='ADD')
	{
		$ins=$PROJECT_TYPE->insert($_POST);
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
		$ins=$PROJECT_TYPE->edit($_POST,['project_typeID'=>$id]);
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
		$remve=$PROJECT_TYPE->remove($id,'project_typeID',null);
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