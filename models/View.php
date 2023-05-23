<?php
class View extends ApplicationController {

  private $db;

  public function __construct() {
    $this->db = new Db();
  }

  public function loadFilms() {

    $sql = 'SELECT * FROM films ORDER BY vote_average DESC LIMIT 60';
    $categories = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    if($categories) {
      return $categories;
    }
  }

  public function __destruct() {}
}
