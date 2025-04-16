<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/fav.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TSF Bank | Basic Banking System</title>
  </head>

  <body>
    <?php include 'navbar.php'; ?>

    <!-- Home Section -->
    <section class="home" id="home">
      <div class="content">
        <h3>Welcome To TSF Banking System</h3>
        <p>Lorem ipsum dolor sit amet consectetur...</p>
        <a href="viewuser.php" class="btn"><span>view users</span>
        <i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <div class="image"><img src="img/hero.png" alt=""></div>
    </section>

    <!-- Features -->
    <section class="feature" id="feature">
      <h1>Our Banking Features</h1>
      <div class="box-container">
        <div class="box">
          <img src="img/users.png">
          <h3>Users</h3>
          <a href="viewuser.php" class="btn"><span>view users</span><i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="box">
          <img src="img/transfer.png">
          <h3>Transactions</h3>
          <a href="transfer.php" class="btn"><span>Make a Transaction</span><i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="box">
          <img src="img/history.png">
          <h3>Transaction History</h3>
          <a href="transhistory.php" class="btn"><span>Transaction History</span><i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
      <h1>Contact Us</h1>
      <div class="row">
        <div class="image"><img src="img/contact.png" alt=""></div>
        <form action="/api/send-email.php" method="POST">
          <div class="inputbox">
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
          </div>
          <div class="inputbox">
            <input type="number" name="phone" placeholder="phone" required>
          </div>
          <textarea name="message" placeholder="message" cols="30" rows="10" required></textarea>
          <button type="submit" class="btn"><span>Submit</span><i class="fa fa-paper-plane"></i></button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved | TSF Bank
            <span>Made with <i class="fa fa-heart pulse"></i> by <a href="https://www.instagram.com/connect_with_diwan/" target="_blank">Diwanshu</a></span></p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
    <script src="script.js"></script>
  </body>
</html>
