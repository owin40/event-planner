<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brenna</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

  <header class="nav-bar"> <!--skew kuning asli-->
    <div class="tambal"> <!--nambal skew putih-->

      <div class="wrapper"> <!--skew kuning bawah-->
        <h1 class="title">
          <img src="{{ asset('images/brennaLogo.png') }}" alt="logo">
          <a href="/">BRENNA SIGNATURE</a>
        </h1>

        <nav>
          <ul class="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contacts</a></li>
            <li>
              <button class="button" onclick="window.location.href='https://api.whatsapp.com/send?phone=6281312312312&text=Send20%a20%quote'">Contact Whatsapp</button>
            </li>
          </ul>
        </nav>
      </div>

      <div class="big-title">
        <p>EVENT PLANNER</p>
      </div>

    </div>
  </header>

  <section class="events">
    <h1>EVENTS</h1>
  </section>

</body>

</html>