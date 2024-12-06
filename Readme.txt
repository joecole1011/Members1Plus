 
<script src=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.1/js/all.min.js "></script>
<link href=" https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.7.1/css/fontawesome.min.css " rel="stylesheet">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css ">
 
    <?php
        echo '<pre>',print_r($_POST),'</pre>';
    ?>

    <div class="g-recaptcha" data-sitekey="6Ld6RJQqAAAAACjKwkFXbJ2yazcHgBvhFF7Ih2Cq"></div>
    6Ld6RJQqAAAAAPFMCtO3l02hamEd9ADo_XPkSuCg
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src>"node_modules/bootstrap/dist/js/bootstrap.min.js"</script>

    $response = file_get_contents($url);
       $response = json_decode($response);
       if ($response->success) {
              echo "สมัครสมาชิกสําเร็จ";
       } else {
              echo "ไม่สามารถสมัครสมาชิกได้";
       }
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $phone = $_POST['phone'];
       $username = $_POST['username'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];


    git remote add origin https://github.com/joecole1011/Members1Plus.git

    git init
    git add .
    git commit -m "first commit"
    git branch -M main
    git push -u origin main