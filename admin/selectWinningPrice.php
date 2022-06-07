<?php include_once('../config.php'); ?>
<?php include_once('admin-header.php'); ?>

<div class="row">

    <div class="col ">

        <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess"><img
                src="../img/dash-img/bitcoinWin.png" width="400px"></a>

    </div>
    <div class="col-sm xoom">
        <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess1"><img
                src="../img/dash-img/ethereum-eth.png" width="400px"></a>


    </div>
    <div class="col-sm xoom ">
        <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess2"><img
                src="../img/dash-img/binance-coin-bnb-logo.png" width="400px"></a>

    </div>
</div>
<script>
var myArray = [
    "BNB",
    "BNB",
    "BnB"
];

var randomItem = myArray[Math.floor(Math.random() * myArray.length)];
</script>
<div class="justify-content-center classic-1" id="id1">

</div>
<div class="justify-content-center class2" id="showMe" style="font-size: 40px; color:red">
    <script>
    var myArray = [
        "BNB",
        "BNB",
        "BNB"
    ];

    var randomItem = myArray[Math.floor(Math.random() * myArray.length)];
    document.write(randomItem);
    </script>
</div>
<style>
.class2 {
    position: absolute;
    left: 50%;
}

.classic-1 {
    font-weight: bold;
    font-family: monospace;
    font-size: 30px;
    display: grid;
}

.classic-1:before,
.classic-1:after {
    content: "the selection is";
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
<?php include_once('admin-footer.php'); ?>