<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Register</h1>
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="asset/img/img-login.svg" class="w-75" alt="">
            </div>
            <div class="col-md-6">
                <form class="text-center" onsubmit="return kirim()">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" class="form-control" aria-describedby="usernameHelp" required>
                        <div id="usernameHelp" class="form-text">Masukkan username dengan benar</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" required>
                        <div id="passwordHelp" class="form-text">Password harus mengandung huruf dan angka</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function kirim() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Validasi password: harus mengandung huruf dan angka
            const passwordPattern = /^(?=.*[a-zA-Z])(?=.*\d).+$/;

            if (username === '' || password === '') {
                alert('Semua field harus diisi.');
                return false;
            }

            if (!passwordPattern.test(password)) {
                alert('Password harus mengandung huruf dan angka.');
                return false;
            }

            // Jika validasi berhasil, arahkan ke index.php
            window.location.href = 'index.php';
            return true;
        }
    </script>
</body>

</html>
