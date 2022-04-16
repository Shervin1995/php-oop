<?php


// ----------------------------------------------
// Class digikala
// ----------------------------------------------
Class digikala {

  // (1)
  public $connect;

  private $dsn = array(
    'mysql:host=localhost;dbname=perniadb',
    'pernia',
    'Pernia', 
    array("PDO::MYSQL_ATTR_INIT_COMMEND" => "set names utf8")
  );

  // (2)
  // when `new digikala` is called, the `__construct` runs and `$connect` will get `new PDO`!
  public function __construct(){
    $this -> connect = new PDO(
      $this -> dsn[0],
      $this -> dsn[1],
      $this -> dsn[2],
      $this -> dsn[3]
    );
  }

  // (3)
  // idu: insert delete update
  public function idu($query, $data){
    
    $pre = $this -> connect -> prepare($query);
    
    if ($data) {
      foreach ($data as $key => $value) {
        $pre -> bindvalue($key+1, $value); // bindParam doesnt work
      }
    }
    
    $pre -> execute();
    
    if (strpos($query,'ELECT')) {
      $result = $pre -> fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

  }



};
