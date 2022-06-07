<?php include('config.php'); ?>
<?php include('dashHeader.php');

?>



<link href="css/sb-admin-2.min.css" rel="stylesheet">

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">

                                        <h1 class="h4 text-gray-900 mb-4">Deposit $USDT(Tron20) for BTC </h1>
                                    </div>



                                    <form class="user" action="deposit-logic.php" method="POST"
                                        enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Deposit amounts</label>
                                            <input type="text" value="5" name="cash"
                                                class="form-control form-control-user" id="exampleInputEmail" readonly>

                                        </div>
                                        <div class="form-group">
                                            <label>Our Address </label>

                                            <input type="text" value="TPmjPQtpRJkVdy4DyqArTGFJDbxsxSqQkB"
                                                class="form-control form-control-user" id="exampleInputEmail" readonly>

                                        </div>
                                        <div class="form-group">
                                            <label>Please add TXID</label>

                                            <input type="text" name="txidbtc" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="TXID" required>

                                        </div>
                                        <div class="form-group">
                                            <label>BTC</label>

                                            <input type="text" name="btc" value="BTC"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                placeholder="BTC" required>

                                        </div>

                                        <label>Upload Image withdrawal confiramtion</label>

                                        <div class="form-group">

                                            <!-- actual upload which is hidden -->
                                            <input type="file" name="uploadfilebtc" id="actual-btn" hidden />

                                            <!-- our custom upload button -->
                                            <label for="actual-btn" name="image" class="label1">Choose File</label>

                                            <!-- name of file chosen -->
                                            <span id="file-chosen" name="image">No file chosen</span>
                                        </div>
                                        <input type="submit" value="Deposite" name="submit1"
                                            class="btn btn-primary btn-user btn-block">



                                        <button class="btn btn-primary text-center justify-content-center"> <a
                                                href="dashboard.php">GO BACK</a></button>



                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>










            </div>
        </div>

    </div>

    <style>
    .label1 {
        background-color: indigo;
        color: white;
        padding: 0.5rem;
        font-family: sans-serif;
        border-radius: 0.3rem;
        cursor: pointer;
        margin-top: 1rem;
    }

    #file-chosen {
        margin-left: 0.3rem;
        font-family: sans-serif;
    }
    </style>
    <script>
    const actualBtn = document.getElementById('actual-btn');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function() {
        fileChosen.textContent = this.files[0].name
    })
    </script>