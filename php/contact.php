<?php require_once('../common/config.php');
extract($web->sanitizer($_POST));
	if($enc->denc1()=='CONTACTUS')
	{
		$_POST['strtotime']=strtotime('now');
		$ins=$CONTACT->insert($_POST);
		if($ins)
		{
			$web->success('We Have Received Your Request');
			//$web->redirect('');
		}
		else{
			$web->danger('FAiled To Add');
		}
	}
/////////////////////////////////////////////////////////////////////////////////	
	elseif($enc->denc1()=='SUBSCRIBE')
	{
		
		if($SUBSCRIBE->count(["email"=>$_POST['email']]))
		{
			$web->danger('Email Already Exist');
		}
		else{
			$_POST['strtotime']=strtotime('now');
				$ins=$SUBSCRIBE->insert($_POST);
			if($ins)
			{
				$web->success('We Have Received Your Request');
				//$web->redirect('');
			}
			else{
				$web->danger('FAiled To Add');
			}
		}
	}
	elseif($enc->denc1()=='ENQUIRY')
	{
		$_POST['strtotime']=strtotime('now');
		$ins=$ENQUIRY->insert($_POST);
		if($ins)
		{
			$web->success('We Have Received Your Request, We Will Contact You Shortly');
			//$web->redirect('');
		}
		else{
			$web->danger('FAiled To Enquiry');
		}
	}
