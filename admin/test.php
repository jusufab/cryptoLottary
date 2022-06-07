<?php
include_once('../config.php');
$user = "SELECT * FROM amount    ";
$res_u = mysqli_query($mysqli, $user);

$row = mysqli_fetch_row($res_u);
while ($row = mysqli_fetch_array($res_u)) {

    // Table head


?>

<div class="row ">

    <div class="col-6">
        <?php echo $row['crypto']; ?>




    </div>
    <div class="col">
        <form action="admin-confirm-money.php" method="POST">
            <button class="btn btn-success" type="submit" name="confirm_money">Confirm </a>

        </form>

    </div>

</div>


<?php

};

?>

</body>

</html>