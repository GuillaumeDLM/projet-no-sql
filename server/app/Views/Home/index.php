<?php include('../layout/head.php'); ?>

</head>

<body>

    <?php include('../layout/header.php'); ?>

    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h2>Game form</h2>
            <p class="lead">Project NoSQL testing form</p>
        </div>
        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Add a game</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Game name</label>
                            <input type="text" class="form-control" id="gameName" name="gameName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid description is required.
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include('../layout/footer.php'); ?>