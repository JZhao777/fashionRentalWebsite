<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us!</title>
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
      <img alt="contact-background" id="contact-background" class="img-fluid" src="images/backgroundcontact.jpg">
    <div id="container">
		<h1>&bull; Contact Us &bull;</h1>
		<div class="underline"></div>

		<?php
		
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];
		?>
       <h2>Hello, <?php echo $first_name . ' ' . $last_name; ?>!</h2>
		<p>Thank you for contacting us!&nbsp;We got your message.&nbsp; We will get back to you soon by your email:&nbsp;<?php echo $email; ?></p>
	</div>
    </main>
    <footer><?php include('include/footer.php') ?></footer>
</body>
</html>