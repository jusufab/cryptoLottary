<?php
include('config.php');

if (isset($_GET['code'])) {
    $user = $_GET['uid'];
    $code = $_GET['code'];

    $query = mysqli_query($mysqli, "select * from user2 where userid='$user'");
    $row = mysqli_fetch_array($query);

    if ($row['code'] == $code) {
        //activate account
        mysqli_query($mysqli, "update user2 set verify='1' where userid='$user'");
?>
<p>Account Verified!</p>
<p><a href="login.php">Login Now</a></p>
<?php
    } else {
        $_SESSION['sign_msg'] = "Something went wrong. Please sign up again.";
        header('location:signup.php');
    }
} else {
    header('location:index.php');
}
?>