<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beyond the Wardrobe</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/29105e638c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/29105e638c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <?php include('include/header.php') ?>
    </header>
    <main class="mainHome">
      <img alt="index-background" id="index-background" class="img-fluid" src="images/index-background.jpg">
      <div class="background-wrapper">
        <section class="index-part-1-container">
          <div class="background-image"></div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/daily-outfit-1.jpg" class="d-block w-100 daily-outfit" alt="daily-outfit-1">
              </div>
              <div class="carousel-item">
                <img src="images/daily-outfit-2.jpg" class="d-block w-100 daily-outfit" alt="daily-outfit-2">
              </div>
              <div class="carousel-item">
                <img src="images/daily-outfit-3.jpg" class="d-block w-100 daily-outfit" alt="daily-outfit-3">
              </div>
              <div class="carousel-item">
                <img src="images/daily-outfit-4.jpg" class="d-block w-100 daily-outfit" alt="daily-outfit-3">
              </div>
              <div class="carousel-item">
                <img src="images/daily-outfit-5.jpg" class="d-block w-100 daily-outfit" alt="daily-outfit-3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
          </div>
          <div id="index-part-1-right" class="container">
            <blockquote class="blockquote">
              <p>Own your moment.<br>Rent the look.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <cite>Enrich your choices, reduce fashion wastes.</cite>
            </figcaption>
            <br>
              <a class="btn btn-outline-dark collection-btn" href="clothes.php">See collections</a>  
          </div>
        </section>
      </div>
      <section class="index-part-2-container">
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="images/holiday.jpg" alt="holiday-pic" />
              <div class="gallery-item-overlay">
                <div class="gallery-item-text">
                  <h3>Holiday</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="images/night-out.webp" alt="night-out-pic" />
              <div class="gallery-item-overlay">
                <div class="gallery-item-text">
                  <h3>Night out</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="gallery-item">
              <img src="images/wedding.webp" alt="weddings-pic" />
              <div class="gallery-item-overlay">
                <div class="gallery-item-text">
                  <h3>Weddings</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="index-part-3-container">
        <div class="p1">
          <img src="./images/eco.png" alt="eco">
          <p>Renting clothes from us is not only a fashion-forward choice but an eco-friendly one too. You can feel good about reducing textile waste and carbon emissions while still looking fabulous.</p>
        </div>
        <div class="p2">
          <p>Say goodbye to the hassle of buying clothes and hello to the convenience of renting. Our online platform makes it easy to choose from a variety of styles, colors, and sizes, with hassle-free delivery and returns.</p>
          <img src="./images/return.png" alt="return">
        </div>
        <div class="p3">
          <img src="./images/shop-bag-heart.png" alt="heart">
          <p>Experience high-end fashion without breaking the bank by renting from us. With cost-effective prices and access to designer clothing, you can feel confident that you're getting the best value for your money.</p>
        </div>
        <div class="p4">
          <p>Join our fashion-forward community and make a positive impact on the world by renting clothes from us. With a wide range of options to choose from and a commitment to sustainability, you can feel confident that you're making a conscious choice for the environment without sacrificing style.</p>
          <img src="./images/community.png" alt="heart">
      </section>
    </main>
    <footer> <?php include('include/footer.php') ?> </footer>
    <script src="js/img-slides.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>