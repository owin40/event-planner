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
          <li><a class="navlink" href="/login">Login</a></li>
          <li><a class="contact-button" href="https://api.whatsapp.com/send?phone=6285900077107">Contact</a></li>
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
        <div class="icar">
          <img src="{{ asset('images/event1.jpg') }}" alt="">
          <h3>Menari</h3>
        </div>
        <div class="icar">
          <img src="{{ asset('images/event2.jpg') }}" alt="">
          <h3>Menggambar</h3>
        </div>
        <div class="icar">
          <img src="{{ asset('images/event3.jpg') }}" alt="">
          <h3>Menyanyi</h3>
        </div>
        <div class="icar">
          <img src="{{ asset('images/event4.jpg') }}" alt="">
          <h3>Model</h3>
        </div>
      </div>



    </div>
  </section>

  <section id="about" class="sec3">
    <div class="about">
      <div class="about-content">
        <h2>Why Choose Us?</h2>
        <p>Industri event management terus berkembang dan menawarkan
          berbagai peluang. Oleh karena itu Brenna Signature hadir sebagai
          lini bisnis baru dari PT. Tiga Putra Bertaut sebagai holding
          company. Dengan kombinasi pengetahuan, keterampilan dan
          pengetahuan dari setiap individu team, Brenna Signature
          senantiasa memberikan ide-ide kreatif dalam pengelolaan event
          sehingga dapat selalu memberikan yang terbaik untuk
          mewujudkan event yang menarik dan melebihi ekspektasi klien.
          Kami akan menyusun konsep kegiatan, membuat timeline agar
          waktu penyelenggaraan kegiatan berjalan dengan baik, selain itu
          kami memberikan perspektif biaya yang fleksibel dimana dapat
          menyesuaikan dengan budjet yang ada, namun dengan tetap
          menjaga kualitas kegiatan.</p>
        <p>A. N. Fatharany</p>
        <h3>CEO Brenna Signature</h3>
        <div class="about-button"><a class="contact-button" href="https://api.whatsapp.com/send?phone=6287821542466">Contact</a></div>
      </div>
      <div class="about-image">
        <img src="{{ asset('images/brennaLogo.png') }}" alt="">
      </div>
    </div>
  </section>

  <section id="team" class="sec4">
    <div class="team">
      <h1>Team</h1>
      <div class="team-content">

        <h2>Board of Director</h2>

        <div class="team-atas">
          <div class="icar"><img src="{{ asset('images/1b.jpg') }}" alt="">
            <h4>Chief Executive Officer</h4>
            <p>A. N. Fatharany</p>
          </div>
          <div class="icar"><img src="{{ asset('images/2b.jpg') }}" alt="">
            <h4>Chief Marketing Officer</h4>
            <p>Mimi Dewie</p>
          </div>
          <div class="icar"><img src="{{ asset('images/3b.jpg') }}" alt="">
            <h4>Chief Marketing Officer</h4>
            <p>Yanna Erlan</p>
          </div>
          <div class="icar"><img src="{{ asset('images/4b.jpg') }}" alt="">
            <h4>Chief Financial Officer</h4>
            <p>Iyan Suhendar (Abi)</p>
          </div>
        </div>

        <h2>Brenna Signature Founder Team</h2>

        <div class="team-bawah">
          <div class="icar"><img src="{{ asset('images/5b.jpg') }}" alt="">
            <h4>Project Manager</h4>
            <p>Richi</p>
          </div>
          <div class="icar"><img src="{{ asset('images/6b.jpg') }}" alt="">
            <h4>Marketing Manager</h4>
            <p>Grace</p>
          </div>
          <div class="icar"><img src="{{ asset('images/7b.jpg') }}" alt="">
            <h4>Ass. Marketing Manager</h4>
            <p>Riza</p>
          </div>
          <div class="icar"><img src="{{ asset('images/8b.jpg') }}" alt="">
            <h4>Event Producer</h4>
            <p>Bagus</p>
          </div>
          <div class="icar"><img src="{{ asset('images/9b.jpg') }}" alt="">
            <h4>Event Promotion</h4>
            <p>Mia</p>
          </div>
          <div class="icar"><img src="{{ asset('images/10b.jpg') }}" alt="">
            <h4>Event Promotion</h4>
            <p>Cece Ekalita</p>
          </div>
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