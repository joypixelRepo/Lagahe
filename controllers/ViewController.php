<?php
class ViewController extends ApplicationController {

  private $viewUrl;
  private $view;

  public function __construct() {
    $this->view = new View();

    $this->viewUrl = $_SERVER['DOCUMENT_ROOT'].'/'.$_SERVER['RAIZ'].'/views';

  }

  public function index() {
    parent::render($this->viewUrl.'/head.php', []);
    parent::render($this->viewUrl.'/header.php', []);
    parent::render($this->viewUrl.'/main.php', [
      'films' => $this->view->loadFilms()
    ]);
    parent::render($this->viewUrl.'/footer.php', []);
    die;
  }

  public function name() {
    parent::render($this->viewUrl.'/head.php', []);
    parent::render($this->viewUrl.'/header.php', []);
    parent::render($this->viewUrl.'/main.php', [
      'films' => $this->view->loadFilmsPerName()
    ]);
    parent::render($this->viewUrl.'/footer.php', []);
    die;
  }

  public function __destruct() {}

}
