<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      <!-- Page content wrapper-->
      <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
          <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">
              Toggle Menu
            </button>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#!">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    id="navbarDropdown"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Dropdown</a
                  >
                  <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item" href="#!">Action</a>
                    <a class="dropdown-item" href="#!">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Something else here</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Page content-->
        <?php
    function otentikasi($uname, $pass)
    {
        // user admin password 12345
        if ($uname == "admin" && $pass == "123456") {
            return true;
        } else {
            return false;
        }
    }

    // Proses formulir jika data dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // Panggil fungsi otentikasi
        if (otentikasi($username, $password)) {
            $pesan = "Login berhasil. Selamat datang, $username!";
        } else {
            $pesan = "Login gagal. Silakan coba lagi.";
        }
    }
    ?>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>