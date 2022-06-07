<?php
include_once("../config.php");

$errors = array();
$username = "";
$email = "";

if (isset($_POST['submit-log'])) {
    $username = $_POST['username'];

    $password = $_POST['password'];

    if (empty($username)) {
        $errors['username'] = "Username required";
    }


    if (empty($password)) {
        $errors['password'] = "password required";
    }

    if (count($errors) === 0) {
        $sql = "SELECT * FROM admins WHERE email=? OR username=? LIMIT 1";
        $wrongUsernames = "SELECT username FROM admins ";
        $Result = mysqli_query($mysqli, $wrongUsernames);

        if (mysqli_num_rows($Result) == 0) {
            $errors['wrong-username'] = "This Username Do Not Exist";
        } else {


            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('ss', $username, $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];

                $_SESSION['message'] = "You are now logged in!";
                $_SESSION['alert-class'] = "alert-success";
                header('location:admin-dashboard.php');
                exit();
            } else {
                echo "Wrong credentials";
                header('location:admin-login.php');
            }
        }
    }
}