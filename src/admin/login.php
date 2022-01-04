<?php
    session_start();
    if(isset($_SESSION['userlogin'])){
        header("Location: ./admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/stylesAdm.css">
    <script src="https://kit.fontawesome.com/73fc3f3ec0.js" crossorigin="anonymous"></script>
    <title>Admin Login Page</title>
</head>
<body>
    
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="../../assets/newlogo.jpg" alt="pro know logo" class="brand_logo">
                </div>
            </div>
            <div class="justify-content-center d-flex form_container">
                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text" style="height: 100%;"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control input_user" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text" style="height: 100%;"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                            <label for="customControlInline" class="custom-control-label">Remember me</label>
                        </div>
                    </div>
                
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
                <button type="button" name="button" id="login" class="btn login_btn">Login</button>
            </div>
            </form>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="./registration.php" style="margin-left: 2px;">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="../../index.html" class="nav-link" style="font-weight: bold;"> <i class="fas fa-home"></i>Home Page</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    $(function(){
        $('#login').click(function(e){
            var valid = this.form.checkValidity();
            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
            }
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username: username, password: password},
                success: function(data){
                    if($.trim(data)=="1"){
                        setTimeout('window.location.href = "admin.php"', 2000);
                    }else{
                        Swal.fire({
                        title: 'Error!',
                        text: 'Invalid User name or Password ',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        iconColor: '#c0392b',
                        confirmButtonColor: '#c0392b'
                        })
                    }
                },
                error: function(data){
                    alert('errors while doing')
                }
            })
        });
    });
</script>
</body>
</html>