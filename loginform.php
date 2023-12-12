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

    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-gray-200">
            <div class="container-fluid">
                <button class="navbar-brand bg-primary border-info text-white" href="#">Toggle Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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