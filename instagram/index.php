<?php 
include('header.php');
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

?>




    <div class="main">
        <div class="wrapper">
            <div class="left">
                <!-- STATUS WRAPPER -->
            <div class="status-wrapper">
            <div class="status-card">
                <div class="profile-pic"><img src="assets/img/avatar.jpg"/>         </div>

                <p class="username">username</p>
              </div>
              <div class="status-card">
                <div class="profile-pic"><img src="assets/img/avatar.jpg"/>         </div>

                <p class="username">username</p>
              </div>
              <div class="status-card">
                <div class="profile-pic"><img src="assets/img/avatar.jpg"/>         </div>
                <p class="username">username</p>
              </div>
              <div class="status-card">
                <div class="profile-pic"><img src="assets/img/avatar.jpg"/>         </div>

                <p class="username">username</p>
              </div>
              <div class="status-card">
                <div class="profile-pic"><img src="assets/img/avatar.jpg"/>         </div>

                <p class="username">username</p>
              </div>
              
             </div>
             
             <div class="posts">
                <div class="info">
                    <div class="user">
                        <div class="profile-pic">
                            <img class="avatar" src="assets/img/avatar.jpg"/>
                            </div>
                            <p class="username">username</p>
                        </div> 
                        <i class="fas fa-ellipsis-h options"></i>
                    </div>
                    <img class="post-image" src="assets/img/flower.jpg"/>
                    <div class="post-content">
                     <div class="post-content-reaction">
                        <i class="icon fas fa-heart"></i>
                        <i class="icon fas fa-comment"></i>
                     </div>
                     <p class="post-content-likes">likes</p>
                     <p class="post-content-description"><span>username</span>DESCRIPTION OF POST</p>
                     <p class="post-content-time">time</p>
                     
                     </div>
                     <div chlass="comment-wrapper">
                        <img  src="assets/img/avatar.jpg" class="comment-wrapper-icon">
                        <input type="text" class="comment-wrapper-button" placeholder="add comment">
                        <button class="comment-wrapper-btn" >Add </button>
                        </div>

                    </div>

                </div>
                
             </div>

        <div class="right">
            <div class="right-profile-card">
            <div class="right-profile-card-pic">
                <img src="assets/img/avatar.jpg" class="right-profile-card-pic-img">
            </div>
            <div>
            <p class="right-profile-card-username"><?php echo $_SESSION['username'] ?></p>
            <div class="right-profile-card-2boxes">
                <p class="right-profile-card-subtext"><?php echo $_SESSION['bio'] ?></p>
                <form action="logout.php" method="GET">
                <button class="right-profile-card-btn">Log out</button>
                </form> 
            </div>
             </div>
        </div>
            
        <?php include('get_sugest.php'); ?>
        <p class="sug"> Suggestions</p>
            <?php foreach($sugs as $rows){?>
                
                <div class="right-suggestions-card">
                    <div class="right-suggestions-card-pic">
                        <img src="<?php echo "assets/img/".$rows['image'];?>" class="right-suggestions-card-pic-img"/>
                    </div>
                    <div>
                        <p class="right-suggestions-card-username"><?php echo $rows['username'];?></p>
                        <div class="right-suggestions-card-2boxes">
                            <p class="right-suggestions-card-subtext"><?php echo substr($rows['bio'],0,5); ?></p>

                            <button class="right-profile-card-btn">Follow </button>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>