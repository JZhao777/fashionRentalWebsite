<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Clothing</title>
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
        <section class="table1">
            <div class="tab">
                <div class="table-content">
                    <table id="mainTable">
                        <tbody>
                        
                        <tr>
          <td>
          <img src="./images/black-dress1.webp" alt="1-1">
           <p>Strapless cutout gathered knitted maxi dress by Saint Laurent</p><br>
          </td>
          <td>
         <img src="./images/white-dress1.webp" alt="1-2">
           <p>Appliquéd cotton-blend tulle maxi dress by Elie Saab</p><br>
          </td>
          <td>
          <img src="./images/blue-dress.webp" alt="1-3">
           <p>Belted pleated cotton Oxford-jacquard midi dress by Gucci</p><br>
          </td>
        </tr>
        <tr>
          <td>
         <img src="images/black-jacket-1.webp" alt="1-4">
           <p>Oversized distressed leather biker jacket by Acne Studios</p><br><br>
          </td>
          <td>
          <img src="./images/blue-jacket.webp" alt="1-5">
           <p>+ NET SUSTAIN Detroit oversized organic denim jacket by Slvrlake</p><br><br>
          </td>
          <td>
          <img src="./images/brown-jacket.webp" alt="1-6">
           <p>Appliquéd brushed-suede biker jacket by Acne Studios</p><br><br>
          </td>
        </tr>
        <tr>
          <td>
         <img src="./images/coat.webp" alt="1-7">
           <p>Badva hooded draped cotton trench coat by The Row</p><br><br>
          </td>
          <td>
          <img src="./images/coat1.webp" alt="1-8">
           <p>Double-breasted belted wool coat by Saint Laurent</p><br><br>
          </td>
          <td>
          <img src="./images/coat3.webp" alt="1-9">
           <p>Kim faux fur-trimmed organza trench coat by Dolce & Gabbana</p><br><br>
          </td>
        </tr>
                        </tbody>
                    </table>
                    <div class="table-display">
                        <p>Showing 1 to 9 of 18 items</p>
                    </div>

                    <table id="second-table" style="display: none;">
                    <tbody>
    <tr>
        <td>
            <img src="../images/jackey.webp" alt="2-1">
            <p>Leather-trimmed denim jacket by LOEWE</p><br><br>
        </td>
        <td>
            <img src="../images/black-bag-2.webp" alt="2-2">
            <p>Black handbag by Balenciaga</p><br><br>
        </td>
        <td>
            <img src="../images/pink-dress-1.webp" alt="2-3">
            <p>Woven blazer by Jacquemus</p><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <img src="../images/shoe5.webp" alt="2-4">
            <p>Viva bow-embellished leather point-toe pumps by Ferragamo</p><br><br>
        </td>
        <td>
            <img src="../images/shoe6.webp" alt="2-5">
            <p>So Kate 120 glittered leather pumps by Christian Louboutin</p><br><br>
        </td>
        <td>
            <img src="../images/shoe9.webp" alt="2-6">
            <p>Cutout leather platform sandals by Gucci</p><br><br>
        </td>
    </tr>
    <tr>
        <td>
            <img src="../images/shoe1.webp" alt="2-7">
            <p>Horsebit-detailed metallic embroidered leather platform loafers by Gucci</p><br><br>
        </td>
        <td>
            <img src="../images/shoe2.webp" alt="2-8">
            <p>Baby horsebit-detailed leather slingback pumps by Gucci</p><br><br>
        </td>
        <td>
            <img src="../images/shoe8.webp" alt="2-9">
            <p>leather-trimmed canvas-jacquard slippers by Gucci</p><br><br>
        </td>
    </tr>
</tbody>

                    </table>
                    <div class="table-display" style="display: none;">
                        <p>Showing 10 to 18 of 18 items</p>
                    </div>

                    <div class="pagination-container">
  <div class="pagination1">
    <button id="previous-page" data-page="0">&laquo; Previous</button>
    <button class="active" id="page-1" data-page="0">1</button>
    <button id="page-2" data-page="1">2</button>
    <button id="next-page" data-page="+1">Next &raquo;</button>
  </div>
  
</div>
                </div>
            </div>
        </section>
    </main>
    <footer><?php include('include/footer.php') ?></footer>
    <script src="js/js.js"></script>
</body>
</html>
