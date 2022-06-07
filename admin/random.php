<?php

function randomName()
{
    include_once('../config.php');

    $query = mysqli_query($mysqli, "SELECT * FROM users ORDER by id");
    while ($row = mysqli_fetch_array($query)) {
        $username_array[] = "\"" . $row['username'] . "\"";
    }

    // $names = array(
    //     'Juan1',
    //     'Luis2',
    //     'Pedro3',
    //     'Juan4',
    //     'Luis5',
    //     'Pedro6',
    //     'Juan7',
    //     'Luis8',
    //     'Pedro9',
    //     'Juan10',
    //     'Luis11',
    //     'Pedro12',
    //     'Juan13',
    //     'Luis14',
    //     'Juan15',
    //     'Luis16',
    //     'Pedro17',
    //     'Juan18',
    //     'Luis19',
    //     'Pedro20',
    //     'Pedro21',
    //     // and so on

    // );
    return $username_array[rand(0, count($username_array) - 1)];
}


?>
<div class="classic-1" id="id1">

</div>
<div class="classic-1" id="showMe">
    <?php print randomName(); ?>
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