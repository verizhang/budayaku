<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>budayaKu.</title>
    <link rel="icon" href="{{asset("/img/black-white.png")}}" type="image/x-icon" />
      @vite(['resources/css/user.css'])
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <div class="logo">
          <img src="{{asset("/img/logo-white.png")}}" alt="logo" />
        </div>
        <div class="menu">
          <ul>
              <li><a href="{{route('budayaku.homepage')}}">Beranda</a></li>
            <li><a href="{{route('budayaku.articles')}}">Artikel</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <hr/>
    <div class="wrapper">
      <section id="beranda" class="sectionMenu">
        <div class="deskripsi">
          <p class="title">Belajar Budaya Indonesia Dengan Mudah</p>
          <p style="color: white; line-height: 2;">
            Website untuk belajar budaya dan seni Indonesia yang lengkap <br/> dengan data yang valid. Ayo kita belajar dan lestarikan budaya dan seni Indonesia.
          </p>
          <a href="{{route("budayaku.articles")}}"><button type="button" class="btn-mulai">Mulai</button></a>
        </div>
        <img src="{{asset("/img/illustration.png")}}" alt="home-image" class="homeImg" />
      </section>
    </div>
  </body>
</html>
