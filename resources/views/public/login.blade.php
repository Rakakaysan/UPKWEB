 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>SIMBA Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }
    html, body {
      margin: 0;
      padding: 0;
      height: 100vh;
      width: 100vw;
      font-family: 'Roboto', sans-serif;
    }
    .container {
      display: flex;
      height: 100vh;
      width: 100vw;
    }
    .left {
      flex: 1;
      background: linear-gradient(to bottom, #dba89f 0%, #e9cfc9 100%);
      padding: 40px;
      color: #5a0f0f;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .left img.logo {
      width: 90px;
      margin-bottom: 40px;
    }
    .left h1 {
      font-size: 64px;
      font-weight: 700;
      margin: 0 0 10px 0;
      line-height: 1.1;
    }
    .left p.desc {
      font-size: 14px;
      font-weight: 600;
      margin: 0;
    }
    .left svg.bg-shape {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.1;
      pointer-events: none;
    }
    .right {
      flex: 1;
      background: #fff;
      padding: 60px 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .right form {
      width: 100%;
      max-width: 320px;
    }
    .right h2 {
      font-weight: 400;
      font-size: 18px;
      margin-bottom: 30px;
      text-align: center;
      color: #000;
    }
    .input-group {
      position: relative;
      margin-bottom: 20px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      background: #b0ada9;
      border: none;
      border-radius: 12px;
      padding: 14px 20px;
      font-size: 14px;
      color: #4a4a4a;
      box-shadow: 4px 4px 6px #8a8885, -4px -4px 6px #d1d0cd;
      outline: none;
    }
    input::placeholder {
      color: #6b6666;
    }
    .password-wrapper {
      position: relative;
    }
    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #3a3a3a;
      font-size: 18px;
    }
    .forgot-password {
      font-size: 11px;
      color: #5a0f0f;
      margin-top: -12px;
      margin-bottom: 10px;
      display: inline-block;
      cursor: pointer;
    }
    .create-reset {
      font-size: 11px;
      color: #d9b7b3;
      margin-bottom: 20px;
      text-align: center;
      cursor: pointer;
    }
    button.login-btn {
      width: 100%;
      background: #000;
      color: #fff;
      border: none;
      border-radius: 20px;
      padding: 10px 0;
      font-weight: 600;
      font-size: 14px;
      cursor: pointer;
      margin-bottom: 20px;
    }
    button.google-btn {
      width: 100%;
      background: #b0ada9;
      border: none;
      border-radius: 12px;
      padding: 14px 20px;
      font-size: 14px;
      color: #4a4a4a;
      box-shadow: 4px 4px 6px #8a8885, -4px -4px 6px #d1d0cd;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }
    button.google-btn img {
      width: 18px;
      height: 18px;
      margin-right: 10px;
    }
    @media (max-width: 700px) {
      .container {
        flex-direction: column;
      }
      .left,
      .right {
        flex: none;
        width: 100%;
        height: auto;
        padding: 30px 20px;
      }
      .left h1 {
        font-size: 36px;
      }
      .right form {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container" role="main">
    <section class="left" aria-label="Welcome message and logo">
    <img src="{{ asset('img/logo.png') }}" class="logo" style="width: 390px; height: auto;" alt="SIMBA Logo">
    
    

      <h1>Hello,<br />Welcome!</h1>
      <p class="desc">
        Hello, welcome to SIMBA, Simba adalah singkatan dari 'Sistem Informasi Materi Candi Berbasis Aplikasi'
      </p>
      <svg class="bg-shape" viewBox="0 0 400 400">
        <path
          d="M100 350 Q150 300 200 350 T300 350 Q350 300 400 350 L400 400 L0 400 Z"
          fill="#5a0f0f"
          fill-opacity="0.1"
        ></path>
      </svg>
    </section>
    <section class="right" aria-label="Login form">
      <form>
        <h2>Login</h2>
        <div class="input-group">
          <input aria-label="Username" placeholder="username" required type="text" />
        </div>
        <div class="input-group password-wrapper">
          <input aria-label="Password" placeholder="password" required type="password" />
          <span class="toggle-password" role="button" tabindex="0">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="feather feather-eye-off"
              fill="none"
              stroke="#3a3a3a"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              height="18"
              width="18"
            >
              <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19c-5 0-9.27-3.11-11-7 
                       1.05-2.1 2.7-3.9 4.7-5.1M1 1l22 22"></path>
            </svg>
          </span>
        </div>
        <a class="forgot-password" href="#">Forget Password</a>
        <div class="create-reset">Create Account or Reset Password</div>
        <button class="login-btn" type="submit">Login</button>
        <button class="google-btn" type="button">
          <img
            src="https://storage.googleapis.com/a1aa/image/5ece221f-afb0-4c90-cfed-f87f1056752a.jpg"
            alt="Google logo"
          />
          Lanjutkan dengan Google
        </button>
      </form>
    </section>
  </div>
</body>
</html>