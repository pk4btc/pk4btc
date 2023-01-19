<?php 
session_start();
include('connection.php');


if(isset($_POST['signup_btn']))
{ //checking if directed signupbtn is exist is true, in post request, all fields with 'name' are in form POST

    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmpassword= $_POST['confirm-password'];

    if ( $password!=$confirmpassword){
        header('location: sign_up.php?error_message=password dont match');
    exit;
    }

    $stmt = $fiber->prepare('SELECT id FROM users WHERE username=? OR email= ?');
    $stmt->bind_param('ss',$username,$email);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows() > 0){
        header('location:sign_up.php?error_message=User exists');
        exit;

    }else{
        $stmt= $fiber->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
        $stmt->bind_param('sss',$username,$email,md5($password));
        header('location:index.php');

        //if sucess then show
        if ($stmt->execute()){
            $stmt = $fiber->prepare('SELECT id,username.email,image,following,followers,posts,bio FROM users WHERE username=?');
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $stmt->bind_result($id,$username,$email,$image,$following,$followers,$posts,$bio);
            $stmt->fetch();

            $_SESSION['id']=$id;
            $_SESSION['username']=$username;
            $_SESSION['email']=$email;
            $_SESSION['img ']=$img;
            $_SESSION['following']=$following;
            $_SESSION['followers']=$followers;
            $_SESSION['posts']=$posts;
            $_SESSION['bio']=$posts;

            header('location:index.php');



        }else{
            header('location: sign_up.php?error_message=error occured');


        }



    }



}else{
    header('location:sign_up.php?error_message=error occured');
}
?>