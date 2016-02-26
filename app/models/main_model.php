<?php
class MainModel extends BaseModel
{
  private $db;
  function __construct()
  {
    $db = new PDO('mysql:host=localhost;dbname=taskDb;', 'root', 'root');
  }
  function get_data()
  {
    $result = $this->db->query("SELECT * FROM Objects;");
    return $result;
  }
}
