<?php
session_start();
$conn = mysqli_connect("localhost", "maestcbk_contact", "Abc123~");
mysqli_select_db($conn,"maestcbk_contactPublisher");
mysqli_set_charset($conn,"utf8");
?>

      



<?php 

//--------------------------------start----------------------------------------------------------








  
   {
		$sender_id  = $_REQUEST['sender_id'];
		$reciver_id = $_REQUEST['reciver_id'];
		//-------------------------------------------------------
		  $message["size "]  =    $size = $_REQUEST['size'];
 
for ($x = 0; $x < $size; $x++) {
$target_path="../rohit_file/";
$target_path=$target_path.basename( $_FILES["uploadedfile".$x]['name']);
if(move_uploaded_file($_FILES["uploadedfile".$x]['tmp_name'], $target_path));
$filename=$_FILES["uploadedfile".$x]['name'];
}
//-------
               $date1234= $_REQUEST['date'];
		
		 $group_id= $_REQUEST['group_id'];
//---------------------------






               $broad_cast_id= $_REQUEST['broad_cast_id'];



//-----------------------------------------------------------

        if($reciver_id == ''){

  if($broad_cast_id!= ''){

              
//----------------------------------------------start----broad---------------


$sql_broad = "SELECT * FROM `broad_cast` WHERE `id`= '$broad_cast_id'"; 	   
	   $result_broad = mysqli_query($conn,$sql_broad);
$row_broad = mysqli_fetch_array($result_broad);
$rohit  = $row_broad['receiver_id'];

 
foreach(explode(',', $rohit) as $value)
{
//$message["broad_cast_id"] =$value; 
		//  echo json_encode($message);

//---------------------------
$reciver_id=$value;




		
		 $qry = "SELECT count(chat_user_id) as count  FROM `chat_user` where (sender_id ='$sender_id' OR reciver_id='$sender_id') AND (sender_id ='$reciver_id' OR reciver_id='$reciver_id')";
		$results = mysqli_query($conn,$qry);
		$counts=mysqli_fetch_array($results);
		$counts=$counts['count'];
		
		if($counts==0)
                  {
                 $qry1 = "SELECT *  FROM `chukle` where user_id='$reciver_id'";
		$results1 = mysqli_query($conn,$qry1);
		$rows=mysqli_fetch_array($results1);
		$full_name=$rows['full_name'];
                 $image=$rows['image'];
                  
                   $qrys = "INSERT INTO `chat_user`(`sender_id`, `reciver_id`,`group_id`,`reciver_name`,`reciver_image`) VALUES ('$sender_id','$reciver_id','$group_id','$full_name','$image')";
		$resultss = mysqli_query($conn,$qrys);
                  }else{
                  
                      if($reciver_id == ''){
                          $sql = "DELETE FROM `chat_user` where `group_id` = '$group_id'";
                    
                   }else{
  $sql = "DELETE FROM `chat_user` where (sender_id ='$sender_id' OR reciver_id='$sender_id') AND (sender_id ='$reciver_id' OR reciver_id='$reciver_id')";
                 }
  $results = mysqli_query($conn,$sql);
                
                    $qry1 = "SELECT *  FROM `chukle` where user_id='$reciver_id'";
		$results1 = mysqli_query($conn,$qry1);
		$rows=mysqli_fetch_array($results1);
		$full_name=$rows['full_name'];
                 $image=$rows['image'];
                  
                   $qrys = "INSERT INTO `chat_user`(`sender_id`, `reciver_id`,`group_id`,`reciver_name`,`reciver_image`) VALUES ('$sender_id','$reciver_id','$group_id','$full_name','$image')";
		$resultss = mysqli_query($conn,$qrys);

}
                //--------------------------------------------------------------------



                		
		
	 
				
		
		$ww = date('Y-m-d'); 
	 	
		
		 "Original Time: ". date("h:i")."\n". date_default_timezone_set('Asia/Kolkata');
         $ab = date("h:i")."\n";
		
	      $sql = "INSERT INTO `message` (`sender_id`,`reciver_id`,`group_id`,`image_file`,`date`,`time`) VALUES ('$sender_id','$reciver_id','$group_id','$filename','$ww','$ab')";
   	  
		  $result = mysqli_query($conn,$sql);
		  
		
		  $mysqli_insert_id =  mysqli_insert_id($conn); 
		
			if($mysqli_insert_id == 0)
			{
			
			$message["result"] = "unsuccess"; 
			
			}else
			{
		 	
		 	$message["m_id"]  = $mysqli_insert_id; 
			$message["result"] = "success"; 	  
			}     
			 
			 echo json_encode($message);   
	        // die; 
					 
		
				  	  
 



 $qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$reciver_id'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

/*$regId ="eyS7UWsKWs0:APA91bFPtxeu0jAzny53yLP-oSoxALtxfP1IJeqo5-8B2bgBdR-xnVRNEuT4RMz3zsJHfrJLsWzYEI23U0mVVTVUZ-8uzmZelOMKVpR0GS7IxuQVtQNVYr4u8eV67bxRJGYCreesDsIX";*/




//-------------------------------------------end-----------------------------------------------------------

    
error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$firebase = new Firebase();
$push = new Push();
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$title = "New Message";
$message = $msg;

$push_type = 'individual';
$push->setTitle($title);
$push->setMessage($message);
$push->setImage('');
$push->setIsBackground(FALSE);
$push->setPayload($payload);
$json = '';
 $response = '';
  if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
           // $regId = isset($_GET['regId']) ? $_GET['regId'] : '';
            $response = $firebase->send($regId, $json);
          }

if($group_id !=''){




$row= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `group` WHERE `group_id`='$group_id'")); 
	
	$group_member=$row['group_member'].','.$row['user_id'];
	$group_member1=array_unique(explode(',',$group_member));
	
	
	
	foreach($group_member1 as $group_member)
	{
		if($group_member !=$sender_id)
		{ 


$qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$group_member'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

 if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
           // $regId = isset($_GET['regId']) ? $_GET['regId'] : '';
            $response = $firebase->send($regId, $json);
          }


}

}



}




//-------------------------




}








//----------------------------------------------end----broad---------------


		  die;
                      }

           }


                 



    //----------------------------------------------------------  














//----------------------------------------



		
		 $qry = "SELECT count(chat_user_id) as count  FROM `chat_user` where (sender_id ='$sender_id' OR reciver_id='$sender_id') AND (sender_id ='$reciver_id' OR reciver_id='$reciver_id')";
		$results = mysqli_query($conn,$qry);
		$counts=mysqli_fetch_array($results);
		$counts=$counts['count'];
		
		if($counts==0)
                  {
                 $qry1 = "SELECT *  FROM `chukle` where user_id='$reciver_id'";
		$results1 = mysqli_query($conn,$qry1);
		$rows=mysqli_fetch_array($results1);
		$full_name=$rows['full_name'];
                 $image=$rows['image'];
                  
                   $qrys = "INSERT INTO `chat_user`(`sender_id`, `reciver_id`,`group_id`,`reciver_name`,`reciver_image`) VALUES ('$sender_id','$reciver_id','$group_id','$full_name','$image')";
		$resultss = mysqli_query($conn,$qrys);
                  }else{
                  
                      if($reciver_id == ''){
                          $sql = "DELETE FROM `chat_user` where `group_id` = '$group_id'";
                    
                   }else{
  $sql = "DELETE FROM `chat_user` where (sender_id ='$sender_id' OR reciver_id='$sender_id') AND (sender_id ='$reciver_id' OR reciver_id='$reciver_id')";
                 }
  $results = mysqli_query($conn,$sql);
                
                    $qry1 = "SELECT *  FROM `chukle` where user_id='$reciver_id'";
		$results1 = mysqli_query($conn,$qry1);
		$rows=mysqli_fetch_array($results1);
		$full_name=$rows['full_name'];
                 $image=$rows['image'];
                  
                   $qrys = "INSERT INTO `chat_user`(`sender_id`, `reciver_id`,`group_id`,`reciver_name`,`reciver_image`) VALUES ('$sender_id','$reciver_id','$group_id','$full_name','$image')";
		$resultss = mysqli_query($conn,$qrys);

}
                //--------------------------------------------------------------------



                		
		
	 
				
		
		$ww = date('Y-m-d'); 
	 	
		
		 "Original Time: ". date("h:i")."\n". date_default_timezone_set('Asia/Kolkata');
         $ab = date("h:i")."\n";
		
	      $sql = "INSERT INTO `message` (`sender_id`,`reciver_id`,`group_id`,`image_file`,`date`,`time`) VALUES ('$sender_id','$reciver_id','$group_id','$filename','$ww','$ab')";
   	  
		  $result = mysqli_query($conn,$sql);
		  
		
		  $mysqli_insert_id =  mysqli_insert_id($conn); 
		
			if($mysqli_insert_id == 0)
			{
			
			$message["result"] = "unsuccess"; 
			
			}else
			{
		 	
		 	$message["m_id"]  = $mysqli_insert_id; 
			$message["result"] = "success"; 	  
			}     
			 
			 echo json_encode($message);   
	        // die; 
					 
		
				  	  
  }



 $qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$reciver_id'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

/*$regId ="eyS7UWsKWs0:APA91bFPtxeu0jAzny53yLP-oSoxALtxfP1IJeqo5-8B2bgBdR-xnVRNEuT4RMz3zsJHfrJLsWzYEI23U0mVVTVUZ-8uzmZelOMKVpR0GS7IxuQVtQNVYr4u8eV67bxRJGYCreesDsIX";*/




//-------------------------------------------end-----------------------------------------------------------

    
error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$firebase = new Firebase();
$push = new Push();
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$title = "New Message";
$message = $msg;

$push_type = 'individual';
$push->setTitle($title);
$push->setMessage($message);
$push->setImage('');
$push->setIsBackground(FALSE);
$push->setPayload($payload);
$json = '';
 $response = '';
  if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
           // $regId = isset($_GET['regId']) ? $_GET['regId'] : '';
            $response = $firebase->send($regId, $json);
          }






if($group_id !=''){




$row= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `group` WHERE `group_id`='$group_id'")); 
	
	$group_member=$row['group_member'].','.$row['user_id'];
	$group_member1=array_unique(explode(',',$group_member));
	
	
	
	foreach($group_member1 as $group_member)
	{
		if($group_member !=$sender_id)
		{ 


$qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$group_member'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

 if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
           // $regId = isset($_GET['regId']) ? $_GET['regId'] : '';
            $response = $firebase->send($regId, $json);
          }


}

}



}









         ?>
         
       