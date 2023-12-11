<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brenna</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>

    </style>
</head>

<body>

    <section class="sec1">

        <div class="tambal"> <!--nambal skew putih-->
            <header class="nav-bar"> <!--skew kuning asli-->
                <div class="wrapper"> <!--skew kuning bawah-->
                    <h1 class="title">
                        <img src="{{ asset('images/brennaLogo.png') }}" alt="logo">
                        <a href="/">BRENNA SIGNATURE</a>
                    </h1>

                    <nav>
                        <ul class="nav-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/events">Events</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="/team">Team</a></li>
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

        <div class="events">
            <h1>Team</h1>

            <div class="team-cards">
                <!-- Team Card 1 -->
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team 1">
                    <div class="team-name">Team 1</div>
                </div>

                <!-- Team Card 2 -->
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team 2">
                    <div class="team-name">Team 2</div>
                </div>

                <!-- Team Card 3 -->
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team 3">
                    <div class="team-name">Team 3</div>
                </div>

                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1567596900894-00ff726f8de7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Team 4">
                    <div class="team-name">Team 4</div>
                </div>
            </div>

    </section>

</body>

</html>