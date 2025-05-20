<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guides</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>AMG Tours</h1>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../destinations/index.php">Destination</a></li>
                <li><a href="index.php">Guides</a></li>
                <li><a href="../services/index.php">Services</a></li>
                <li><a href="../tips/index.php">Tips</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section class="section">
            <h2>Meet Our Travel Guides</h2>
            <?php
                require_once '../../inc/data.php';
                require_once '../../inc/functions.php';

                foreach ($guides as $name => $details) {
                    displayGuide($name, $details);
                }
            ?>
        </section>
    </div>

    <?php include '../../inc/footer.php'; ?>
</body>
</html>