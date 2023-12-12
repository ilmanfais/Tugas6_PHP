<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <button class="btn btn-primary mt-3 mb-3  text-white border-3 border-info"  href="#">Toogle Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mx-3">
            <h2 class="mb-4">Form Login</h2>
            <form action="" method="post">
                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username:</label>
                    <div class="col-sm-10">
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
    
                    <label for="password" class="col-sm-2 col-form-label mt-3">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" name="password" class="form-control mt-3" required>
                    </div>
    
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Login</button>
                        <?php
                        if (isset($pesan)) {
                            echo "<p>$pesan</p>";
                        }
                        ?>
                    </div>
    
    
                </div>
            </form>
        </div>
</body>

</html>