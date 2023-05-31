<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php include('include/header.php') ?>
    </header>
    <main>
        <aside class="sidebar">
            <fieldset>
                <legend>Choose the product type: </legend>
                <input type="checkbox" id="topwear" name="outfit-filter" value="topwear" checked>
                <label for="topwear">Topwear</label>
                <input type="checkbox" id="bottoms" name="outfit-filter" value="bags" checked>
                <label for="bottoms">Bags</label>
                <input type="checkbox" id="footwear" name="outfit-filter" value="footwear" checked>
                <label for="footwear">Footwear</label>
                <input type="checkbox" id="dresses" name="outfit-filter" value="dresses" checked>
                <label for="dresses">Dresses</label>
            </fieldset>
        </aside>
        <section class="product-display-container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <img src="images/black-bag-1.webp" alt="black-bag-1" class="display-img">
                    <img src="images/black-bag-2.webp" alt="black-bag-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/green-bag-1.webp" alt="green-bag-1" class="display-img">
                    <img src="images/green-bag-2.webp" alt="green-bag-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/black-jacket-1.webp" alt="black-jacket-1" class="display-img">
                    <img src="images/black-jacket-2.webp" alt="black-jacket-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/yellow-jacket-1.webp" alt="yellow-jacket-1" class="display-img">
                    <img src="images/yellow-jacket-2.webp" alt="yellow-jacket-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/black-shoes-1.webp" alt="black-shoes-1" class="display-img">
                    <img src="images/black-shoes-2.webp" alt="black-shoes-2" class="display-img hover-pic">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/white-shoes-1.webp" alt="white-shoes-1" class="display-img">
                    <img src="images/white-shoes-2.webp" alt="white-shoes-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/white-dress-1.webp" alt="white-dress-1" class="display-img">
                    <img src="images/white-dress-2.webp" alt="white-dress-2" class="hover-pic display-img">
                </div>
                <div class="col-6 col-md-4">
                    <img src="images/pink-dress-1.webp" alt="pink-dress-1" class="display-img">
                    <img src="images/pink-dress-2.webp" alt="pink-dress-2" class="hover-pic display-img">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include('include/footer.php') ?>
    </footer>
</body>
</html>