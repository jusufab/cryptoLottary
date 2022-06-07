<?php include('../config.php'); ?>
<?php include_once('admin-header.php'); ?>



<style>
table {

    border-collapse: collapse;

}

.inline {

    display: inline-block;


    margin: 20px 0px;

}

input,
button {

    height: 34px;

}

.users {

    display: inline-block;

}

.users a {

    font-weight: bold;

    font-size: 18px;

    color: black;

    float: left;

    padding: 8px 16px;

    text-decoration: none;

    border: 1px solid black;

    margin: 2px;

}

.users a.active {

    background-color: rgba(175, 201, 244, 0.97);

}

.users a:hover:not(.active) {

    background-color: #87ceeb;

}
</style>

</head>

<body>

    <center>

        <?php


        // variable to store number of rows per page

        $limit = 10;

        // update the active page number

        if (isset($_GET["page"])) {

            $page_number  = $_GET["page"];
        } else {

            $page_number = 1;
        }

        // get the initial page number

        $initial_page = ($page_number - 1) * $limit;

        // get data of selected rows per page 

        $getQuery = "SELECT * FROM users LIMIT $initial_page, $limit";

        $result = mysqli_query($mysqli, $getQuery);





        ?>

        <div class="container">

            <br>

            <div>


                <table class="table table-striped table-condensed    

                                          table-bordered">

                    <thead>

                        <tr>

                            <th width="10%">ID</th>

                            <th>Username</th>

                            <th>Email</th>

                            <th>Verified</th>

                            <th>Money Confirmed</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        while ($row = mysqli_fetch_array($result)) {

                            // Table head

                        ?>

                        <tr>

                            <td><?php echo $row["id"]; ?></td>

                            <td><?php echo $row["username"]; ?></td>

                            <td><?php echo $row["email"]; ?></td>

                            <td><?php echo $row["verified"]; ?></td>



                        </tr>

                        <?php

                        };

                        ?>

                    </tbody>

                </table>

                <div class="users">

                    <?php

                    $getQuery = "SELECT COUNT(*) FROM users";

                    $result = mysqli_query($mysqli, $getQuery);

                    $row = mysqli_fetch_row($result);

                    $total_rows = $row[0];

                    echo "</br>";

                    // get the required number of pages

                    $total_pages = ceil($total_rows / $limit);

                    $pageURL = "";

                    if ($page_number >= 2) {

                        echo "<a href='users.php?page=" . ($page_number - 1) . "'>  Prev </a>";
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {

                        if ($i == $page_number) {

                            $pageURL .= "<a class = 'active' href='users.php?page="

                                . $i . "'>" . $i . " </a>";
                        } else {

                            $pageURL .= "<a href='users.php?page=" . $i . "'>   

                                                " . $i . " </a>";
                        }
                    };

                    echo $pageURL;

                    if ($page_number < $total_pages) {

                        echo "<a href='users.php?page=" . ($page_number + 1) . "'>  Next </a>";
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

        window.location.href = 'users.php?page=' + page;

    }
    </script>

</body>

</html>
<?php include_once('admin-footer.php'); ?>