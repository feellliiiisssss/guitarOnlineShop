<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Cheetarr | Capo-Accessories</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <?php require('link.php');?>
</head>

<body>
<?php require('navbar.php');?>
  <section id="prod" class="prod section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p class="text-center">CAPO</p>
        <p class="text-center fw-light text-lowercase" style="font-size: 15px">
          Shop our extensive collection of acoustic guitars from some of the top guitar brands in the world. When you
          purchase your guitar from Cheetarr, you will receive superior service from our staff. Questions? Call us at
          336-236-2009
          or email contact@cheetarr.com and we'll be happy to help you!
        </p>
      </div>

      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                <div class="product-image">
                  <a href="#">
                    <img class="pic-1" src="../static/assets/img/Capo/capo 1.png" />
                  </a>
                  <a href="#" class="select-options" data-name="p-1"></i>QUICK VIEW</a>
                </div>
                <div class="product-content text-center">
                  <h3 class="title text-uppercase"><a href="#">GOLD CAPO</a></h3>
                  <div class="price">$10.00</div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                <div class="product-image">
                  <a href="#">
                    <img class="pic-1" src="../static/assets/img/Capo/capo 2.png" />
                  </a>
                  <a href="#" class="select-options" data-name="p-2"></i>QUICK VIEW</a>
                </div>
                <div class="product-content text-center">
                  <h3 class="title text-uppercase"><a href="#">SILVER CAPO</a></h3>
                  <div class="price">$10.00</div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product-grid5">
                <div class="product-image">
                  <a href="#">
                    <img class="pic-1" src="../static/assets/img/Capo/capo 3.png" />
                  </a>
                  <a href="#" class="select-options" data-name="p-3"></i>QUICK VIEW</a>
                </div>
                <div class="product-content text-center">
                  <h3 class="title text-uppercase"><a href="#">RED CAPO</a></h3>
                  <div class="price">$10.00</div>
                </div>
              </div>
            </div>
            <hr />
          </div>
        </div>
      </div>
  </section>
  <!-- End Capo Section -->

  <!--Quick view-->
  <div class="products-preview">
    <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="../static/assets/img/Capo/capo 1.png" alt="" />
      <h3>GOLD CAPO</h3>
      <div class="price">$10.00</div>
      <hr>
      <div class="buttons">
        <a href="#" class="cart">ADD TO CART</a>
      </div>
      <p>This one-of-a-kind J-45 Studio will turn heads. Handcrafted with a Sitka spruce top and walnut back and sides.
        The thin body depth improves underarm comfort, while the flatter fingerboard allows for better playing.
        Available in both Antique Natural and Walnut Burst finishes, as well as lefty! Finished with an active
        under-saddle piezo pickup for convenient studio quality plug and play anywhere! </p>
    </div>
    <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="../static/assets/img/Capo/capo 2.png" alt="" />
      <h3>SILVER CAPO</h3>
      <div class="price">$10.00</div>
      <hr>
      <div class="buttons">
        <a href="#" class="cart">ADD TO CART</a>
      </div>
      <p>This one-of-a-kind J-45 Studio will turn heads. Handcrafted with a Sitka spruce top and walnut back and sides.
        The thin body depth improves underarm comfort, while the flatter fingerboard allows for better playing.
        Available in both Antique Natural and Walnut Burst finishes, as well as lefty! Finished with an active
        under-saddle piezo pickup for convenient studio quality plug and play anywhere! </p>
    </div>
    <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="../static/assets/img/Capo/capo 3.png" alt="" />
      <h3>RED CAPO</h3>
      <div class="price">$10.00</div>
      <hr>
      <div class="buttons">
        <a href="#" class="cart">ADD TO CART</a>
      </div>
      <p>This one-of-a-kind J-45 Studio will turn heads. Handcrafted with a Sitka spruce top and walnut back and sides.
        The thin body depth improves underarm comfort, while the flatter fingerboard allows for better playing.
        Available in both Antique Natural and Walnut Burst finishes, as well as lefty! Finished with an active
        under-saddle piezo pickup for convenient studio quality plug and play anywhere! </p>
    </div>
  </div>
  <!---->
  <?php require('footer.php');?>


  <script type="text/javascript">
    var popupViews = document.querySelectorAll(".popup-view");
    var popupBtns = document.querySelectorAll(".popup-btn");
    var closeBtns = document.querySelectorAll(".close-btn");

    //javascript for quick view button
    var popup = function (popupClick) {
      popupViews[popupClick].classList.add("active");
    };

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove("active");
        });
      });
    });
  </script>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

      <?php require('js.php');?>
</body>

</html>