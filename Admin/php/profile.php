<?php require_once('../../common/config.php');

extract($web->sanitizer($_POST));

unset($_POST['token']);

unset($_POST['password']);

if($_SESSION['token']==$token)

{
    if($enc->denc1()=='UPDATE')

        {
            if($_FILES['image']['name']!='')
            {
                $_POST['image']=$ADMIN->image();
            }
            if(!empty($password))
            {
                $_POST['password']=password_hash($password,PASSWORD_DEFAULT);
            }
            $ins=$ADMIN->edit($_POST,['adminID'=>$web->session_get('adminID')]);

            if($ins)

            {

                $web->success('Update Successfully');

                $web->redirect('profile');

            }

            else
            {

                $web->danger('FAiled To Update');

            }

        }


elseif($enc->denc1()=='ACCOUNTUPDTATE')

	{
      
        // print_r($_POST);
        // die;
        $_POST['strtotime']=strtotime('now');
        if($_FILES['qr_image']['name']!='')
        {
           $_POST['qr_image']=$ACCOUNT->image('qr_image');
        }
       if($ACCOUNT->count(['userID'=>$web->session_get('userID')])==0)
       {
          
           $_POST['userID']=$web->session_get('userID');
            $ins=$ACCOUNT->insert($_POST);
       }
       else
       {
        $ins=$ACCOUNT->edit($_POST,['userID'=>$web->session_get('userID')]);
       }
		if($ins)

		{

			$web->success('Update Successfully');

			$web->redirect('account');

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