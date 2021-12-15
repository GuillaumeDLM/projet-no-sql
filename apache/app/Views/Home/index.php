<?php include('../layout/head.php'); ?>

</head>

<body>

    <?php include('../layout/header.php'); ?>

    <div class="container-sm">
        <main class="form-signin">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../../Content/png/nosql-logo.png" alt="" width="72" height="72">
                <h2>NoSQL Project</h2>
                <p class="lead">Game testing form</p>
            </div>
            <h4 class="mb-3">Add a game</h4>
            <form class="needs-validation" novalidate>
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Valid name is required.
                </div>
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                <div class="invalid-feedback">
                    Valid description is required.
                </div>
            </form>
        </main>
    </div>

    <?php include('../layout/footer.php'); ?>