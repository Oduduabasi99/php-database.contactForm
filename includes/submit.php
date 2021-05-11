<?php 
include "config.php";


if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $date = date("Y-m-d H:i:s",time());
}


$query = "INSERT INTO contactForm(name, email, message) VALUES ('$name', '$email', '$message')";
$result = mysqli_query($conn, $query);
if(!$result){
    die("could not submit to database" . mysqli_error($conn));
}else{
    echo '<script> alert ("Message Sent!!!");
    window.location.href="../index.php";</script>';
}
?>
?>