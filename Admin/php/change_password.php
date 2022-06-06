<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
unset($_POST['token']);
unset($_POST['cpassword']);
if($_SESSION['token']==$token)
{
	if($enc->denc1()=='PROFILECHANGE')
	{
		if($password!=$cpassword)
		{
			$web->danger('Password Not Matched');
			die;
		}
		$_POST['password']=password_hash($password,PASSWORD_DEFAULT);
		$ins=$ADMIN->edit($_POST,['adminID'=>$web->session_get('adminID')]);
		if($ins)
		{
			$web->success('Password Updated Successfully');
			$web->redirect('logout');
		}
		else{
			$web->danger('FAiled To Update');
		}
	}
}
else{
	$web->danger('Token Expired');
}
?>