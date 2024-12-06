<?php
if (isset($_POST['submit'])) {
       $secretKey = "6Ld6RJQqAAAAAPFMCtO3l02hamEd9ADo_XPkSuCg";
       $responseKey = $_POST['g-recaptcha-response'];
       $remoteip = $_SERVER['REMOTE_ADDR'];
       $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteip";
       $response = json_decode(file_get_contents($url));



       if ($response->success) {
              echo "สมัครสมาชิกสําเร็จ";
       } else {
              echo "<script>alert('Verification Failed!'); </script>";
              header('Refresh: 0; url=../register.php');
       }
} else {
       header('Refresh: 0; url=../register.php');
}
