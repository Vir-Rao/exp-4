<?php
session_start();

include('conn.php');
if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];


$query1=" SELECT * FROM `user` WHERE `username`='$username' ";
$res1=mysqli_query($conn,$query1);

if(mysqli_num_rows($res1)>0){

    $data=mysqli_fetch_assoc($res1);
    
    if(strcmp($data['password'],$password)==0){
          
    
        $_SESSION['username']=$username;
        $_SESSION['phone']=$data['phone'];
        $_SESSION['email']=$data['email'];


        echo('<script>alert("Loggedin successfully!");</script>');
        echo('<script>window.location="home.php"</script>');
    }
  
     else{

        echo('<script>alert("Incorrect password")</script>');
        echo('<script>window.location="login.html"</script>');

     }

}
else{

    echo('<script>alert("no such user in databse")</script>');
    echo('<script>window.location="login.html"</script>');

}

}


else{

    echo('<script>alert("Not a correct way to come here")</script>');
    echo('<script>window.location="index.html"</script>');
}


?>

if(isset){

            if(mysqlnum row){


                      if(check pass){

                                     }
                         else{

                                 }

                              }

                     else{
                              }

            }
else{

}