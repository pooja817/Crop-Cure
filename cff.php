<?php

$connection=mysqli_connect('localhost','kiranreddy','Kiran@1804','dbms');



if(isset($_POST['sent'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

$req_1="insert into contact values('$name','$email','$subject','$message')";
$result=mysqli_query($connection, $req_1);
header('location:contactf.php');
}

else{
   // header('location:testing.php');
    echo 'Some thing is wrong please retry again';
    
}



?>
