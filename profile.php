<?php include('dashHeader.php'); ?>


<?php

$username = $_SESSION['username'];

$qry = mysqli_query($mysqli, "SELECT * from users where username='$username'"); // select query

$data = mysqli_fetch_array($qry); // fetch data


?>
<?php



// $id_get = mysqli_query($mysqli, "SELECT id FROM users WHERE username='$username'");

// $id = mysqli_fetch_array($id_get);


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


?>


<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">

                                        <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                                        <?php
                                        $sql_id_select =  "SELECT * FROM amount WHERE user_id =" . $id;
                                        $result2 = mysqli_query($mysqli, $sql_id_select);
                                        if ($result2->num_rows > 0) {
                                            while ($row2 = $result2->fetch_assoc()) {

                                        ?>
                                        <h1 class="h4 text-gray-900 mb-4"> Your Amount is:<i
                                                class="fas fa-dollar-sign"></i><?php echo $row2['amount'] ?>
                                            <?php
                                            }
                                        } else {
                                        }
                                            ?>
                                            <?php
                                            $confirm = "SELECT money_confirm FROM amount WHERE user_id = " . $id;
                                            $confirm_result = mysqli_query($mysqli, $confirm);
                                            if ($confirm_result->num_rows > 0) {
                                                while ($row2 = $confirm_result->fetch_assoc()) {
                                                    $positive = $row2["money_confirm"];
                                                    if ($positive == 1) {
                                                        echo '<button type="button" class="btn btn-success">Confirmed</button>';
                                                    } else {
                                                        echo '<button type="button" class="btn btn-danger">Padding</button>';
                                                    }
                                                }
                                            } else {
                                            }

                                            ?>


                                        </h1>
                                        <p style="color: red;"> Please if you deposit once please do not try again your
                                            money will burn</p>


                                    </div>
                                    <?php if (isset($_SESSION['passwordc'])) : ?>
                                    <div class="alert alert-warning sty  " style=" color:red">
                                        <?php
                                            echo $_SESSION['passwordc'];
                                            unset($_SESSION['passwordc']);
                                            unset($_SESSION['alert-class']);
                                            ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($_SESSION['succesful'])) : ?>
                                    <div class="alert alert-warning sty  " style=" color:green">
                                        <?php
                                            echo $_SESSION['succesful'];
                                            unset($_SESSION['succesful']);
                                            unset($_SESSION['alert-class']);
                                            ?>
                                    </div>
                                    <?php endif; ?>


                                    <form class="user" method="POST" action="update-password.php">


                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">




                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                value="<?php echo $data['email'] ?>" id="exampleInputEmail"
                                                placeholder="Email Address" required>

                                        </div>
                                        <div class="form-group ">

                                            <input type="text" name="username" class="form-control form-control-user"
                                                value="<?php echo $data['username'] ?>" id="exampleFirstName"
                                                placeholder="Username" required>

                                        </div>
                                        <div class="form-group">

                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Password" required>


                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="passwordConf"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="Confirm Password" required>
                                        </div>
                                        <input type="submit" value="Update Account" name="submit-reg"
                                            class="btn btn-primary btn-user btn-block">
                                        <a href="logout.php">Logout</a>


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>










            </div>
        </div>

    </div>