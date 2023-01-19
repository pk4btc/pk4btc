<?php 
include('header.php');
?>

<header class="profile-header">
    <header class="profile-container">
        <div class="profile">
           
            <div class="profile-user-sett">
                <div class="profile-img">
                    <img src="assets/img/avatar.jpg">
                </div>
                <h1 class="profile-username"><?php echo $_SESSION['username']; ?></h1>
                <form class="profile-username-edit-form" action="profile_edit.php" method="GET">

                    <button type="submit"  class="profile-btn profile-edit-btn">edit</button>
                </form>
                <button class="profile-btn profile-sett-btn"  id="options_btn"  ><i class="fas fa-cog"></i></button>


                    <div class="popup" id="popup" >
                        <div class="popup-window">
                            <div class="para" >
                            <a href="profile_edit.php">edit</a> 
                           <span class="close-popup" id="close_popup" >&times</span>
                          
                        </div>
                           
                            <a href="camera.php">create post</a>
                            <a href="logout.php">logout</a>
                        </div>
                    </div>

            </div>
            <div class="profile-stats">
                <ul>
                    <li><span class="profile-stat-count"><?php echo $_SESSION['posts'];?></span>Posts</li>
                    <li><span class="profile-stat-count"> <?php echo $_SESSION['followers']; ?></span>Followers</li>
                    <li><span class="profile-stat-count"> <?php echo $_SESSION['following']; ?></span>Following</li>
                </ul>
            </div>
            <div class="profile-bio">
                <p><span class="profile-real-name"><?php echo $_SESSION['username'] . " ,";?></span><?php echo $_SESSION['bio'];?> </p>
            </div>
        </div>

</header>
<main>
    <div class="gallery-con">
        <div class="gallery">

        <?php include("get_user_posts.php"); ?>
        
         <?php  foreach($posts as $post){    ;
?>
        
        
           
            <div class="gallery-item">
                <img class="gallery-image" src="<?php echo "assets/img/".$post['image'];?>" >
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="hide-gallery"><?php echo $post['likes'];?></span>
                            <i class="fas fa-heart"></i></li>
                        <li class="gallery-item-coments"><span class="hide-gallery"><?php echo $post['likes'];?></span>
                        <i class="fas fa-comment"></i></li>
                    </ul>
                </div>

            </div>

         <?php } ?>

            

           

           

        </div>

    </div>
</main>


<script>

var popupWindow =  document.getElementById('popup')
var optionsBtn = document.getElementById('options_btn')
var closeWindow = document.getElementById('close_popup')
var openHiddenMenu = document.getElementById('options_btn')

optionsBtn.addEventListener("click",(e)=>{
    e.preventDefault()
    popupWindow.style.display= "block"

})



closeWindow.addEventListener("click",(e)=>{
    e.preventDefault()
    popupWindow.style.display="none"
})
openHiddenMenu.addEventListener("click",(e)=>{
    e.preventDefault()
    popupWindow.style.display = "block"
    


})
window.addEventListener("click",(e)=>{
    if (e.target == popupWindow){
        popupWindow.style.display="none"
     }
})




</script>




</body>
</html>