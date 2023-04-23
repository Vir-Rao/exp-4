<?php
include('conn.php');



if(isset($_POST['submit'])){

print_r($_POST);
$username=$_POST['username'];

$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];

$query1= "INSERT INTO `user`(`username`, `phone`, `email`, `password`) VALUES ('$username',$phone,'$email','$password')";
$res1=mysqli_query($conn,$query1);


echo('<script>alert("Registered successfully now please login")</script>');

echo('<script>window.location="login.html"</script>');


}else{

    echo('<script>alert("Not a correct way to come here")</script>');
    echo('<script>window.location="index.html"</script>');



}

?>