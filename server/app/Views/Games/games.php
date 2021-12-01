        <?php include('../layout/head.php'); ?>

        <link href="../../Content/css/style-tab.css" rel="stylesheet">
        
    </head>
    <body>
    
        <?php include('../layout/header.php'); ?>

        <main>
			<div class="center-screen">
                <!-- Insertion des fromages -->
                <?php include('../../Controllers/fromages/list-fromages.php'); ?>
            </div>    
        </main>

        <?php include('../layout/footer.php'); ?>

    </body>
</html>