<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="form">
            <div class="form-title"><span>Selamat datang di Rent-Cars</span></div>


            <div class="title-2"><span>SILAHKAN LOGIN</span></div>

            <section class="bg-stars">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </section>


            <form action="{{ route('Login') }}" method="POST">
                @csrf
                
                <div class="mid">
                    <div class="input-container">
                        <label for="username"></label>
                        <input class="input-username" name="username" type="username" placeholder="Masukkan username"
                            autofocus required>
                        <span> </span>
                    </div>
                    <div class="input-container">
                        <label for="password"></label>
                        <input class="input-pwd" name="password" type="password" placeholder="Masukkan password"
                            required>
                    </div>
                    <button type="submit" class="submit">
                        <span class="sign-text">Login</span>
                    </button>
                </div>

                <p class="signup-link">
                    <!-- No account? -->
                    <a href="{{ url('/') }}" class="up">Kembali ke halaman utama!</a>
                </p>

            </form>

        </div>

    </div>

</body>

</html>
