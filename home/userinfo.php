<?php 

$con = mysqli_connect('localhost','root');
if($con){
    echo "submitted sucessfully";
    
}
else{
    echo "not submitted";
}
mysqli_select_db($con, 'beautyuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query = "insert into userinfodata (user, email, mobile, comment) values ('$user','$email','$mobile','$comments')";




mysqli_query($con, $query);


header('location:index.php');
?>