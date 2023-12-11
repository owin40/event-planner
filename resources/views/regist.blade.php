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
            <form action="{{ route('regist.post') }}" method="POST">
                <input type="name" id="name" name="name" placeholder="name" required>
                <input type="email" id="email" name="email" placeholder="email" required>

                <input type="password" id="password" name="password" placeholder="password" required>
                <input type="password-confirmation" id="password-confirmation" name="password-confirmation" placeholder="confirm password" required>

                <button type="submit">Register</button>
                <!-- <a href="/" class="button">Login</a> -->
            </form>
            <p >Already have an account? <a href="/login">Login</a></p>
        </div>

    </section>
</body>

</html>