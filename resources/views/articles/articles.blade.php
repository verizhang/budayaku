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
    <hr />
    <section id="artikel" class="sectionArtikel">
        @foreach($ars as $item)
            <div class="konten-artikel">
                <img src="{{URL("storage/app/public/".$item->image)}}" alt="photo-artikel1" class="img-artikel"/>
                <div>
                    <h1 class="title-konten">
                        {{$item->title}}
                    </h1>
                    <p class="deskripsi-konten">
                        {{$item->body}}
                    </p>
                    <a href="{{route('budayaku.article-detail', $item->id)}}"><button class="btn-read">Baca Selengkapnya >></button></a>
                </div>
            </div>
        @endforeach

{{--      <div class="konten-artikel-2">--}}
{{--        <img src="resources/artikel2.png" alt="photo-artikel2" class="img-artikel" />--}}
{{--        <div>--}}
{{--          <h1 class="title-konten">Gudeg, Makanan Khas Yogyakarta</h1>--}}
{{--          <p class="deskripsi-konten">--}}
{{--            Kalau berkunjung ke Jogja, rasanya kurang lengkap jika belum makan--}}
{{--            gudeg atau dijadikan sebagai oleh-oleh untuk orang tersayang. Gudeg--}}
{{--            Jogja terkenal dengan rasanya yang manis dan terbuat dari nangka--}}
{{--            muda yang diolah dengan santan.--}}
{{--          </p>--}}
{{--          <button class="btn-read">Baca Selengkapnya >></button>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="konten-artikel-2">--}}
{{--        <img src="resources/artikel3.png" alt="photo-artikel3" class="img-artikel" />--}}
{{--        <div>--}}
{{--          <h1 class="title-konten">--}}
{{--            Rumah Adat Gadang, Rumah Khas Sumatera Barat--}}
{{--          </h1>--}}
{{--          <p class="deskripsi-konten">--}}
{{--            Berasal dari Sumatera Barat,memiliki beberapa atap yang runcing dan--}}
{{--            menjulang ke atas.Terbuat dari ijuk dan bentuknya mirip seperti--}}
{{--            tanduk kerbau, yang melambangkan kemenangan suku Minang dalam--}}
{{--            perlombaan adu kerbau di Jawa.--}}
{{--          </p>--}}
{{--          <button class="btn-read">Baca Selengkapnya >></button>--}}
{{--        </div>--}}
{{--      </div>--}}
    </section>
    <hr style="margin-bottom: 74px" />
    <footer>
      <div class="konten-footer">
        <div class="logo">
          <img src="{{asset("img/logo-white.png")}}" alt="logo" />
          <p style="font-size: 15px">
            Website edukasi untuk belajar budaya Indonesia.
          </p>
        </div>
        <div style="padding-left: 432px; font-size: 15px">
          <p style="font-weight: bold">Lokasi</p>
          <p>
            Jalan Petojo Selatan 1,<br />
            Gambir, Jakarta Pusat.
          </p>
          <p>022-823-9447</p>
          <p>budayaku@gmail.com</p>
        </div>
        <div style="padding-left: 82px; font-size: 15px">
          <p style="font-weight: bold">Tentang</p>
          <p>Perusahaan</p>
          <p>Kebijakan Privasi</p>
          <p>Kebijakan Cookie</p>
        </div>
        <div style="padding-left: 82px; font-size: 15px">
          <p>Ikuti kami</p>
          <div style="display: flex">
            <img src="{{ asset("img/instagram.png")}}" alt="ig-logo" style="width: 35px; height: 35px"/>
            <img src="{{ asset("img/facebook.png")}}" alt="fb-logo" class="icon-sosmed" />
            <img src="{{ asset("img/youtube.png")}}" alt="yt-logo" class="icon-sosmed" />
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
