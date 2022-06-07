<?php
include_once('../config.php');


if (isset($_POST['confirm_money'])) {
    $username = $_SESSION['username'];

    $sql_query = "SELECT id FROM users WHERE username='$username'";

    $result = $mysqli->query($sql_query);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
        }
    } else {
        echo "0 results";
    }

    $sql2 = "SELECT money_confirm FROM amount WHERE user_id=" . $id;
    $result2 = mysqli_query($mysqli, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        $user = mysqli_fetch_assoc($result2);
        $confirm = mysqli_query($mysqli, "UPDATE amount SET money_confirm = 1 WHERE user_id= " . $id);
    }

    mysqli_num_rows($confirm);
    header("Location:admin-dashboard.php");
    $_SESSION['alert-class'] = "alert-success";

    $_SESSION['money'] = "You successful confirmed";
} else {
    echo "error";
}