<?php
session_start();
$conn = mysqli_connect("localhost", "maestcbk_contact", "Abc123~");
mysqli_select_db($conn,"maestcbk_contactPublisher");
mysqli_set_charset($conn,"utf8");
?>

      



<?php 

//--------------------------------start----------------------------------------------------------








   {
			 extract($_POST);
	 
	  
	   if($friend_id== "")
		{
		  $message["result"] = "friend_id is empty"; 
		  echo json_encode($message); 
		  die;
		}
		else if($user_id== "")
		{
		  $message["result"] = "user_id is empty"; 
		  echo json_encode($message); 
		  die;
		}

         else if($status== "")
		{

		  $message["result"] = "status is empty"; 
		  echo json_encode($message); 
		  die;
		}

 
		
          
		else
			{



if($status== "3")
		{
mysqli_query($conn,"DELETE FROM `friend` where (user_id ='$user_id' OR friend_id='$user_id') AND (user_id ='$friend_id' OR friend_id='$friend_id')  AND `status` = '1'  "); 

 $message["result"] = "successfully"; 
 echo json_encode($message); 


                                 


$qry_myname = "SELECT *  FROM `chukle` WHERE `id` ='$user_id'";
		$results_myname = mysqli_query($conn,$qry_myname);
		$row_myname=mysqli_fetch_array($results_myname);
		$reg_myname=$row_myname['name'].' '.$row_myname['surname'];




 $qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$friend_id'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

/*$regId ="eyS7UWsKWs0:APA91bFPtxeu0jAzny53yLP-oSoxALtxfP1IJeqo5-8B2bgBdR-xnVRNEuT4RMz3zsJHfrJLsWzYEI23U0mVVTVUZ-8uzmZelOMKVpR0GS7IxuQVtQNVYr4u8eV67bxRJGYCreesDsIX";*/






    
error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$firebase = new Firebase();
$push = new Push();
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$message = "Mood Invitation Declined";
$title = 'From '.$reg_myname ;

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


                                       //--------------------------






		  die;
		 
		}



 if($invitation_mood== "")
		{

		  //$message["result"] = "invitation_mood is empty"; 
		 // echo json_encode($message); 

$sql_update = "UPDATE `friend` SET  `status`='$status' WHERE  (user_id ='$user_id' OR friend_id='$user_id') AND (user_id ='$friend_id' OR friend_id='$friend_id')";
       $results_update = mysqli_query($conn,$sql_update);




                  $message["result"] = "successfully"; 
 echo json_encode($message);




		  die;
		}




                      $qry = "SELECT count(id) as count  FROM `friend` where (user_id ='$user_id' OR friend_id='$user_id') AND (user_id ='$friend_id' OR friend_id='$friend_id') AND `invitation_mood` = '$invitation_mood'";
		$results_c = mysqli_query($conn,$qry);
		$counts=mysqli_fetch_array($results_c);
		$counts=$counts['count'];
		
		if($counts == 1)
                  {

                $sql_update = "UPDATE `friend` SET  `status`='$status' WHERE  (user_id ='$user_id' OR friend_id='$user_id') AND (user_id ='$friend_id' OR friend_id='$friend_id')";
       $results_update = mysqli_query($conn,$sql_update);




                  $message["result"] = "successfully"; 
 echo json_encode($message);  
                   
                   }else


                        
			{
				   
		 $sqli = "INSERT INTO `friend` (`friend_id`,`user_id`,`status`,`invitation_mood`) VALUES ('$friend_id','$user_id','$status','$invitation_mood')";
			$results= mysqli_query($conn,$sqli);
			$mysqli_insert_id = mysqli_insert_id($conn);
			
				if($mysqli_insert_id != 0)
				{
					
				
					 
					  $message["result"] = "successfully"; 
                                         echo json_encode($message);  
                                         //-----------------------



                                       $mood_name = "SELECT *  FROM `chuckle_my_mood` WHERE `id` ='$invitation_mood'";
		$results_mood_name = mysqli_query($conn,$mood_name);
		$row_mood_name=mysqli_fetch_array($results_mood_name);
		$reg_mood_name =$row_mood_name['name'];


$qry_myname = "SELECT *  FROM `chukle` WHERE `id` ='$user_id'";
		$results_myname = mysqli_query($conn,$qry_myname);
		$row_myname=mysqli_fetch_array($results_myname);
		$reg_myname=$row_myname['name'].' '.$row_myname['surname'];




 $qry_regid = "SELECT *  FROM `chukle` WHERE `id` ='$friend_id'";
		$results_regid = mysqli_query($conn,$qry_regid);
		$row_regid=mysqli_fetch_array($results_regid);
		$regId=$row_regid['regid'];

/*$regId ="eyS7UWsKWs0:APA91bFPtxeu0jAzny53yLP-oSoxALtxfP1IJeqo5-8B2bgBdR-xnVRNEuT4RMz3zsJHfrJLsWzYEI23U0mVVTVUZ-8uzmZelOMKVpR0GS7IxuQVtQNVYr4u8eV67bxRJGYCreesDsIX";*/






    
error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$firebase = new Firebase();
$push = new Push();
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$message = "Chuckle My Mood Invitation" ;
$title = $reg_myname;

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


                                       //--------------------------





                      

                                
				}
			else{
			             $message["result"]="unsuccess";
						  //$message["error"]= mysqli_error();
			     }}
			}
			      
				   
	               
		      
	
		
   }




//-------------------------------------------end-----------------------------------------------------------



         ?>
         
       