<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Register</title>
</head>

<body>
    <div class="container">

        <div class="form">
            <div class="form-title"><span>Selamat datang di Rent-Cars</span></div>


            <div class="title-2"><span>SILAHKAN REGISTER</span></div>

            <section class="bg-stars">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </section>


            <form action="{{ route('register') }}" method="POST">
               @csrf
                <div class="mid">
                    <div class="input-container">
                        <label for="nama_lengkap"></label>
                        <input class="input-username" name="nama" type="text" placeholder="Masukkan nama lengkap..."
                            autofocus required>
                        <span> </span>
                    </div>
                    <div class="input-container">
                        <label for="no_telp"></label>
                        <input class="input-notelp" name="no_telp" type="text" placeholder="Masukkan nomor telepon..."
                            autofocus required>
                        <span> </span>
                    </div>
                    <div class="input-container">
                        <label for="username"></label>
                        <input class="input-username" name="username" type="username" placeholder="Masukkan username..."
                            autofocus required>
                        <span> </span>
                    </div>
                    <div class="input-container">
                        <label for="password"></label>
                        <input class="input-pwd" name="password" type="password" placeholder="Masukkan password"
                            required>
                    </div>
                    <div class="input-container">
                        <label for="password"></label>
                        <input class="input-pwd" name="confirm_password" type="password" placeholder="Konfirmasi password"
                            required>
                    </div>
                    <button type="submit" class="submit">
                        <span class="sign-text">Register</span>
                    </button>
                </div>

                <p class="signup-link">
                    Sudah memiliki akun? Silahkan <a href="">Login</a> disini.
                    <br><br>
                    <a href="{{ url('/') }}" class="up">Kembali ke halaman utama!</a>
                </p>

            </form>

        </div>

    </div>

</body>

</html>
