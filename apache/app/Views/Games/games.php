<?php include('../layout/head.php'); ?>

<?php
    require '../../vendor/autoload.php';
?>

</head>

<body>

    <?php include('../layout/header.php'); ?>

    <main>
        <div class="center-screen">
            <!-- Insertion des jeux -->
            <?php
            if(class_exists("\Composer\Autoload\ClassLoader"))
            {
                echo "Hello";
            }

            $hosts = [
                'host' => 'localhost',
                'port' => '9200',
                'scheme' => 'http',
                'user' => 'elastic',
                'pass' => 'changeme'
            ];

            try {
                $client = ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

                echo 'FONCTIONNE';
            } catch (\Exception $e) {
                echo 'ERREUR';
            }

            /*
            try {
                $isAvailable = $client->ping();
            } catch (\Exception $e) {
                $isAvailable = false;
            }
            */

            /*
            $params = [
                'index' => 'projet-nosql',
                'type' => 'games'
            ];
            
            $response = $client->index($params);
            print_r($response);

            try {
                $client->get([
                    'index' => 'projet-nosql',
                    'type' => 'games'
                ]);
            } catch (Exception $e) {
                // This exception is thrown and caught
                print 'Exception: ' . get_class($e) . '<br>';
                print 'Message: ' . $e->getMessage() . '<br>';
            }
            */

            ?>
        </div>
    </main>

    <?php include('../layout/footer.php'); ?>

</body>

</html>