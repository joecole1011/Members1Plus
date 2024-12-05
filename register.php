<?php
       echo '<pre>',print_r($_POST),'</pre>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css ">

    <title>ลงทะเบียน</title>
</head>

<body>
    <?php include_once('includes/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class=" offset-3 col-md-6 mt-5">
                <div class="card">
                    <h5 class="card-header text-center">สมัครสมาชิก</h5>
                    <div class="card-body">
                        <form class="form" id="formRegister" method="post" action="">

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-user"></i></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ - นามสกุล">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-at"></i></div>
                                </div>
                                <input type="text" class="form-control" id="email" name="email" placeholder="example@domain.com">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-phone-volume"></i></div>
                                </div>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="เบอร์โทรศัพท์">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                            </div>


                            <button type="submit" class="btn btn-primary btn-block  md-2">สมัครสมาชิก</button>
                            <span class="float-right">เข้าสู่ระบบ <a href="login.php">คลิกที่นี่</a></span>
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
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        //formRegister
        $(document).ready(function() {
            $('#formRegister').validate({
                rules: {
                    name: 'required',
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        number: true,
                        maxlength: 20
                    },
                    username: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    confirm_password: {
                        required: true,
                        minlength: 4,
                        equalTo: "#password"
                    }
                },
                messages: {
                    name: 'กรุณากรอกชื่อ-นามสกุล',
                    email: {
                        required: 'กรุณากรอกE-mail',
                        email: 'โปรดกรอกE-mailให้ถูกต้อง'
                    },
                    phone: {
                        required: 'กรุณากรอกเบอร์โทรศัพท์',
                        number: 'โปรดกรอกตัวเลขเท่านั้น',
                        maxlength: 'โปรดกรอกเบอร์โทรศัพท์ไม่เกิน 20 ตัวอักษร'
                    },
                    username: {
                        required: 'โปรดกรอกชื่อผู้ใช้งาน',
                        minlength: 'โปรดกรอกชื่อผู้ใช้งานอย่างน้อย 4 ตัวอักษร'
                    },
                    password: {
                        required: 'โปรดกรอกรหัสผ่าน',
                        minlength: 'โปรกรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร'
                    },
                    confirm_password: {
                        required: 'โปรดกรอกรหัสผ่าน',
                        minlength: 'โปรดกรอกรหัสผ่านอย่างน้อย 4 ตัวอักษร',
                        equalTo: 'โปรดกรอกรหัสผ่านให้ตรงกัน'
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');

                    if (element.prop('type') === 'checkbox') {
                        error.insertAfter(element.next('label'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-valid').removeClass('is-invalid');
                }
            });
        })
    </script>
</body>

</html>