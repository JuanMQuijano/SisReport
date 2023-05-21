<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisReport</title>

    <!-- css  -->
    <link rel="stylesheet" href="/build/css/app.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div class="bg">
        <div class="container">

            <?php require_once __DIR__ . "/aside.php" ?>

            <?php echo $contenido; ?>
            <?php echo $script ?? ''; ?>
        </div>
    </div>

    <script src="/build/js/main.min.js"></script>
</body>

</html>