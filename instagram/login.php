<?php 

session_start();

if(isset($_SESSION['id'])){

    header('Location:index.php');
}

?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="assets/css/style.css">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div class="container">
    <div class="container-main">
        <div class="container-main-content">
            <div class="container-main-slide" style="background-image: url('assets/img/phoneTransparent.png');">
                <div id="container-main-slide-items">
                    <img class="active"   src="assets/img/czerwienNiluMala1.jpg" alt="photo1"/>
                    <img src="assets/img/czerwienNiluMala2.jpg"alt="photo1">
                    <img src="assets/img/fioletowaDuza1.jpg" alt="photo1">
                    <img src="assets/img/niebieskiKsiezyc.JPG" alt="photo1">
                </div>
            </div>


            <div class="container-main-form"> 
                <?php if (isset($_GET['error_message'])){  ?>
                    <p id="err_message" class="text-center alert-danger"> <?php echo ($_GET['error_message']); ?></p>


                <?php } ?>


                <div class="container-main-form-content box">
                    <div class="logo">
                        <img src="assets/img/logo.png" class="logo-img" alt="logo-obraz">
                    </div>
                    <form class="login-form" id="login-form" method="POST" action="processlogin.php">
                        <div class="form-group">
                            <div class="login-input" >
                                <input type="text" name="email" placeholder="type email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="login-input">
                                <input type="password" id="password" name="password" placeholder="type password" required>
                            </div>
                        </div>
                        <div class="btn-group"> 
                            <button class="login-btn" id="login-btn" name="login-btn"
                            type="submit">Log in</button>

                        </div>
                    </form>
                    <div class="or">
                        <hr/>
                           <span>OR</span>
                        <hr/>
                    </div>
                    <div class="create-acc">
                        <p> dont have an account<a href="sign_up.html"> Sign Up</a> </p>
                    </div>
                    <div class="app-download">
                        <p>Get the app</p>
                        <div class="store-link">
                            <a href="#"><img src="assets/img/store.jpg"></a>
                        </div>
                </div>

                </div>
            </div>
        </div>
        </div>

        <footer class="links" id="links">
            <a href="#">About</a>
            <a href="#">BLog</a>
            <a href="#">Jobs</a>
            <a href="#">Privacy</a>
            <a href="#">Api</a>
            <a href="#">Terms</a>
            <a href="#">Top Acc</a>
            <a href="#">Hash</a>
            <a href="#" id="dark-btn">DarkMOde</a>
        </footer>
        <div class="copyright">
            @Prezent365

        </div>
    </div>

</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script> 

let zmiennikZdjecia
document.getElementById('dark-btn').addEventListener('click',e=>{
    e.preventDefault()
    changeMode()
})

setInterval(() => {changeImage();
    
}, 3000);
changeImage()
function changeImage(){
    var images = document.getElementById('container-main-slide-items').getElementsByTagName('img')
    var i=0

    for(i=0; i <images.length; i++){
        var image=images[i]

        if( image.classList.contains('active'))
        {
            image.classList.remove('active')

            if (i==images.length-1){
                var nextimage=images[0]
                nextimage.classList.add('active')
                break;
            }

            var nextimage= images[i+1]
            nextimage.classList.add('active')
            break;
            
         

        }

    }
}
function changeMode(){
    var body= document.getElementsByTagName('body')[0]
    var footerLinks=document.getElementById('links').getElementsByTagName('a')

    if(body.classList.contains('dark')){
        body.classList.remove('dark')
    }else{
        // using light
        body.classList.add('dark')
    }

}
// function verifyForm(){

    var password = document.getElementById('password').value
    var err= document.getElementById('err_message')

    if (password.length<6){
        err.innerHTML=('To short')
    }
   
        return true


// document.getElementById('login-form').addEventListener('submit',(e)=>{
// e.preventDefault()
// verifyForm()
// })
document.getElementById('dark-btn').addEventListener('click',(e)=>{
    e.preventDefault()
    changeMode()
})



</script>
</body>
</html>