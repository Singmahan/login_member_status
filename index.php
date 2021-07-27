  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>

  <body>

      <div class="container mt-5">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                          <a class="navbar-brand" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Menu</a>
                                  </li>

                              </ul>
                              <ul class="navbar-nav  ml-auto">
                                  <!-- check login  -->
                                  <?php if (isset($_SESSION['userid'])) { ?>
                                      <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Hello, <strong><?php echo $_SESSION['user']; ?></strong>
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                              <li><a class="dropdown-item" href="#">menu1</a></li>
                                              <li><a class="dropdown-item" href="#">menu2</a></li>
                                              <li>
                                                  <hr class="dropdown-divider">
                                              </li>
                                              <li><a class="dropdown-item" href="logout.php">logout</a></li>
                                          </ul>
                                      </li>
                                  <?php } else { ?>
                                      <li class="nav-item">
                                          <a href="register.php" class="btn btn-warning btn-sm">Register</a>
                                          <a href="login.php" class="btn btn-primary btn-sm">login</a>
                                      </li>
                                  <?php } ?>
                              </ul>
                          </div>
                      </div>
                  </nav>
                  <section class="py-5 text-center container">
                      <div class="row py-lg-5">
                          <div class="col-lg-6 col-md-8 mx-auto">
                              <h1 class="fw-light">ยินดีต้อนรับสู่ระบบตัวอย่าง</h1>
                              <p class="lead text-muted">สวัสดี</p>
                          </div>
                      </div>
                  </section>
              </div>
          </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>

  </html>