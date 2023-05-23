<!DOCTYPE html>
<html>
<head>
  <title>Lagahe</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Figma Styles -->
  <link rel="stylesheet" type="text/css" href="/Lagahe/assets/css/styles.css">

</head>
<body>
  <header class="bg-header">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg menu-figma">
          <div class="container">

            <a class="navbar-brand logo" href="#">
              <img src="/Lagahe/assets/images/Logo.png">
            </a>

            <a href="#" class="link active">TOP<br>PELÍCULAS</a>
            <a href="#" class="link">PRÓXIMOS<br>ESTRENOS</a>

            <form class="d-flex seeker" action="/send" method="POST">
              <input class="form-control" type="search" placeholder="Buscar película por nombre" name="film-name">
              <div class="seeker-date">
                <span class="seeker-title">Fecha</span>
                <span class="seeker-choose"><a href="#">Elegir fecha <img src="/Lagahe/assets/images/Arrow_Down.svg"></a></span>
              </div>
              <div class="seeker-language">
                <span class="seeker-title">Idioma</span>
                <span class="seeker-choose"><a href="#">Elegir idioma <img src="/Lagahe/assets/images/Arrow_Down.svg"></a></span>
              </div>
              <a class="seeker-button" href="#" type="submit"><img src="/Lagahe/assets/images/Icon_Search-Black.png"></a>
            </form>

            <a href="#" class="icon-cart-mobile d-none">
              <img src="/Lagahe/assets/images/Icon_Search-White.png">
            </a>

            <a href="#" class="icon-cart">
              <img src="/Lagahe/assets/images/Icon_Shopping_Cart_white.png">
            </a>

            <a href="#" class="icon-user">
              <img src="/Lagahe/assets/images/Usser.png">
            </a>

          </div>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-8 col-lg-6">
          <div class="header-text">
            <h1>¡Listas las<br>palomitas!</h1>
            <h2>Encuentra la mejor selección de películas, estrenos y taquilleras a nivel mundial. Dale play</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="films">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3>Top películas</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/xV7Kfz4TW3hN6q4xtZgu5vduBHA.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/3h1JZGDhZ8nzxdgvkxha0qBqi05.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/DztBnZaqmla2sGUW9s8AyOmskT.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/3Ne0EpyuhZkIbfSyDzzMaNkb7Z7.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/r8pUcom5Mw8igtBpj3AHSAUvH0R.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/oGMomeS7bE43eN8SGJUaKvQnmud.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/3Ne0EpyuhZkIbfSyDzzMaNkb7Z7.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/r8pUcom5Mw8igtBpj3AHSAUvH0R.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="https://image.tmdb.org/t/p/w220_and_h330_face/oGMomeS7bE43eN8SGJUaKvQnmud.jpg">
              </a>
              <a href="#">
                <span class="film-title">Titulo película</span>
              </a>
              <span class="film-date">12/09/1976</span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png">8.6 <span class="votes">(2334 votos)</span>
              </span>
              <span class="film-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</span>
              <span class="film-languages">Idioma | <b>ES</b></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-12">
          <div class="footer-language center-align-mobile">
            <a href="#"><img src="/Lagahe/assets/images/Icon_Globe.png" class="globe"> Español <img src="/Lagahe/assets/images/Arrow_Down.svg"></a>
          </div>
        </div>
        <div class="col-lg-7 col-12">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-4">
                <span class="footer-title">NAVEGACIÓN</span>
                <ul class="footer-links">
                  <li><a href="#">Top películas</a></li>
                  <li><a href="#">Próximos estrenos</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-4">
                <span class="footer-title">LEGAL</span>
                <ul class="footer-links">
                  <li><a href="#">Aviso Legal</a></li>
                  <li><a href="#">Política de Privacidad</a></li>
                  <li><a href="#">Política de Cookies</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-4">
                <span class="footer-title">NOSOTROS</span>
                <ul class="footer-links">
                  <li><a href="#">info@dominio.com</a></li>
                  <li><a href="#">641 02 22 31</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12">
          <div class="col-lg-4 col-12">
            <div class="center-align-mobile">
              <span class="footer-title">SÍGUENOS</span>
              <div class="social-icons">
                <a href="#"><img src="/Lagahe/assets/images/Icon_Facebook.png"></a>
                <a href="#"><img src="/Lagahe/assets/images/Icon_Linkedin.png"></a>
                <a href="#"><img src="/Lagahe/assets/images/Icon_Twitter.png"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center leyend-footer">&copy; <?= date('Y') ?> Prueba desarrollador Lagahe</div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Figma javascripts -->

</body>
</html>