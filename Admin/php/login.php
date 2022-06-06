<?php require_once('../../common/config.php');
extract($web->sanitizer($_POST));
if($_SESSION['token']==$token)
{
	if($enc->denc1()=='LOGIN')
	{
		
		if($ADMIN->count(['username'=>$email])>0)
		{
			$data=$ADMIN->finds(['username'=>$email]);
			if(password_verify($password,$data['password']))
			{
				$ADMIN->edit(['last_login'=>strtotime('now')],['username'=>$email]);
				$web->success('Login Successfully');
				$web->session_set($data['adminID'],'adminID');
				$web->session_set($data['role'],'role');
				$per=$MENU->f_q("SELECT link FROM `menu` WHERE menuID IN(SELECT menuID FROM `admin_menu` WHERE adminID='".$data['adminID']."')");
				$_SESSION['permission']=$per;
				$web->redirect('index');
			}
			else{
				$web->danger('Wrong Password !');
			}
		}
		else{
			$web->danger('User Is Not Valid');
		}
	}
}
else{
	$web->danger('Token Expired');
}
?>