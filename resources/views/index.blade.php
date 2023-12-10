<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brenna Signature</title>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>

  <section class="sec1">
    <div class="navbar">
      <div class="logo">
        <img src="{{ asset('images/brennaLogo.png') }}" alt="" />
        <h1>Brenna Signature</h1>
      </div>
      <div class="navbar-menu" id="navbarMenu">
        <ul class="menu">
          <li><a class="navlink" href="#event">Event</a></li>
          <li><a class="navlink" href="#about">About</a></li>
          <li><a class="navlink" href="#team">Team</a></li>
          <li><a class="contact-button" href="#contact">Contact</a></li>
        </ul>
      </div>
      <!-- <div class="menu-bar" id="menuIcon">
        <img src="{{ asset('images/menu.svg') }}" alt="">
      </div> -->
    </div>

    <div class="hero">
      <div class="header">
        <span class="evnt">Event planner</span>
        <span class="sign">Brenna Signature</span>
      </div>

    </div>
  </section>

  <section id="event" class="sec2">
    <div class="caro">
      <h2>Events</h2>
      <div class="car1">
        <img src="{{ asset('images/placeholder.jpg') }}" alt="">
        <img src="{{ asset('images/placeholder.jpg') }}" alt="">
        <img src="{{ asset('images/placeholder.jpg') }}" alt="">
        <img src="{{ asset('images/placeholder.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section id="about" class="sec3">
    <div class="about">
      <div class="about-content">
        <h2>Why Choose Us?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam expedita itaque repudiandae hic labore quos tempore assumenda eveniet? Odio nihil rem ea laudantium fuga vitae. Assumenda enim optio repudiandae dolor!</p>
        <div class="about-button"><a class="contact-button" href="#contact">Contact</a></div>
      </div>
      <div class="about-image">
        <img src="{{ asset('images/placeholder.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section id="team" class="sec4">
    <div class="team">
      <h2>Team</h2>
      <div class="team-content">

        <h3>Board of Director</h3>

        <div class="team-atas">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
        </div>

        <h3>Brenna Signature Founder Team</h3>

        <div class="team-bawah">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
          <img src="{{ asset('images/placeholder.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="footer">
      <p>&copy; Brenna Signature. All rights reserved.</p>
    </div>
  </footer>

  <button id="scrollToTopBtn" onclick="scrollToTop()">Scroll to Top</button>
  <script src="{{ asset('script.js') }}"></script>

</body>

</html>