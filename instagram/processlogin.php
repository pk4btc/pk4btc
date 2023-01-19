<?php 
session_start();

include('connection.php');


if(isset($_POST['login-btn'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $fiber->prepare("SELECT id,username,email,image,followers,following,posts,bio
    FROM users WHERE email=? AND password=?");

    $stmt->bind_param('ss',$email,$password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows()>0){
        $stmt->bind_result($id,$username,$email,$image,$followers,$following,$posts,$bio);
        $stmt->fetch();
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['image'] = $image;
        $_SESSION['followers'] = $followers;
        $_SESSION['following'] = $following;
        $_SESSION['posts'] = $posts;
        $_SESSION['bio'] = $bio;
        header('Location:/index.php');


    }else{
        header('Location:login.php?error_message=Email/Password incorrect');
        exit;
    }



}else{



}



?>