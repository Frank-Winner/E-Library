<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Cart</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="cart.css" />
</head>

<body>
  <header>
    <h1>Your Cart (3 items)</h1>
  </header>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Book</th>
                <th>Author</th>
                <th>Price</th>
              </tr>
              <tr id="book" class="book">
                <td>
                  <img src="img/Screenshot 2023-02-03 102345 (13).png" alt="" class="img-fluid" />
                </td>
                <td>
                  <h5>The Christmas</h5>
                  <h3>ANNA ANGEL</h3>
                </td>
                <td>
                  <p>
                    $36.26
                    <span class="fas fa-trash" onclick="closeBook()"></span>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="img/Screenshot 2023-02-03 102247 (4).png" alt="" class="img-fluid" />
                </td>
                <td>
                  <h5>Summer Bird Feeding</h5>
                  <h3>JOHN V. DENNIS</h3>
                </td>
                <td>
                  <p>$19.26<span class="fas fa-trash"></span></p>
                </td>
              </tr>
              <tr>
                <td>
                  <img src="img/Screenshot 2023-02-03 102247 (7).png" alt="" class="img-fluid" />
                </td>
                <td>
                  <h5>The Christmas</h5>
                  <h3>ANNA ANGEL</h3>
                </td>
                <td>
                  <p>$23.26<span class="fas fa-trash"></span></p>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row myrow">
      <div class="col-md total">
        <h2>Subtotal: $78.78</h2>
        <p>Coupon: <a href="">Add a Coupon</a></p>
        <p>Discount: $6.78</p>
        <h2>Grand Total: $72.00</h2>
        <a href="checkout.php">
          <button type="button" class="btn">
            Checkout
            <span class="fas fa-arrow-right"></span></button></a>
      </div>
    </div>

    <h1>
      <a href="index.php">Back To Home</a>
    </h1>
  </section>
</body>

<script src="js/bootstrap.bundle.js"></script>
<script src="js/all.js"></script>

</html>