<?php include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <link rel="stylesheet" href="assets/css/style.css">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
  
    <div class="camera-container">
        <?php if(isset($_GET['sucess_message'])) {?>
            <p class="alert-success"> <?php echo $_GET['sucess_message'] ;?></p>
            <?php }?>
            <?php if(isset($_GET['error_message'])) {?>
            <p class="alert-success"> <?php echo $_GET['error_message'] ;?></p>
            <?php }?>
        <div class="camera">
            <div class="camera-img">

                    <?php if(isset($_GET['image_name'])){?>
                        <img src="<?php echo "assets/img/".$_GET['image_name'];?>">

                    <?php }else{ ?>
                        <img src="assets/img/flower.jpg">

                    <?php } ?>




                <form action="create_post.php" method="post" class="camera-form" enctype="multipart/form-data">
                <div class="form-group">
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="caption" class="form-control" placeholder="type caption" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="hash" class="form-control" placeholder="type #hashtags" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="upload-image-btn" class="upload-btn">Post</button>
                        </button>      
                   </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>