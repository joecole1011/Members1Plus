<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css ">

    <title>ประวัติส่วนตัว</title>
    <style>
        .img-profile {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: block;

        }

        .profile-top {
            margin-top: -100px;

        }
    </style>
</head>

<body>
    <?php include_once('includes/navbar.php') ?>

    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container my-5 my-sm-1">
            <h1>ประวัติส่วนตัว</h1>
        </div>
    </section>

    <section class="container my-3">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="assets/image/avatar.png" class=" my-3 img-profile rounded-circle img-thumbnail" alt="Image Profile">
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">ชื่อผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="username" value="Admin" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">ชื่อ-สกุล</label>
                                <input type="text" class="form-control" id="name" value="Admin Manager" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">อีเมลล์</label>
                                <input type="email" class="form-control" id="email" value="aaa@example.com" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" disabled value="123456789">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">ที่อยู่</label>
                            <textarea name="" id="address" class="form-control" rows="5" disabled>เพชรบูรณ์ เมืองเพชรบูรณ์

                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="card bg-dark text-center py-3 text-white">
        Copyright ©2024. All rights reserved Supported by Kimzun.<a href="https://www.facebook.com/akawit7">Kimzun</a>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>