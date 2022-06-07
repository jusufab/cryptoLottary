<!-- Banner -->
<?php include_once('../config.php'); ?>
<?php include_once('admin-header.php'); ?>
<?php
if (isset($_SESSION['money'])) : ?>
<div class="alert <?php echo $_SESSION['alert-class']; ?> ">
    <?php
        echo $_SESSION['money'];
        unset($_SESSION['money']);
        ?>
</div>
<?php endif; ?>

<!-- cat_id from GET-->
<html>

<head>



    <style>
    .inline {

        display: inline-block;


        margin: 20px 0px;

    }

    input,
    button {

        height: 34px;

    }

    .items {

        display: inline-block;

    }

    .item a {

        font-weight: bold;

        font-size: 18px;

        color: black;

        float: left;

        padding: 8px 16px;

        text-decoration: none;

        border: 1px solid black;

        margin: 2px;

    }

    .item a.active {

        background-color: rgba(175, 201, 244, 0.97);

    }

    .item a:hover:not(.active) {

        background-color: #87ceeb;

    }
    </style>

</head>

<body>

    <center>

        <?php

        // m$mysqliect to the database


        // variable to store number of rows per page

        $limit = 20;

        // update the active page number

        if (isset($_GET["page"])) {

            $page_number  = $_GET["page"];
        } else {

            $page_number = 1;
        }

        // get the initial page number

        $initial_page = ($page_number - 1) * $limit;

        // get data of selected rows per page 


        $getQuery = "SELECT * FROM deposit  ORDER BY date_created DESC, id ASC LIMIT $initial_page, $limit";

        $result = mysqli_query($mysqli, $getQuery);

        ?>

        <div class="container" style="height: auto;">

            <br>

            <div>




                <?php

                while ($row = mysqli_fetch_array($result)) {

                    // Table head

                ?>
                <div class="row ">
                    <div class="col">
                        <img class="img-fluid mb-3 img1 img-thumbnail"
                            src="../deposit-images/<?= $row['confirm_img']; ?>">
                        <style>
                        .img1 {
                            height: 200px;
                        }
                        </style>
                    </div>
                    <div class="col-6">
                        <a style="font-size:20px;color:black"
                            href="https://tronscan.org/#/transaction/<?php echo $row['txid']; ?>"><?php echo $row['txid']; ?></a>




                    </div>
                    <div class="col">
                        <form action="admin-confirm-money.php" method="POST">

                            <button class="btn btn-success" type="submit" name="confirm_money">Confirm
                                </a>

                        </form>

                    </div>

                </div>


                <?php

                };

                ?>



                <div class="item align-center">

                    <?php

                    $getQuery = "SELECT COUNT(*) FROM deposit ORDER BY date_created DESC, id ASC";

                    $result6 = mysqli_query($mysqli, $getQuery);

                    $row5 = mysqli_fetch_row($result6);

                    $total_rows = $row5[0];

                    echo "</br>";

                    // get the required number of pages

                    $total_pages = ceil($total_rows / $limit);

                    $pageURL = "";

                    if ($page_number >= 2) {

                        echo "<a class='a1' href='admin-dashboard.php?page=" . ($page_number - 1) . "'>  Prev </a>";
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {

                        if ($i == $page_number) {

                            $pageURL .= "<a class = 'active' href='admin-dashboard.php?page="

                                . $i . "'>" . $i . " </a>";
                        } else {

                            $pageURL .= "<a  class='a1' href='admin-dashboard.php?page=" . $i . "'>   

                                                " . $i . " </a>";
                        }
                    };

                    echo $pageURL;

                    if ($page_number < $total_pages) {

                        echo "<a class='a1' href='admin-dashboard.php?page=" . ($page_number + 1) . "'>  Next </a>";
                    }

                    ?>

                </div>

                <div class="inline">

                    <input id="page" type="number" min="1" max="<?php echo $total_pages ?>"
                        placeholder="<?php echo $page_number . "/" . $total_pages; ?>" required>

                    <button onClick="go2Page();">Go</button>

                </div>

            </div>

        </div>

    </center>

    <script>
    function go2Page()

    {

        var page = document.getElementById("page").value;

        page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));

        window.location.href = 'admin-dashboard.php?page=' + page;

    }
    </script>

</body>

</html>

</div>
</div>
<?php include_once('admin-footer.php'); ?>