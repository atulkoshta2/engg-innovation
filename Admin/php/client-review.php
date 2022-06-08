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
		$ins=$CLIENT_REVIEW->insert($_POST);
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
		$ins=$CLIENT_REVIEW->edit($_POST,['client_reviewID'=>$id]);
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
		$remve=$CLIENT_REVIEW->remove($id,'client_reviewID','image');
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