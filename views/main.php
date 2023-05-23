<main>
  <section class="films">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>Top películas</h3>
        </div>
      </div>
      <div class="row">
        <?php
        foreach ($films as $film) { 
          // format date to spanish
          $date = new DateTime($film['release_date']);
          $release_date = $date->format('d/m/Y');
          ?>

          <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
            <div class="film">
              <a href="#" class="img-link-film">
                <img src="<?= $film['backdrop_path'] ?>">
              </a>
              <a href="#">
                <span class="film-title"><?= $film['title'] ?></span>
              </a>
              <span class="film-date"><?= $release_date ?></span>
              <span class="film-rate">
                <img src="/Lagahe/assets/images/Icon_Star.png"><?= $film['vote_average'] ?> <span class="votes">(<?= $film['vote_count'] ?> votos)</span>
              </span>
              <span class="film-description"><?= substr($film['overview'], 0, 120).'... <a href="#" class="read-more">ver más</a>'; ?></span>
              <span class="film-languages">Idioma | <span class="original-lang"><?= $film['original_language'] ?></span></span>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="text-center btn-view-more">
            <a href="#">Mostrar más<br><img src="/Lagahe/assets/images/Arrow_Down.svg"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>