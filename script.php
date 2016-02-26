<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/**
 *
 */


class Foo
{
  private $db;

  function __construct()
  {
    try
    {
      $this->db = new PDO('mysql:localhost;dbname=taskDb', 'root', 'root');
    } catch(PDOException $e)
    {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }

  }
}

$foo = new Foo();


  // Model
  // function validate($var);
  // function add(object $obj);
  // function del(object $obj);
  // function update(object $obj);
  // function get(object $obj);
  // function set(object $obj, $param);
  //
  // Controller
  // function init();
  // function render();
  // function handler();
  //
  // View
  // function draw();
  // function getform();
  // function error();


  // function validate($var)
  // {
  //   $type = gettype($var);
  //   $result = true;
  //   switch ($type) {
  //     case 'integer':
  //       if($var < 0) $result = false;
  //       break;
  //     case 'string':
  //       if(strlen($var) == 0 || strlen($var) > 128) $result = false;
  //       break;
  //     default:
  //       $result = false;
  //       break;
  //   }
  //   return $result;
  // }
  //
  //
  // function add(Object $obj)
  // {
  //   $sql = "SELECT id FROM taskDb.Objects WHERE id = $obj->params["id"]";
  //   $res = $this->db->query($sql);
  //   if ($res) return false;
  //   foreach($obj->params as $param)
  //     if (!validate($param)) return false;
  //   $sql = "INSERT INTO taskDB.Objects (itd,itp) VALUES $obj['itd'], $obj['itp']";
  //   $res = $this->db->query($sql);
  // }
  // function update(Object $obj)
  // {
  //   $sql = "UPDATE taskDb.Objects
  //   SET key = $obj['val']
  //   WHERE id = $obj['id']";
  // }

?>
