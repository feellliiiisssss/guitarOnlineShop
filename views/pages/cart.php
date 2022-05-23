<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Cheetarr | Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="../static/css/cart.css" />

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/link.php';?>
  </head>
  <body>
    <!-- partial:index.partial.php -->
    <php lang="en">
      <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Basket</title>
      </head>

      <body>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/navbar.php';?>  
      
        <main style="min-height: 100%;">
          <div class="basket">
            <div class="basket-labels">
              <ul>
                <li class="item item-heading">Item</li>
                <li class="price">Price</li>
                <li class="quantity">Quantity</li>
                <li class="subtotal">Subtotal</li>
              </ul>
            </div>
            <div class="basket-product">
              <div class="item">
                <div class="product-image">
                  <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame" />
                </div>
                <div class="product-details">
                  <h5>
                    <strong><span class="item-quantity">4</span> x Eliza J</strong> Lace Sleeve Cuff Dress
                  </h5>
                </div>
              </div>
              <div class="price">26.00</div>
              <div class="quantity">
                <input type="number" value="4" min="1" class="quantity-field" />
              </div>
              <div class="subtotal">104.00</div>
              <div class="remove">
                <button>Remove</button>
              </div>
            </div>
            <div class="basket-product">
              <div class="item">
                <div class="product-image">
                  <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame" />
                </div>
                <div class="product-details">
                  <h5>
                    <strong><span class="item-quantity">1</span> x Whistles</strong> Amella Lace Midi Dress
                  </h5>
                </div>
              </div>
              <div class="price">26.00</div>
              <div class="quantity">
                <input type="number" value="1" min="1" class="quantity-field" />
              </div>
              <div class="subtotal">26.00</div>
              <div class="remove">
                <button>Remove</button>
              </div>
            </div>
          </div>
          <aside>
            <div class="summary">
              <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
              <div class="summary-total">
                <div class="total-title">Total</div>
                <div class="total-value final-value" id="basket-total">130.00</div>
              </div>
              <div class="summary-checkout">
                <a href="../checkout/index.html"><button class="checkout-cta">Go to Secure Checkout</button></a>
              </div>
            </div>
          </aside>
        </main>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/footer.php';?>
      </body>
    </php>
    <!-- partial -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="./static/js/cart.js"></script>
  </body>
</php>