<?php
class View extends ApplicationController {

  private $db;

  public function __construct() {
    $this->db = new Db();
  }

  public function loadFilms() {

    $sql = 'SELECT * FROM films ORDER BY vote_average DESC LIMIT 60';
    $films = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    if($films) {
      return $films;
    }
  }

  public function loadFilmsPerName() {

    $sql = 'SELECT * FROM films WHERE title LIKE "%'.$_POST['film-name'].'%" ORDER BY vote_average DESC';
    $films = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    if($films) {
      return $films;
    }
  }

  public function __destruct() {}
}
