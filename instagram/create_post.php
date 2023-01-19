<?php 


error_reporting(E_ALL);


include('connection.php');

if(isset($_POST['upload-image-btn'])){


    
    $id=$_SESSION['id'];
    $username=$_SESSION['username'];
    $profile_image=$_SESSION['image'];
    $caption=$_POST['caption'];
    $hashtags=$_POST['hash'];
    $image= $_FILES['image']['tmp_name'];
    $like=0;
    $date=date("Y-m-d");

    $image_name= strval(time()).".jpg";


        $stmt = $fiber->prepare("INSERT INTO posts (user_id,likes,image,caption,hashtags,date,username,profile_image) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param('iissssss',$id,$likes,$image,$caption,$hashtags,$date,$username,$profile_image);



        try{
            if($stmt->execute()){
                move_uploaded_file($image,"assets/img/".$image_name);

           
               
            header("location:camera.php?sucess_message?posts created");
            exit;

            
            } else{
                header("location:camera.php?error_message?Blad w dodawaniu ");
                exit;
            }
        }
        catch(PDOException $e){
            $e->getMessage();
        }
           


    }else{ 
        header("location:camera.php?error_message?Error,try again ");
        exit;
    }


?>