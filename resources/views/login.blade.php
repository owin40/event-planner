

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Brenna</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

  <section class="form">

    <div class="login-form">
      <div>
      <img src="{{ asset('images/brennaLogo.png') }}" alt="logo">
    </div>
      <form action="{{ route('login.post') }}" method="POST">
        <input type="email" id="email" name="email" placeholder="email" required>

        <input type="password" id="password" name="password" placeholder="password" required>

        <button type="submit">Login</button>
        <!-- <a href="/" class="button">Login</a> -->
      </form>
      <p >Don't have an account? <a href="register">Register</a></p>
    </div>

  </section>
</body>

</html>