<?php
include_once("../config.php");

$errors = array();
$username = "";
$email = "";
// register.php
if (isset($_POST['submit-reg'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($username)) {
        $errors['username'] = "Username required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "email IS INVALID";
    }

    if (empty($email)) {
        $errors['email'] = "email required";
    }

    if (empty($password)) {
        $errors['password'] = "password required";
    }

    if ($password !== $passwordConf) {
        $errors['password'] = "password not matched";
    }

    $sql_u = "SELECT * FROM admins WHERE username='$username'";
    $sql_e = "SELECT * FROM admins WHERE email='$email'";
    $res_u = mysqli_query($mysqli, $sql_u);
    $res_e = mysqli_query($mysqli, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $errors['username-db'] = "This Username Is Arledy Taken";
    }
    if (mysqli_num_rows($res_e) > 0) {
        $errors['email-db'] = "This Email Is Arledy Taken";
    }

    $emailQuery = "SELECT * FROM admins WHERE email=? LIMIT 1";
    $stmt = $mysqli->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if ($userCount > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO admins (username, email, verified, token, password) VALUES (?,?,?,?,?)";


        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);


        if ($stmt->execute()) {

            $user_id = $mysqli->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;


            sendVerificationEmail($email, $token);

            $_SESSION['message'] = "You are now logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: login.php');
            exit();
        } else {
            $errors['db_error'] = "Database error: failed to register";
        }
    }
}