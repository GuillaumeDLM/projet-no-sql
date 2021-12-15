<?php include('../layout/head.php'); ?>

</head>

<body>

    <?php include('../layout/header.php'); ?>

    <main>
        <div class="center-screen">
            <div class="container">
                <h1>Games</h1>
                <!-- Insertion des jeux -->
                <?php include('../../Controllers/games/list-games.php'); ?>
            </div>
        </div>
    </main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include('../layout/footer.php'); ?>

</body>

</html>