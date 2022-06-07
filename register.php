<?php include_once('header.php'); ?>
<?php include_once('authController.php') ?>;

<div class="formDiv">
    <?php if (isset($_SESSION['username-db'])) : ?>
    <div class="alert alert-warning ">
        <?php
            echo $_SESSION['username-db'];
            unset($_SESSION['username-db']);
            unset($_SESSION['alert-class']);
            ?>
    </div>
    <?php endif; ?>
    <?php if (count($errors) > 0) : ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error) : ?>
        <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <h1 class="title">Sign Up</h1>
    <form action="authController.php" method="POST">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="passwordConf" placeholder="Confirm Password">
        </div>
        <button type="submit" name="submit-reg" class="btn">SignUp</button>
        <a href="login.php">Login</a>
    </form>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    background: url(https://i.ibb.co/xqpypMx/back.png);
    background-repeat: no-repeat;
    background-size: 100%;


}


.title {
    color: #fff;
    font-size: 32px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 15px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}

.formDiv {
    position: absolute;
    top: 200px;
    left: 40%;
}

.formDiv a {
    display: block;
    width: 100%;
    text-align: center;
    color: #ffa467;
    margin-top: 8px;
    text-decoration: none;
    letter-spacing: 1px;
    transition: 0.3s;
    animation-name: onloadAnim;
    animation-duration: 1s;
}

.formDiv a:hover {
    color: #fff;
}

.input-group {
    max-width: 350px;
    width: 100%;
    background: #f0f0f0;
    margin: 10px 0;
    height: 50px;
    border-radius: 50px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    animation-name: onloadAnim;
    animation-duration: 1s;
}

.input-group i {
    text-align: center;
    line-height: 50px;
    color: #acacac;
    transition: 0.5s;
    font-size: 15px;
}

.input-group input {
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 500;
    font-size: 14px;
    color: #333;
    transition: 0.3s;
}

.btn {
    width: 100%;
    height: 45px;
    max-width: 350px;
    background: #fff;
    border: 2px solid #fff;
    border-radius: 25px;
    color: #f26200;
    cursor: pointer;
    font-weight: 500;
    transition: 0.3s;
    margin-top: 10px;
    animation-name: onloadAnim;
    animation-duration: 1s;
}

.btn i {
    font-size: 12px;
    margin-left: 4px;
}

.btn:hover {
    background: none;
    color: #fff;
}

@keyframes onloadAnim {
    from {
        transform: translateY(-88%);
    }

    to {
        transform: translateY(0);
    }
}


/* Responsivity */

@media only screen and (max-width: 990px) {
    body {
        background-size: 130%;
    }
}

@media only screen and (max-width: 740px) {
    body {
        background-size: 175%;
    }
}

@media only screen and (max-width: 555px) {
    body {
        background-size: 245%;
    }
}

@media only screen and (max-width: 420px) {
    body {
        background-size: 265%;
    }

    .formDiv {
        position: absolute;
        top: 200px;
        left: 27%;
    }
}

@media only screen and (max-width: 380px) {
    body {
        background-size: 320%;
    }
}
</style>

<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>