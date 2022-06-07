<?php include_once('../config.php'); ?>
<?php include_once('admin-header.php'); ?>

<?php



$query = mysqli_query($mysqli, "SELECT * FROM users ORDER by id");
while ($row = mysqli_fetch_array($query)) {
    $username_array[] = "\" email: " . $row['email'] . "</br>username:" .  $row['username'] . "\"";
}


$user1 =  $username_array[rand(0, count($username_array) - 1)];



?>
<div class="container">
    <div class="justify-content-center classic-1" id="id1">

    </div>
    <div class="" id="showMe" style="color:red; font-size:40px">
        <?php echo $user1; ?>
    </div>
    <style>
    .classic-1 {
        font-weight: bold;
        font-family: monospace;
        font-size: 30px;
        display: grid;
    }

    .classic-1:before,
    .classic-1:after {
        content: "The Winner is...";
        grid-area: 1/1;
        -webkit-mask: linear-gradient(90deg, #000 50%, #0000 0) 0 50%/2ch 100%;
        animation: c1 1s infinite cubic-bezier(0.5, 220, 0.5, -220);
    }

    .classic-1:after {
        -webkit-mask-position: 1ch 50%;
        --s: -1;
    }

    #showMe {
        position: absolute;
        left: 50%;
        top: 55%;
    }

    @keyframes c1 {
        100% {
            transform: translateY(calc(var(--s, 1)*0.1%));
        }
    }

    #showMe {
        animation: cssAnimation 0s 10s forwards;
        visibility: hidden;
    }

    @keyframes cssAnimation {
        to {
            visibility: visible;
        }
    }
    </style>
    <script>
    setTimeout(() => {
        const box = document.getElementById('id1');

        // 👇️ removes element from DOM
        box.style.display = 'none';

        // 👇️ hides element (still takes up space on page)
        // box.style.visibility = 'hidden';
    }, 10000);
    </script>
</div>

<?php include_once('admin-footer.php'); ?>