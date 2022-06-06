<?php require_once('../../common/config.php');

extract($_POST);

unset($_POST['token']);

if($_SESSION['token']==$token)

{

	if($enc->denc1()=='ADD')

	{

		$ADMIN_MENU->delete(['adminID'=>$id],true);

		foreach($menuID as $menuIDs)

		{

			$arr['menuID']=$menuIDs;

			$arr['adminID']=$id;

			$ins=$ADMIN_MENU->insert($arr);

		}

		if($ins)

		{

			$web->success('Added Successfully');

			$web->redirect('');

		}

		else{

			$web->danger('FAiled To Add');

		}

	}
	////////////////////////////////////////////////////////////////
	elseif($enc->denc1()=='ADD_CUSTOMER')
	{
		$ASSIGN_CUSTOMER->delete(['adminID'=>$id],true);
		foreach($userID as $userID)
		{
			$arr['userID']=$userID;
			$arr['adminID']=$id;
			$ins=$ASSIGN_CUSTOMER->insert($arr);
		}
		if($ins)
		{
			$web->success('Added Successfully');
			$web->redirect('');
		}
		else
		{
			$web->danger('FAiled To Add');
		}

	}

/////////////////////////////////////////////////////////////////////////////////	



}else
{

	$web->danger('Token Expired');

}

?>