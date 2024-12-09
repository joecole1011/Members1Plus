<?php
require_once('connect.php');
if (isset($_POST['submit'])) {
       $secretKey = "6Ld6RJQqAAAAAPFMCtO3l02hamEd9ADo_XPkSuCg";
       $responseKey = $_POST['g-recaptcha-response'];
       $remoteip = $_SERVER['REMOTE_ADDR'];
       $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteip";
       $response = json_decode(file_get_contents($url));
       if ($response->success) {

              
              $check_username = $conn->query("SELECT * FROM members WHERE username = '$_POST[username]'");
              if ($check_username->num_rows > 0) {
                     echo "<script>alert('Username ซ้ำโปรดลองใหม่อีกครั้ง!'); </script>";
                     header('Refresh: 0; url=../register.php');
                     exit();
              }

              $check_email = $conn->query("SELECT * FROM members WHERE email = '$_POST[email]'");
              if ($check_email->num_rows > 0) {
                     echo "<script>alert('Email ซ้ำโปรดลองใหม่อีกครั้ง!'); </script>";
                     header('Refresh: 0; url=../register.php');
                     exit();
              }

              $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
              //$sql = "INSERT INTO members (name, email, password, phone, username) VALUES ('$_POST[name]','$_POST[email]','$hashed_password','$_POST[phone]','$_POST[username]')";
              
              $sql = "INSERT INTO `members` (`name`,`email`, `phone`, `username`, `password`, `create_at`) 
                                   VALUES ('" . $_POST['name'] . "',
                                   '" . $_POST['email'] . "',
                                   '" . $_POST['phone'] . "',
                                   '" . $_POST['username'] . "',
                                   '" . $hashed_password . "',
                                   '" . date("Y-m-d") . "');";

              if ($conn->query($sql) === TRUE) {
                     echo "<script>alert('สมัครสมาชิกสําเร็จ!'); </script>";
                     header('Refresh: 0; url=../index.php');
              }


              //      $check_username = $conn->query("SELECT * FROM members WHERE username = '$_POST[username]'");
              //     $check_member = $conn->query($check_username) or die($conn->error);

              //       print_r($check_username);
       } else {
              echo "<script>alert('Verification Failed!'); </script>";
              header('Refresh: 0; url=../register.php');
       }
} else {
       header('Refresh: 0; url=../register.php');
}
?>