<?php 
session_start();

include('connection.php');

if(isset($_POST['update-profile-btn'])){

    
    $id=$_SESSION['id'];
    $username=$_POST['username'];
    $bio=$_POST['bio'];
    $image= $_FILES['image']['tmp_name'];

    if($image !=""){
        $image_name= $username . ".jpg";

    }else{
       $image_name= $_SESSION['image'];
    }





    //checking username if not repetated

    $stmt= $fiber->prepare("SELECT username FROM users WHERE username=? ");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows()>0){
        header('location:profile_edit.php?error_message=username exists');
        exit;
    }else{
        $stmt = $fiber->prepare("UPDATE users SET username=?, bio=?,image=? WHERE id=?");
        $stmt->bind_param("sssi",$username,$bio,$image_name,$id);
   

        if($stmt->execute()){

            if($image !=""){
            
            move_uploaded_file($image,"assets/img/".$image_name);
            }
            //update
            $_SESSION['username']=$username;
            $_SESSION['bio']=$bio;
            $_SESSION['image']=$image_name;

            header('location:profile.php?sucess_message?Profiles created');
            exit;

            }else{
                header("location:profile_edit.php?error_message?Error,try again ");
                exit;
            }


    }
}else{ 
        header("location:profile_edit.php?error_message?Error,try again ");
        exit;
    }


?>