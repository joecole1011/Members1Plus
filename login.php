<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css ">

    <title>เข้าสู่ระบบ</title>
</head>

<body>
<?php include_once('includes/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class=" offset-3 col-md-6 mt-5">
                <div class="card">
                    <h5 class="card-header text-center">เข้าสู่ระบบ</h5>
                    <div class="card-body">
                        <form class="form">

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="Username" placeholder="Username">
                            </div>


                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>


                            <button type="submit" class="btn btn-primary btn-block  md-2">เข้าสู่ระบบ</button>
                            <span class="float-right">สมัครสมาชิก <a href="register.php">คลิกที่นี่</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="card bg-dark text-center py-3 text-white">
        Copyright ©2024. All rights reserved Supported by Kimzun.<a href="https://www.facebook.com/akawit7">Kimzun</a>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>