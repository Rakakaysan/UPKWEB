<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>SIMBA Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        :root {
            --primary-color: #dba89f;
            --secondary-color: #e9cfc9;
            --background-color: #f4f7f6;
            --form-background: #ffffff;
            --text-color-dark: #212121;
            --text-color-light: #757575;
            --text-color-inverted: #ffffff;
            --border-color: #e0e0e0;
            --error-color: #d32f2f;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color-dark);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100vw;
        }

        .left {
            flex: 1.2;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--text-color-inverted);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .left::before {
            content: '';
            position: absolute;
            bottom: -150px;
            left: -150px;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 40px;
            fill: var(--text-color-inverted);
        }

        .left h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .left p.desc {
            font-size: 16px;
            font-weight: 400;
            max-width: 450px;
            line-height: 1.6;
            opacity: 0.9;
        }

        .right {
            flex: 1;
            background: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .form-container {
            width: 100%;
            max-width: 380px;
            background-color: var(--form-background);
            padding: 50px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px var(--shadow-color);
        }

        .form-container h2 {
            font-weight: 700;
            font-size: 28px;
            margin-bottom: 10px;
            color: var(--text-color-dark);
            text-align: center;
        }

        .form-container p {
            font-size: 14px;
            color: var(--text-color-light);
            margin-bottom: 35px;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-field {
            width: 100%;
            border: 1px solid var(--border-color);
            background-color: transparent;
            border-radius: 8px;
            padding: 14px 20px;
            font-size: 16px;
            color: var(--text-color-dark);
            outline: none;
            transition: border-color 0.2s ease;
        }

        .input-field::placeholder {
            color: transparent;
        }

        .input-label {
            position: absolute;
            left: 20px;
            top: 15px;
            color: var(--text-color-light);
            pointer-events: none;
            transition: all 0.2s ease;
            background-color: var(--form-background);
            padding: 0 4px;
        }

        .input-field:focus {
            border-color: var(--primary-color);
        }

        .input-field:focus+.input-label,
        .input-field:not(:placeholder-shown)+.input-label {
            top: -10px;
            left: 15px;
            font-size: 12px;
            color: var(--primary-color);
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-color-light);
        }

        .toggle-password:hover {
            color: var(--primary-color);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 13px;
        }

        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            background: var(--primary-color);
            color: var(--text-color-inverted);
            border: none;
            border-radius: 8px;
            padding: 15px 0;
            font-weight: 500;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
            margin-bottom: 20px;
        }

        .login-btn:hover {
            background: var(--secondary-color);
        }

        .login-btn:active {
            transform: scale(0.98);
        }

        .google-btn {
            width: 100%;
            background: var(--form-background);
            color: var(--text-color-light);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 14px 20px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.2s ease, border-color 0.2s ease;
        }

        .google-btn:hover {
            background-color: #fafafa;
            border-color: #c0c0c0;
        }

        .google-btn svg {
            width: 20px;
            height: 20px;
            margin-right: 12px;
        }

        .form-footer {
            font-size: 14px;
            text-align: center;
            margin-top: 30px;
            color: var(--text-color-light);
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }

            .left {
                flex: none;
                width: 100%;
                height: auto;
                padding: 40px 30px;
                text-align: center;
                align-items: center;
            }

            .left h1 {
                font-size: 36px;
            }

            .right {
                padding: 30px 20px;
            }

            .form-container {
                padding: 40px 30px;
                box-shadow: none;
                border-radius: 0;
                background-color: var(--background-color);
            }
        }
    </style>
</head>

<body>
    <div class="container" role="main">
        <section class="left" aria-labelledby="welcome-heading">
            <img src="{{ asset('img/logo.png') }}" class="logo" style="width: 220px; height: auto;" alt="SIMBA Logo">

            <h1 id="welcome-heading">Selamat Datang di SIMBA</h1>
            <p class="desc">
                Ayo Buka 'Sistem Informasi Materi Candi Berbasis Aplikasi'. Jelajahi kekayaan sejarah dan informasi
                tentang candi-candi kuno.
            </p>
        </section>

        <section class="right" aria-label="Login form">
            <div class="form-container">
                <form action="{{ route('login.action') }}" method="POST">
                    @csrf
                    @method('POST')
                    <h2>Masuk</h2>
                    <p>Masukan username dan password anda untuk mengakses SIMBA.</p>

                    <div class="input-group">
                        <input id="username" class="input-field" name="username" placeholder="username" required
                            type="text" />
                        <label for="username" class="input-label">Username</label>
                    </div>

                    <div class="input-group">
                        <input id="password" class="input-field" name="password" placeholder="password" required
                            type="password" />
                        <label for="password" class="input-label">Password</label>
                    </div>
                    <button class="login-btn" type="submit">Masuk</button>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
