<?php
    $first_name = ucwords($_POST['first_name']);
    $last_name =ucwords($_POST['last_name']);
    $email_id = $_POST['email_id'];
    $subject = addslashes($_POST['subject']);
    $content = addslashes($_POST['content']);
    
    $con = mysqli_connect("localhost", "ai7inxll_2", "o}6Te+{NFK}P", "ai7inxll_secure") or die(mysqli_connect_error());
    
    $result = mysqli_query($con, "insert into contact_queries (first_name, last_name, email_id, subject, content, mdatetime) values ('" . $first_name. "', '" . $last_name . "','" . $email_id . "', '" . $subject . "', '" . $content . "', '" . date("Y-m-d H:i:s") . "')");
    
    session_start();
    if($result)
    {
        $_SESSION['msg'] = "You query has been saved. We will contact you shortly.";
    }
    else
    {
        $_SESSION['msg'] = "Some error occurred";
    }
    
    header("location:contact.php");
    exit;
?>