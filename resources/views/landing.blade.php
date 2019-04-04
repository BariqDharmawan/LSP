<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Point Of Sale | SMK Negeri 10 Jakarta</title>
  </head>
  <body>
    <header style='background-image: url("{{ asset("img/header.jpg")}} ")'>
      <div class="overlay">
        <nav>
          <a href="#">Point <i style="color: #dddddd;">Of</i> Sale</a>
          <a href="{{ route('login') }}">Login</a>
        </nav>
        <h1>Menyelesaikan Permasalahan <br> Tanpa Solusi</h1>
      </div>
      <a href="#content" id="btnToDown"><i class="fas fa-caret-down"></i></a>
    </header>
    <main id="content">
      <section id="about">
        <div class="container">
          <h1>Apa Itu POS?</h1>
          <p style="text-align: center;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </section>
      <section id="keunggulan">
        <div class="container">
          <h1>Apa Manfaat POS?</h1>
          <div class="row">
            <div class="">
              <i class="fas fa-shopping-basket" style="color: #0b7a48;"></i>
              <h2 style="text-align: center;margin-bottom: 30px;">Simpel</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit</p>
            </div>
            <div class="">
              <i class="fas fa-cash-register" style="color: #5b0950;"></i>
              <h2 style="text-align: center;margin-bottom: 30px;">Cepat</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit</p>
            </div>
            <div class="">
              <i class="fas fa-user-shield" style="color: #d67113"></i>
              <h2 style="text-align: center;margin-bottom: 30px;">Aman</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit</p>
            </div>
          </div>
        </div>
      </section>
      <section id="testimoni">
        <img src="{{ asset('img/people.jpeg') }}" height="90" alt="">
        <blockquote>
          <q>With POS, we sweat the small stuff of anything. <br>
          You will be love anything inside us. Trust me it works!</q>
          <div>
            <span>Bariq Dharmawan</span>
            <span>Creator Of POS</span>
          </div>
        </blockquote>
      </section>
    </main>
    <footer>
      <div class="container">
        <small>&copy; {{ date('Y') }} | Ini Hanya Iseng Semata</small>
        <small>This Website Using <a href="laravel.com" target="_blank">Laravel Framework</a> </small>
        <ul>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
