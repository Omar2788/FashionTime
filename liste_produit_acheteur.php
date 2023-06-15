
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<meta charset="utf-8">
<link rel="stylesheet" href="liste_vendeur.css">
    </head>
    <body>
 
        <?php
 
 require_once "pdo.php";
 require_once "headerAcheteur.php";
 require_once "session.php";
 Verifier_session();
$sql="SELECT * from produit ";
$res=$pdo->query($sql);              
?>
<div style="display: flex;">
<img src="https://scontent.ftun14-1.fna.fbcdn.net/v/t1.15752-9/353663745_1501424123970508_9219876611847822960_n.jpg?_nc_cat=110&amp;ccb=1-7&amp;_nc_sid=ae9488&amp;_nc_ohc=lwl3bMgQSxUAX_YMZig&amp;_nc_oc=AQmyEyQJntLXA_5TX6uvsvmPjAk3yrVaXIiLG1HxY_QDVZj_8MY6Pmeg_rcrv4iVEJE&amp;_nc_ht=scontent.ftun14-1.fna&amp;oh=03_AdQyNTzlargPwRgVPdxolUIhBG0uQ1Lw4WKg6Nvp0DAhmg&amp;oe=64B14979" alt="" style="width: 80px;margin-left: 20px;">
<h1 style="color: #dfd9b7;font-family: cursive;margin-left: 600px;">Fashion time</h1>
</div>
<h3 style="
    color: #dfdfdb;
    margin-left: 630px;
">📍ONLINE FASHION STORE 📍</h3><!--first carousel -->
<div class="carrous">
<img src="./images/3.png" alt="">
<img src="./images/4.png" alt="">
<img src="./images/1.png" alt="">
<img src="./images/2.png" alt="">
<img src="./images/3.png" alt="">
<img src="./images/1.png" alt="">
<img src="./images/2.png" alt="">

</div>
<hr style="background-color: #dfd9b7;height: 12px;">
<!--second carousel -->
<div>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image">
          <img src="./images/FollowInstagramPage.png">
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="./images/satisfaction.png">
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="./images/feed.png">
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>
</div>
<!--end second carousel -->
<hr>
<h1 style="text-align: center;color: #adadad;">Summer Outfits</h1>
<div class="product-list" id="liste">
    <?php foreach ($res as $row): ?>
        <div class="product-item">
            <div style="display: flex;justify-content: space-between;">
            <div class="product-name"><?= $row['nom'] ?></div>
            <div class="product-actions">
                <a href="cart.php?id_etd=<?php echo $row['id']; ?>"><i class="bi bi-bag-plus"style="color: #e1c73a;font-size: 35px;"></i></a>
            </div>
            </div>
            <div class="product-description"><?= $row['desp'] ?></div>
            <div class="product-price"><?= $row['prix'] ?> DT</div>
            <div class="product-image">
                <img src="images/<?= $row['image'] ?>" width="50" height="50">
            </div>
            
        </div>
    <?php endforeach; ?>
</div>
<div id="contact" class="footr">
    <a href="https://www.instagram.com/fashion__timee/"><i class="bi bi-instagram"></i> Visit Instagram Account</a>
    <a ><i class="bi bi-telephone"></i> 28616397</a>
    <a><i class="bi bi-geo-alt-fill"></i> Based in <b>SFAX</b></a>
</div>
</body>
</html>
