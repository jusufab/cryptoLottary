<?php include('config.php'); ?>

<?php

if (isset($_POST['submit'])) {
    $txid = $_POST['txid'];
    $bnb = $_POST['bnb'];
    $cash = $_POST['cash'];
    $date = date('Y/m/d H:i:s');


    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "deposit-images/" . $filename;


    $sql = "INSERT INTO deposit (txid,confirm_img,date_created)
    VALUES ('$txid','$filename','UTC_TIMESTAMP()')";

    $username = $_SESSION['username'];


    $id_get = mysqli_query($mysqli, "SELECT id FROM users WHERE username='$username' LIMIT 1");

    $id = mysqli_fetch_array($id_get);
    $sql1 = "INSERT INTO amount (amount,user_id,crypto)
      VALUES ('$cash','$id[id]','$bnb')";

    $sql3 = "INSERT INTO category (BNB)
    VALUES ('$bnb')";

    if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql1) && mysqli_query($mysqli, $sql3)) {
        $_SESSION['succesful'] = "DEPOSITE COMPLETE!";
        $_SESSION['alert-class'] = "alert-success";

        header("Location: profile.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    // Execute query

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

if (isset($_POST['submit1'])) {
    $txid = $_POST['txidbtc'];
    $btc = $_POST['btc'];
    $cash = $_POST['cash'];
    $date = date('d-m-Y');


    $filename = $_FILES["uploadfilebtc"]["name"];
    $tempname = $_FILES["uploadfilebtc"]["tmp_name"];
    $folder = "deposit-images/" . $filename;

    $sql = "INSERT INTO deposit (txid,confirm_img,date_created)
    VALUES ('$txid','$filename',UTC_TIMESTAMP())";

    $username = $_SESSION['username'];


    $id_get = mysqli_query($mysqli, "SELECT id FROM users WHERE username='$username' LIMIT 1");

    $id = mysqli_fetch_array($id_get);

    $sql1 = "INSERT INTO amount (amount,user_id,crypto)
    VALUES ('$cash','$id[id]','$btc')";
    $sql3 = "INSERT INTO category (BTC)
   VALUES ('$btc')";


    if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql1) && mysqli_query($mysqli, $sql3)) {
        $_SESSION['succesful'] = "DEPOSITE COMPLETE!";
        $_SESSION['alert-class'] = "alert-success";

        header("Location: profile.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    // Execute query

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

if (isset($_POST['submit2'])) {
    $txid = $_POST['txidEther'];
    $eth = $_POST['eth'];
    $cash = $_POST['cash'];
    $date = date('d-m-Y');


    $filename = $_FILES["uploadfileeth"]["name"];
    $tempname = $_FILES["uploadfileeth"]["tmp_name"];
    $folder = "deposit-images/" . $filename;

    $sql = "INSERT INTO deposit (txid,confirm_img,date_created)
    VALUES ('$txid','$filename',UTC_TIMESTAMP())";

    $username = $_SESSION['username'];


    $id_get = mysqli_query($mysqli, "SELECT id FROM users WHERE username='$username' LIMIT 1");

    $id = mysqli_fetch_array($id_get);

    $sql1 = "INSERT INTO amount (amount,user_id,crypto)
    VALUES ('$cash','$id[id]','$eth')";

    $sql3 = "INSERT INTO category (ETH)
VALUES ('$eth')";


    if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql1) && mysqli_query($mysqli, $sql3)) {
        $_SESSION['succesful'] = "DEPOSITE COMPLETE!";
        $_SESSION['alert-class'] = "alert-success";

        header("Location: profile.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    // Execute query

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

?>