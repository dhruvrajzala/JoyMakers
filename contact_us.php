<?php

$conn=mysqli_connect("localhost","root","","joymakers");
if(!$conn){
    echo "Connection Failed";
}

$name=$_POST['name'];
$mail=$_POST['mail'];
$msg=$_POST['msg'];

$query="INSERT INTO contact(name, mail, msg) VALUES ('$name','$mail','$msg')";

if(mysqli_query($conn,$query)){
    echo "<div style='background-color: #c9e9c1; padding: 20px; border-radius: 10px; text-align: center;'>
    <img src='https://cdn.pixabay.com/photo/2018/02/12/16/41/thank-3148710_960_720.png' alt='Thank You!' style='max-width: 100%; height: 80%'>
    <h2 style='font-family: Arial, sans-serif; font-size: 24px; color: #5d5d5d; margin-top: 20px;'>We will get back to you shortly, $name!</h2>
</div>";
}

?>