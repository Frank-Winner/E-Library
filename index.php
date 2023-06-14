<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-Library</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand"><img src="img/Screenshot 2023-02-03 232003.png" alt="" /> E-LIBRARY
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynavmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="mynavmenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">HOME</a>
          </li>

          <li class="nav-item dropdown">
            <a href="categories.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CATEGORIES</a>

            <ul class="dropdown-menu bg-dark dropdown-menu-dark">
              <li>
                <a href="categories.php#action" class="dropdown-item">Action</a>
              </li>
              <li>
                <a href="categories.php#action" class="dropdown-item">Romance</a>
              </li>
              <li>
                <a href="categories.php#horror" class="dropdown-item">Horror</a>
              </li>
              <li>
                <a href="categories.php#psychology" class="dropdown-item">Psychology</a>
              </li>
              <li>
                <a href="categories.php#comedy" class="dropdown-item">Comedy</a>
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
            <a href="preload.php" class="nav-link"><span class="fas fa-user"></span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
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
  <section class="pt-5 plg-0 pt-lg-5 text-sm-start">
    <div class="container">
      <div class="row mt-4 forsearch">
        <div class="col-md">
          <h2 class="search">Search for a book you want to read</h2>
          <input type="text" placeholder="Keyword" class="keyword" />
          <input class="search" type="search" placeholder="Search" />
          <span class="fas fa-search"></span>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md first-col">
          <h1>There is no friend as loyal as a book.</h1>
          <h5>Always there for you</h5>
        </div>
        <div class="col-md second-col mt-5">
          <img src="/img/istockphoto-1305294432-612x612.jpg" alt="" class="img-fluid" />
        </div>
      </div>

      <!-- second row -->
      <div class="row">
        <div class="col-md fifth-col">
          <img src="img/elibrary2.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-md sixth-col">
          <p class="h2">
            Follow the reading club
            <a href="http://instagram.com" target="_blank">@E_LIBRARY</a> on
            instagram to see more trends, You can also chat and have
            conversation about your favorite books with other readers in our
            whatsapp groupchat
            <a href="http://whatsapp.com" class="whatsapp" target="_blank">The Book Lovers</a><br /><br />
            We make your passion of reading really enjoyable by connecting you
            with other readers and creating an atmosphere loved by all.
          </p>
        </div>
      </div>

      <!-- third row -->
      <div class="row">
        <div class="col-md fourth-col">
          <form action="">
            <h1>Subscribe for Our Newsletter</h1>
            <div class="input-group news-input">
              <input type="text" class="newsletter" placeholder="Enter Email" />
              <button class="btn mybtn" type="submit" onclick="disable">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="carouselh2">BROWSE THROUGH CATEGORIES</h2>
      <div class="container forcarousel">
        <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="1"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="2"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="3"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="4"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="5"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="6"></button><button data-bs-target="#mycarousel" data-bs-slide-to="7"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="8"></button>
            <button data-bs-target="#mycarousel" data-bs-slide-to="9"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container the-container">
                <h1><a href="categories.php"> Action</a></h1>

                <img src="img/Screenshot 2023-02-03 102247 (2).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102345 (8).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102345 (12).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Romance</a></h1>

                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102345 (10).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">The 90's</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (3).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Religion</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Insipirational</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Poems</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Phylosophical</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Educational</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Kids</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
            <div class="carousel-item">
              <div class="container the-container">
                <h1><a href="categories.php">Documentary</a></h1>
                <img src="img/Screenshot 2023-02-03 102323 (6).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102323 (4).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
                <img src="img/Screenshot 2023-02-03 102247 (5).png" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" data-bs-target="#mycarousel" data-bs-slide="prev">
            <span class="fas fa-angle-left"></span>
          </button>
          <button class="carousel-control-next" data-bs-target="#mycarousel" data-bs-slide="next">
            <span class="fas fa-angle-right"></span>
          </button>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container last-container" style="margin-top: 90px">
      <div class="row">
        <div class="col-md">
          <h4>E-library</h4>
          <ul>
            <li><a href="">About</a></li>
            <li><a href="">Vision</a></li>
            <li><a href="">Partner With Us</a></li>
            <li><a href="">Volunteer</a></li>
            <li><a href="">Terms Of Services</a></li>
            <li><a href="">Donate</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Discover</h4>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Books</a></li>
            <li><a href="">Author</a></li>
            <li><a href="">Subject</a></li>
            <li><a href="">Categories</a></li>
            <li><a href="">Back To Top</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Develop</h4>
          <ul>
            <li><a href="">Developer Center</a></li>
            <li><a href="">Bulk Data Dumps</a></li>
            <li><a href="">Writing Bots</a></li>
            <li><a href="">Add a Book</a></li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Help</h4>
          <ul>
            <li><a href="">Help Center</a></li>
            <li><a href="">Report a Problem</a></li>
            <li><a href="">Send Suggestions</a></li>
            <li style="margin-top: 10px">
              <a href=""><span class="fab fa-twitter h1" style="
                      background-color: white;
                      border-radius: 6px;
                      border: 3px black solid;
                    "></span></a>
              <a href="">
                <span class="fab fa-github h1" style="
                      background-color: white;
                      border-radius: 6px;
                      border: 3px black solid;
                    "></span></a>
            </li>
          </ul>
        </div>
        <div class="col-md">
          <h4>Change Language</h4>
          <ul class="locale-options">
            <li>
              <a href="#" lang="cs" data-lang-id="cs" title="Czech">Čeština (cs)</a>
            </li>
            <li>
              <a href="#" lang="de" data-lang-id="de" title="German">Deutsch (de)</a>
            </li>
            <li>
              <a href="#" lang="en" data-lang-id="en" title="English">English (en)</a>
            </li>
            <li>
              <a href="#" lang="es" data-lang-id="es" title="Spanish">Español (es)</a>
            </li>
            <li>
              <a href="#" lang="fr" data-lang-id="fr" title="French">Français (fr)</a>
            </li>
            <li>
              <a href="#" lang="hr" data-lang-id="hr" title="Croatian">Hrvatski (hr)</a>
            </li>
            <li>
              <a href="#" lang="pt" data-lang-id="pt" title="Portuguese">Português (pt)</a>
            </li>
            <li>
              <a href="#" lang="te" data-lang-id="te" title="Telugu">తెలుగు (te)</a>
            </li>
            <li>
              <a href="#" lang="uk" data-lang-id="uk" title="Ukrainian">Українська (uk)</a>
            </li>
            <li>
              <a href="#" lang="zh" data-lang-id="zh" title="Chinese">中文 (zh)</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="js/all.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>