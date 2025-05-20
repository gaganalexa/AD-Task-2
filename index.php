<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <Home>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>AMG Tours</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/destinations/index.php">Destination</a></li>
                <li><a href="pages/guides/index.php">Guides</a></li>
                <li><a href="pages/services/index.php">Services</a></li>
                <li><a href="pages/tips/index.php">Tips</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
      <section class="hero">
        <h1>TRAVEL WITH EASE</h1>
        <p>TRAVEL WITH PASSION, WITH AMG TOURS</p>
      </section>
    <div class="grid-container">
      <div class="grid-item">
        <a href="pages/destinations/index.php">
          <div class="image-container">
            <img src="assets/img/destinations.png" alt="Destination">
            <div class="overlay-text">Destinations</div>
          </div>
        </a>
        </div>
        <div class="grid-item">
          <a href="pages/guides/index.php">
            <div class="image-container">
              <img src="assets/img/guides.png" alt="Guides">
              <div class="overlay-text">Guides</div>
            </div>
          </a>
        </div>
        <div class="grid-item">
          <a href="pages/services/index.php">
            <div class="image-container">
              <img src="assets/img/services.png" alt="Services">
                <div class="overlay-text">Services</div>
                </div>
          </a>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>
</body>
</html>