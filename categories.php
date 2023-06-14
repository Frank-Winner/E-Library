<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand"
          ><img src="img/Screenshot 2023-02-03 232003.png" alt="" /> E-LIBRARY
        </a>
        <button
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#mynavmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="mynavmenu"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php" class="nav-link">HOME</a>
            </li>

            <li class="nav-item dropdown">
              <a
                href=""
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                >CATEGORIES</a
              >
              <ul class="dropdown-menu bg-dark dropdown-menu-dark">
                <li>
                  <a href="categories.php#action" class="dropdown-item"
                    >Action</a
                  >
                </li>
                <li>
                  <a href="categories.php#romance" class="dropdown-item"
                    >Romance</a
                  >
                </li>
                <li>
                  <a href="categories.php#horror" class="dropdown-item"
                    >Horror</a
                  >
                </li>
                <li>
                  <a href="categories.php#psychology" class="dropdown-item"
                    >Psychology</a
                  >
                </li>
                <li>
                  <a href="categories.php#comedy" class="dropdown-item"
                    >Comedy</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="About.php" class="nav-link">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a href="preloader.php" class="nav-link">CART</a>
            </li>
            <li class="nav-item">
              <a href="dahsboard.php" class="nav-link"
                ><span class="fas fa-user"></span
              ></a>
            </li>
            <li class="nav-item dropdown">
              <a
                href=""
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
              ></a>
              <ul class="dropdown-menu SL">
                <li>
                  <a href="SignUp.php" class="dropdown-item">Sign Up</a>
                </li>
                <li>
                  <a href="SignUp.php" class="dropdown-item">Login</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top: 20px">
      <h1>Just go down already</h1>
    </div>
    <div class="container mt-3">
      <div
        id="mycarousel"
        class="carousel slide categories"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            data-bs-target="#mycarousel"
            data-bs-slide-to="0"
            class="active"
          ></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="1"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="2"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="3"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="4"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="5"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="6"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="7"></button>
          <button data-bs-target="#mycarousel" data-bs-slide-to="8"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row" id="action">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (2).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Action</h2>
                <p>Loads of action packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="romance">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (7).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Romance</h2>
                <p>
                  In the season of love we bring to you the most romantic
                  novels.
                </p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="horror">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102247 (4).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Horror</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="kids">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (3).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Kids</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="kids">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (5).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Kids</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="educational">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102345 (9).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Educational</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="comedy">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102247 (5).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Comedy</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="documentary">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (6).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Documentary</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row" id="psychology">
              <div class="col-md img-col">
                <img
                  src="img/Screenshot 2023-02-03 102323 (3).png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="col-md info mt-5">
                <h2>Psychological</h2>
                <p>Loads of horror packed novels/books just a click away.</p>
                <a href="Paid.php" class="btn">Paid Books</a
                ><a href="Free.php" class="btn">Free Books</a>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          data-bs-target="#mycarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button
          class="carousel-control-next"
          data-bs-target="#mycarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <div class="container first-container mt-5 mb-3">
      <h1
        class="conth1"
        style="
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
            'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          padding-left: 60px;
        "
      >
        READ RECENTLY
      </h1>
      <div class="row first-row">
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (3).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (5).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">$15.65</button>
              <button class="button-dark" type="button">Preview</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (2).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (7).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row first-row">
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (3).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (5).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (2).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (7).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container first-container mt-5 mb-3">
      <h1
        class="conth1"
        style="
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
            'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          padding-left: 60px;
        "
      >
        MOST READ BOOKS
      </h1>
      <div id="most read" class="row first-row">
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (6).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (7).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (5).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">$15.65</button>
              <button class="button-dark" type="button">Preview</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (3).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (2).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row first-row">
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (2).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (5).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (3).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102323 (4).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">$40.65</button>
              <button class="button-dark" type="button">Preview</button>
            </div>
          </div>
        </div>
        <div class="col-md">
          <img
            src="img/Screenshot 2023-02-03 102247 (7).png"
            alt=""
            class="img-fluid books"
          />
          <div class="row">
            <div class="col-md mt-2">
              <button class="button-dark" type="button">Download</button>
              <button class="button-dark" type="button">Read</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/all.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</html>
