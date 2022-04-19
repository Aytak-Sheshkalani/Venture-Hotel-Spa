<?php
require_once 'Classes/Database.php';

$dbc = new DbConnect();
$errors = [];
$phone = $email = "";
session_start();

if(!empty($_POST['name'])) {
	$name = $_POST['name'];
} else {
	$name = NULL;
	$errors[] = "<p>Please enter your name.</p>";
}

if (!empty($_POST['phone'])) 
{
        if (preg_match ("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $_POST['phone'])) 
        {
            $phone = $_POST['phone'];
        }
        else 
        {
            $phone = NULL;
            $errors[] = "<p>Invalid phone format</p>";
        }
}
else
{
    $phone = NULL;
    $errors[] = "<p>Please enter your phone.</p>";
}

if (!empty($_POST['email'])) 
{
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
            $email = $_POST['email'];
        }
        else 
        {
            $email = NULL;
            $errors[] = "<p>Invalid email format</p>";
        }
}
else
{
    $email = NULL;
    $errors[] = "<p>Please enter your E-mail.</p>";
}

if(!empty($_POST['comments'])) {
	$comments = $_POST['comments'];
} else {
	$comments = NULL;
	$errors[] = "<p>Please enter your comments.</p>";
}

if(count($errors) == 0){
        
    $name_clean = $dbc->prepare_string($name);
    $phone_clean = $dbc->prepare_string($phone);
    $email_clean = $dbc->prepare_string($email);
    $comments_clean = $dbc->prepare_string($comments);
   
    
    $query = "INSERT INTO feedback(name , phone, email, comments) VALUES (?,?,?,?)";
    
    $stmt = mysqli_prepare($dbc->get_dbc(), $query);
    
    mysqli_stmt_bind_param(
        $stmt,
        'ssss',
        $name_clean,
        $phone_clean,
        $email_clean,
        $comments_clean
    );
    
    $result = mysqli_stmt_execute($stmt);
    
    if($result){
        $_SESSION['msg']= "Thank you for your feedback!";
        header("Location: contact.php");
        exit;
    } else {
        $_SESSION['msg']= "</br>Some error in Saving the data";
        $_SESSION['msg'].= mysqli_error($dbc->get_dbc());
    }
    
} else {
    $_SESSION['msg']= "<ul>";
    foreach($errors as $error){
        $_SESSION['msg'] .= "<li>$error</li>";
    }
    $_SESSION['msg'] .= "</ul>";
}
header("Location: contact.php");
?>

