<footer class="footer-main">
<div class="footer-left">
  <div>
    <h3>Beyond the Wardrobe</h3>
    <ul>
      <li><a href="#">Return Policy</a></li>
      <li><a href="#">Terms of Services</a></li>
      <li><a href="#">FAQs</a></li>
    </ul>
  </div>
</div>

<div class="footer-center">
  <div>
    <h3>About Us</h3>
    <ul>
      <li><a href="../CSSFinal/Contact.php">Contact Us</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Community</a></li>
    </ul>
  </div>
</div>
           
            <div class="footer-right">
           
            <h3>Follow Us</h3>
           
            <div class="footer-icons">
           
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></div>
            <p class="footer-company-name">Beyond Wardrobe &copy; 2023</p>
            
  
            <div class="popup">
            <div class="popup-button-wrapper">
  <button class="open-button" onclick="openForm()">Subscribe Our Newsletters</button>
</div>


        <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
    document.getElementById("overlay").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
    document.getElementById("overlay").style.display = "none";
  }
</script>



<!-- pop-up form -->
<div class="overlay" id="overlay"></div>
<div class="form-popup centered-popup" id="myForm">
  <form action="info2.php" class="form-container popup-form-container" method="POST">
    <h2>Sign up for our newsletter</h2>
    <label for="popemail"><b>Enter Your Email Below:</b></label>
    <input type="text" placeholder="write your email" id="popemail" name="popemail" required>
    <button type="submit" class="btn popup-btn">Subscribe Now!</button>
    <button type="button" class="btn cancel popup-btn" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

            </div>
</footer>
            
                      