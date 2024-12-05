<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css ">

    <title>แก้ไขประวัติส่วนตัว</title>
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
                <img src="assets/image/avatar.png" class="img-profile rounded-circle img-thumbnail" alt="Image Profile">
                <!-- Button trigger modal -->
                <button type="button" class="btn mx-auto d-block btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
                    เปลี่ยนรูปภาพ
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">อัพโหลดรูปภาพ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <input type="file" onchange="readURL(this)">
                                <figure class="figure text-center d-none">
                                    <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
                                </figure>

                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" id="username" value="Admin">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">ชื่อ-สกุล</label>
                                    <input type="text" class="form-control" id="name" value="Admin Manager">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">อีเมลล์</label>
                                    <input type="email" class="form-control" id="email" value="aaa@example.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" id="phone" value="123456789">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">ที่อยู่</label>
                                <textarea name="" id="address" class="form-control" rows="5">

                            </textarea>
                            </div>

                            <a href="profile.php" class=" btn btn-warning float-left">
                                ย้อนกลับ
                            </a>

                            <input type="submit" class="btn btn-primary float-right" value="บันทึกข้อมูล">

                        </form>
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

    <script>
        function readURL(input) {
            if (input.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e) {
                    $('#imgUpload').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0])
            }
        }
    </script>


</body>

</html>