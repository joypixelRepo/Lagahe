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

  <!-- Modal -->
  <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header align-center">
          <h5 class="modal-title" id="calendarioModalLabel">Selecciona las fechas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body align-center">
          <div class="container">
            <div class="row">
              <div class="col-6">
                <span>Fecha de inicio</span>
                <input type="date" id="calendar-start-date">
              </div>
              <div class="col-6">
                <span>Fecha de fin</span>
                <input type="date" id="calendar-end-date">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- jQuery 3 -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <!-- Figma javascripts -->
  <script type="text/javascript" src="/Lagahe/assets/js/scripts.js"></script>

</body>
</html>