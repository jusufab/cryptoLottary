<?php
require_once 'authController.php';
?>


<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Recover password!</h1>
                                    </div>
                                    <form class="user" action="verifyUser.php" method="post">

                                        <?php if (count($errors) > 0) : ?>
                                        <div class="alert alert-danger">
                                            <?php foreach ($errors as $error) : ?>
                                            <li><?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Paste Code Here" name="code" required>
                                        </div>


                                        <input type="submit" value="Recover your Password" name="submit"
                                            class="btn btn-primary btn-user btn-block">



                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</body>

</html>
<?php
require_once 'config.php';




$errors = array();
$username = "";
$email = "";

if (isset($_POST['submit'])) {
    $token = $_POST['code'];

    $sql = "INSERT INTO users(token-email) VALUES ('$token') LIMIT 1";
    $result = mysqli_query($mysqli, $sql);

    $sql2 = "SELECT * FROM users WHERE token ='$token' LIMIT 1";
    $result2 = mysqli_query($mysqli, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        $user = mysqli_fetch_assoc($result2);
        $update_query = "UPDATE users SET verified = 1 WHERE token='$token'";
    }
}