<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1"
    />
    <title>Document</title>
    <link rel="stylesheet" href="dash.css" />
  </head>
  <body>
    <!-- SIDEBAR -->
    <input type="checkbox" id="nav-toggle" />
    <div class="sidebar">
      <div class="sidebar-brand">
        <h2><span class="fab fa-accusoft"></span><span>Profile</span></h2>
      </div>

      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="" class="active"
              ><span class="fas fa-igloo"></span><span>Dashboard</span></a
            >
          </li>
          <li>
            <a href=""
              ><span class="fas fa-users"></span><span>Read Later</span></a
            >
          </li>
          <li>
            <a href=""
              ><span class="fas fa-laugh-beam"></span
              ><span>Liked Books</span></a
            >
          </li>
          <li>
            <a href=""
              ><span class="fas fa-clipboard-check"></span
              ><span>History of Read Books</span></a
            >
          </li>
          <li>
            <a href=""
              ><span class="fas fa-sign-out-alt"></span><span>Logout</span></a
            >
          </li>
        </ul>
      </div>
    </div>
    <!-- SIDEBAR ENDS -->

    <!-- Main Content -->
    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="fas fa-bars"></span>
          </label>
          Dashboard
        </h2>

        <div class="search-wrapper">
          <span class="fas fa-search"></span>
          <input type="search" placeholder="search here" />
        </div>

        <div class="user-wrapper">
          <img src="img/login.jpg" width="30px" height="30px" alt="" />
          <div>
            <h4>John Doe</h4>
            <small>User</small>
          </div>
        </div>
      </header>

      <main>
        <div class="cards">
          <div class="card-single">
            <div>
              <h1>54</h1>
              <span>Downloaded Books</span>
            </div>
            <div>
              <span class="fas fa-download"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>79</h1>
              <span> Bought Books</span>
            </div>
            <div>
              <span class="fas fa-shopping-bag"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>124</h1>
              <span>Read Later</span>
            </div>
            <div>
              <span class="fas fa-clipboard"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>$1.3k</h1>
              <span style="color: white">Total Transactions</span>
            </div>
            <div>
              <span class="fab fa-google-wallet" style="color: white"></span>
            </div>
          </div>
        </div>

        <div class="recent-grid">
          <div class="projects">
            <div class="card">
              <div class="card-header">
                <h3>Recent Insights</h3>

                <button>
                  See all <span class="fas fa-arrow-right"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>Your Genres</td>
                        <td>Best Writers</td>
                        <td>Recommendations</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Actiom</td>
                        <td>Romance</td>
                        <td>Comedy</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>Williams Shakespaere</td>
                        <td>Sarah Minx</td>
                      </tr>
                      <tr>
                        <td>Mike Jake</td>
                        <td>Silver Throne</td>
                        <td>Horror</td>
                      </tr>
                      <tr>
                        <td>Actiom</td>
                        <td>Romance</td>
                        <td>Comedy</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>Williams Shakespaere</td>
                        <td>Sarah Minx</td>
                      </tr>
                      <tr>
                        <td>Mike Jake</td>
                        <td>Silver Throne</td>
                        <td>Horror</td>
                      </tr>
                      <tr>
                        <td>Actiom</td>
                        <td>Romance</td>
                        <td>Comedy</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>Williams Shakespaere</td>
                        <td>Sarah Minx</td>
                      </tr>
                      <tr>
                        <td>Mike Jake</td>
                        <td>Silver Throne</td>
                        <td>Horror</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="customers">
            <div class="card">
              <div class="card-header">
                <h3>New Writers</h3>

                <button>
                  See all <span class="fas fa-arrow-right"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/istockphoto-1413016885-170667a.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img
                      src="img/business-team-working-office-worker-concept-64705965.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>

                <div class="customer">
                  <div class="info">
                    <img
                      src="img/pexels-sora-shimazaki-5668777.jpg"
                      width="40px"
                      height="40px"
                      alt=""
                    />
                    <div>
                      <h4>Lewis S. Cunningham</h4>
                    </div>
                    <div class="contact">
                      <span class="fas fa-user-circle"></span
                      ><span class="fas fa-comment"></span
                      ><span class="fas fa-phone"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!-- Main Content Ends -->
  </body>
  <script src="js/all.js"></script>
</html>
