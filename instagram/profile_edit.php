<?php include('header.php') ?>

    <div class="main">
        <div class="wrapper">
            <div class="left">
                <?php if(isset($_GET['error_message'])){ ?>
                    <p class="text-center"> <?php echo $_GET['error_message'];?> </p>
                    <?php } ?>

                <form action="processupdate.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <img src="assets/img/avatar.jpg" class="edit-profile-img">
                        <input type="file" name="image" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                            <p class="form-control">Email</p>

                    </div>
                    <div class="mb-3">
                        <label for="username"  class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="username" required>

                    </div>
                    <div class="mb-3">
                        <label for="bio"  class="form-label">bio</label>
                            <textarea type="text" id="bio" name="bio" class="form-control" cols="30" rows="3" placeholder="bio" required></textarea>

                    </div>
                    <div class="mb-3">
                            <input  type="submit" name="update-profile-btn"class="update-profile-btn" id="update-profile-btn" value="Update"/>


                    </div>
                  
                    
                </form>
                </div>
           
             
          

        <div class="right">
            <div class="right-profile-card">
                <div class="right-profile-card-pic">
                    <img src="assets/img/avatar.jpg" class="right-profile-card-pic-img">
                </div>
                <div>
                    <p class="right-profile-card-username">username</p>
                    <div class="right-profile-card-2boxes">
                        <p class="right-profile-card-subtext">subtext</p>

                        <button class="right-profile-card-btn">Log out</button>
                    </div>
                </div>
            </div>
            <p class="sug"> Suggestions</p>
            <div class="right-suggestions-card">
                 <div class="right-suggestions-card-pic">
                        <img src="assets/img/avatar.jpg" class="right-suggestions-card-pic-img">
                 </div>
                <div>
                     <p class="right-suggestions-card-username">username</p>
                         <div class="right-suggestions-card-2boxes">
                              <p class="right-suggestions-card-subtext">subtext</p>
                              <button class="right-profile-card-btn">Follow </button>
                         </div>
                 </div>
        </div>


        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>