<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/29105e638c.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('include/header.php') ?>
    </header>
    <main>
    <section class="about">
      <div class="myBreadcrumbs">
        <div class="bc-back">
          <a href="../index.php" class="btn-back">
            <div>
              <svg width="16px" height="14px" viewBox="0 0 16 14">
                <path d="M1,7 L15,7"></path>
                <polyline points="7 1 1 7 7 13"></polyline>
              </svg>
            </div>
            <span>Back</span>
          </a>
          <div class="bc-menu-back">
            <ul class="bc-nav-history">
              <li class="active"><a href="#intro">Who We Are</a></li>
              <li><a href="#Vision">Our Vision</a></li>
              <li ><a href="#plan">Our Plan</a></li>
            </ul>
            </div>
        </div>
      </div>
      <div class="aboutContent">
        <div class="intro">
          <h3>Who We Are</h3>
          <p>Beyond the Wardrobe was co-founded by Jing Zhao and Liyuan Luo in 2023. As a group of fashion-conscious individuals, we are always on the lookout for new and exciting ways to keep our wardrobes up-to-date. We value the convenience and eco-friendliness of renting clothes and are proud to support a company that shares these values. </p>
        </div>
        <div class="Vision">
          <h3>Our Vision</h3>
          <h4>Our mission is to <i>empower</i> women to feel their best every day.</h4>
          <p>Our vision for the future of fashion is one that prioritizes sustainability, accessibility, and innovation. We believe that Beyond the Wardrobe embodies these values and serves as an example of how the fashion industry can evolve to better serve consumers and the planet. We envision a world where everyone has access to high-quality, designer clothing and accessories, regardless of their budget or location. </p>
        </div>
        <div class="plan">
          <h3 id="plan">Our Plan</h3>
          <div class="planContainer">
            <div class="column">
              <h2>Basic Plan</h2>
              <p>$58/Month <br> 5 items per month</p>
              <button>Subscribe</button>
            </div>
            <div class="column">
              <h2>Standard Plan</h2>
              <p>$88/Month <br> 10 items per month</p>
              <button>Subscribe</button>
            </div>
            <div class="column">
              <h2>Premium Plan</h2>
              <p>$88/Month <br> 10 items per month</p>
              <button>Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    <footer><?php include('include/footer.php') ?></footer>
</body>
</html>