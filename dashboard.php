<?php include_once('dashHeader.php');
?>


<h1 class="text-center h1Text">What Do you want To win?</h1>
<div class="container ">
    <?php
    if (isset($_SESSION['message'])) : ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?> ">
        <?php
            echo $_SESSION['message'];

            unset($_SESSION['message']);

            ?>
    </div>
    <?php endif; ?>
    <?php
    if (isset($_SESSION['message1'])) : ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?> ">
        <?php
            echo $_SESSION['message1'];

            unset($_SESSION['message1']);

            ?>
    </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-sm xoom">

            <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess"><img
                    src="img/dash-img/bitcoinWin.png"></a>

        </div>
        <div class="col-sm xoom">
            <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess1"><img
                    src="img/dash-img/ethereum-eth.png"></a>


        </div>
        <div class="col-sm xoom ">
            <a href="#" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#centralModalSuccess2"><img
                    src="img/dash-img/binance-coin-bnb-logo.png"></a>

        </div>
    </div>
</div>
<!-- bitcoin -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Modal Success</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <div class="form-outline">

                    </div>
                    <h4>Go to Deposit page</h4>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="deposit-btc.php" type="button" class="btn btn-success">Go TO DEPOSITE</i></a>


                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Ethereum -->
<div class="modal fade" id="centralModalSuccess1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Modal Success</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <div class="form-outline">

                    </div>
                    <h4>Go to Deposit page</h4>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="deposit-eth.php" type="button" class="btn btn-success">Go TO DEPOSITE</i></a>


                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- SMARTCHAIN -->
<div class="modal fade" id="centralModalSuccess2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Modal Success</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <div class="form-outline">

                    </div>
                    <h4>Go to Deposit page</h4>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a href="deposit-bnb.php" type="button" class="btn btn-success">Go TO DEPOSITE</i></a>

                <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->
<!-- <script>
function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("myInput");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
}
</script> -->
<?php include_once('footer.php') ?>