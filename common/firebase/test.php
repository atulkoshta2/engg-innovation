<?php


    $regId="cjDJIMyUchQ:APA91bEBDb51qPuUcN4lEdNFXcOFrxJTkfR6CMkpqFCQR3sRg-er4EFmX7Tl_-eHPiuX0qsUjPwTJk8AkGpTHz228mqPF95lRbfBGcEhdeoSG013P7TnqBadRCzb6-_Ay8F8LEiSYqYv";
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
$message = 'ram';

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
         ?>
         
       