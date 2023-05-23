<header class="bg-header">
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-expand-lg menu-figma">
        <div class="container">

          <a class="navbar-brand logo" href="/Lagahe">
            <img src="/Lagahe/assets/images/Logo.png">
          </a>

          <a href="#" class="link active">TOP<br>PELÍCULAS</a>
          <a href="#" class="link">PRÓXIMOS<br>ESTRENOS</a>

          <form id="search-films" class="d-flex seeker" action="/Lagahe/view/name" method="POST">
            <input type="hidden" name="start-date" id="start-date" value="">
            <input type="hidden" name="end-date" id="end-date" value="">
            <input class="form-control" type="search" placeholder="Buscar película por nombre" name="film-name">
            <div class="seeker-date">
              <span class="seeker-title">Fecha</span>
              <span class="seeker-choose"><a href="#" data-bs-toggle="modal" data-bs-target="#calendarModal">Elegir fecha <img src="/Lagahe/assets/images/Arrow_Down.svg"></a></span>
            </div>
            <div class="seeker-language">
              <span class="seeker-title">Idioma</span>
              <span class="seeker-choose"><a href="#">Elegir idioma <img src="/Lagahe/assets/images/Arrow_Down.svg"></a></span>
            </div>
            <a id="submit-button" class="seeker-button" href="#" type="submit"><img src="/Lagahe/assets/images/Icon_Search-Black.png"></a>
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