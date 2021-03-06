<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/" />

    <!-- Bootstrap core CSS -->
    <link href="../static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="../static/css/checkout.css" rel="stylesheet" />
  </head>
  <body class="bg-light">
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="../static/assets/Cheetar-logo.png" alt="" />
          <h2>Checkout</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-6">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-12">
                  <label for="phone" class="form-label">Phone Number</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number" required />
                    <div class="invalid-feedback">Your phone number is required.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required />
                  <div class="invalid-feedback">Please enter your shipping address.</div>
                </div>

                <div class="col-md-5">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" placeholder="" required />
                  <div class="invalid-feedback">City required.</div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">ZIP Code</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required />
                  <div class="invalid-feedback">ZIP code required.</div>
                </div>
              </div>

              <hr class="my-4" />

              <h4 class="mb-3">Payment</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required />
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required />
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required />
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">Name on card is required</div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required />
                  <div class="invalid-feedback">Credit card number is required</div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required />
                  <div class="invalid-feedback">Expiration date required</div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required />
                  <div class="invalid-feedback">Security code required</div>
                </div>
              </div>

              <hr class="my-4" />

              <button class="w-100 btn btn-lg" type="submit" style="background-color: #fa724a; color: white">Continue to checkout</button>
            </form>
          </div>
        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        &copy; Copyright <strong><span>Cheetarr</span></strong
        >. All Rights Reserved
      </footer>
    </div>

    <script src="../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../static/js/checkout-validation.js"></script>
  </body>
</html>
