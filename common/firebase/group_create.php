<?php
session_start();
$conn = mysqli_connect("localhost", "maestcbk_contact", "Abc123~");
mysqli_select_db($conn,"maestcbk_contactPublisher");
mysqli_set_charset($conn,"utf8");
?>

      



<?php 



//---------------------------------start--------------------------------------------------------------------






 
   {
   
		
		$user_id = $_REQUEST['user_id'];
		$group_name = $_REQUEST['group_name'];

$group_member = $_REQUEST['group_member'];
if($user_id =="")
		{
		  $message["result"] = "user_id is empty"; 
		  echo json_encode($message); 
		  die;
		}

      
		else if($group_name =="")
		{
		  $message["result"] = "group_name is empty"; 
		  echo json_encode($message); 
		  die;
		}
		else{










		$sql = "SELECT count(user_id) as count FROM `group` WHERE `user_id` = '$user_id' AND `group_name` = '$group_name'";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_fetch_assoc($result);
        $count = $count['count'];
              
		if($count == 1)
		{
		  $message["result"] = "Group Already Exist"; 
		  echo json_encode($message); 
		  die;
		}
		else
		{

if($group_member != '')
		{
		  $group_member=$user_id.','. $group_member;
		}
else{
 $group_member=$user_id;

}



			  $size = $_REQUEST['size'];
for ($x = 0; $x < $size; $x++) {
$target_path="../upload/";
$target_path=$target_path.basename( $_FILES["uploadedfile".$x]['name']);
if(move_uploaded_file($_FILES["uploadedfile".$x]['tmp_name'], $target_path));

$filename=$_FILES["uploadedfile".$x]['name'];
}






		
		  
        $sql = "INSERT INTO `group` (`user_id`,`group_name`,`group_member`,`image`) VALUES ('$user_id','$group_name','$group_member','$filename')";
   	  
		  $result = mysqli_query($conn,$sql);
		  
		 //$ans  = mysqli_fetch_array($result);
		
		  $mysqli_insert_id =  mysqli_insert_id($conn); 
		
			if($mysqli_insert_id == 0)
			{
			
			$message["result"] = "unsuccess"; 
			
			}else
			{
		
			$message["group_id"]  = $mysqli_insert_id; 
			

	            $_SESSION["result"]=$message["result"] = "successfully"; 
 echo json_encode($message);   


//------------------------notification----------------------------------

$row_t= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `chukle` WHERE `id`='$user_id'")); 
	
	$admin_name=$row_t['name'];


error_reporting(-1);
ini_set('display_errors', 'On');
require_once __DIR__ . '/firebase.php';
require_once __DIR__ . '/push.php';
$firebase = new Firebase();
$push = new Push();
$payload = array();
$payload['team'] = 'India';
$payload['score'] = '5.6';
$title = "New Group";
$message = $group_name." : ".$admin_name." added you";

$push_type = 'individual';
$push->setTitle($title);
$push->setMessage($message);
$push->setImage('');
$push->setIsBackground(FALSE);
$push->setPayload($payload);
$json = '';
 $response = '';
 




{


	
$group_member=$group_member.','.$user_id;
$group_member1=array_unique(explode(',',$group_member));
	
foreach($group_member1 as $group_member)
	{
		if($group_member !=$user_id)
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





//-------------------------------------------------------------


			    
			}     
		
		}
		}
			
	         die; 

				  	  
  }
  //----------group create end------------/////////////////
  
  







//-------------------------------------------end-----------------------------------------------------------

    

   ?>
         
       