<?php
if(!isset($_COOKIE["user"])){
    header("Location: login.php");
}

if(isset($_POST["logout"])){
    setcookie("user","",time());
    header("Location: login.php");
}

$conn=mysqli_connect("localhost","root","","joymakers");
if(!$conn){
    echo "Connection Failed";
}

$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];
$item=$_POST['donation'];
$hear=$_POST['how_hear'];
$msg=$_POST['msg'];

$query="INSERT INTO donations(name, number, mail, item, hear, msg) VALUES ('$name','$phone','$mail','$item','$hear','$msg')";

if(mysqli_query($conn,$query)){
    echo "<div style='background-color: #c9e9c1; padding: 20px; border-radius: 10px; text-align: center;'>
        <img src='https://cdn.pixabay.com/photo/2016/06/01/00/57/thank-you-1428147_960_720.png' alt='Thank You!' style='max-width: 100%; height: 80%'>
        <h2 style='font-family: Arial, sans-serif; font-size: 24px; color: #5d5d5d; margin-top: 20px;'>Thank you for your donation, $name!</h2>
        <p style='font-family: Arial, sans-serif; font-size: 18px; color: #5d5d5d; line-height: 1.5em; margin-top: 10px;'>Your contribution has been received and will make a difference in the lives of those we serve. Thank you for your generosity and support.</p>
        <p style='font-family: Arial, sans-serif; font-size: 18px; color: #5d5d5d; line-height: 1.5em; margin-top: 10px;'>We will be soon contacting you regarding your donation :)</p>
    </div>";
}
else{
    echo "<div style='background-color: #f8d7da; padding: 20px; border-radius: 10px; text-align: center;'>
        <h2 style='font-family: Arial, sans-serif; font-size: 24px; color: #721c24; margin-top: 0;'>Oops, something went wrong.</h2>
        <img src='https://cdn.pixabay.com/photo/2016/06/03/08/18/oops-1432954_960_720.png' alt='Oops!' style='max-width: 100%; height: 80%; margin-top: 20px;'>
        <p style='font-family: Arial, sans-serif; font-size: 18px; color: #721c24; line-height: 1.5em; margin-top: 10px;'>Sorry, $name, there was an error processing your donation. Please try again later or contact us for assistance.</p>
    </div>";
}



?>