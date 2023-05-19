<?php include '../connect.php'; ?>
<?php

if ($_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        if ($email == "") {
            echo '<script type=text/javascript>';
            echo 'alert("Username is required");';
            echo '</script>';
        }

        if ($password == "") {
            echo '<script type=text/javascript>';
            echo 'alert("Password is required");';
            echo '</script>';
        }
    } else {

        $sql = "SELECT * FROM `signup_master` WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script type=text/javascript>';
            echo 'alert("Login Successfull!");';
            echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/branchMaster/add.php"';
            echo '</script>';
        } else {
            echo '<script type=text/javascript>';
            echo 'alert("Login Failed!");';
            echo 'window.location.href = "http://localhost:8080/GarageMgtSystem/module/User/login.php"';
            echo '</script>';
        }
    }
}

?>