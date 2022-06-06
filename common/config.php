<?php session_start();
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"engineering_innovation");
error_reporting(E_ALL);
mysqli_set_charset($conn,'utf8');
date_default_timezone_set("Asia/Calcutta");

include('model.php');
if($web->session_get('userID')!='')

{

	$userdata=$USER->ID($web->session_get('userID'));

}
if($web->session_get('adminID')!='')

{

	$admindata=$ADMIN->ID($web->session_get('adminID'));

}
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});
?>