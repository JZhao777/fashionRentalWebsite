<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/29105e638c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <header> <?php include('include/header.php') ?> </header>
    <main class="mainContact">
      <img alt="contact-background" id="contact-background" class="img-fluid" src="images/backgroundcontact.jpg">
      <!-- form -->
      <div class="cContact"id="container">
        <h1>&bull; Contact Us &bull;</h1>
        <div class="underline"></div>
        <div class="centerForm">
        <form action="./info.php" method="post" id="contact-form">
          <div class="inb">
            <label class="label" for="fname">Name<br></label>
            <input type="text" placeholder="First name" id="fname" name="fname" required>
          </div>
          <div class="inb">
            <label class="label" for="lname"></label>
            <input type="text" placeholder="Last name" id="lname" name="lname" required>
          </div>
          <div class="inb">
            <label class="label" for="email">Contact info<br></label>
            <input type="email" placeholder="abc@email.com" name="email" id="email" required>
          </div>
          <br>
          <div class="inb">
            <label class="label" for="phone"></label>
            <input type="tel" placeholder="xxx xxx xxxx" name="phone" id="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" required>
          </div>
          <br>
          <div class="inb">
            <label class="label" for="subject">Message</label>
            <input type="text" placeholder="Subject" name="subject" id="subject" required>
          </div>
          <div class="inb">
            <label class="label" for="message"></label>
            <textarea placeholder="Leave your message here!" name="message" id="message" cols="30" rows="7" required></textarea>
          </div>
          <br>
          <br>
          <div class="button">
            <button class="submit">SUBMIT</button>
          </div>
        </form>
</div>
      </div>
      
    </main>
    <footer> <?php include('include/footer.php') ?> </footer>
  </body>
</html>