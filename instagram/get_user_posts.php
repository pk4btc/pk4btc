<?php 
session_start();
include('connection.php');

  
$user_id= $_SESSION['id'];


$stmt = $fiber->prepare('SELECT * FROM posts WHERE user_id=?');
$stmt->bind_param('i',$user_id);

if ($stmt->execute()){

    $posts=$stmt->get_result();
    echo $posts;
}else{
    echo 'BLADDDD';
    echo $posts;
}






?>





</body>
</html>