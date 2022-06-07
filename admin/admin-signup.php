<?php
include_once("../config.php");
include_once("admin-header.php");

?>



<div class="container">
    <div class="top-header">
        <h3>Welcome </h3>
        <p>Enter your credentials to CREATE your account</p>
    </div>
    <form action="admin-signupAI.php" method="POST">
        <div class="user">
            <i class="bx bxs-user-circle"></i>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="user">
            <i class="bx bxs-user-circle"></i>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="pass">
            <i class="bx bxs-lock-alt"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="pass">
            <i class="bx bxs-lock-alt"></i>
            <input type="password" name="passwordConf" placeholder="Confirm Password">
        </div>
        <div class="btn">
            <button type="submit" name="submit-reg">SignUp</button>
        </div>
    </form>
</div>
<p class="last">LOGIN <a href="admin-login.php">LOGIN</a></p>
<?php include_once('admin-footer.php') ?>