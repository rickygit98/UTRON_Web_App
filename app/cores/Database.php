<?php

class Database
{
  // database profile
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASSWORD;
  private $db_name = DB_NAME;

  // database handler
  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

    //optional
    $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->password, $option);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function binding($parameter, $value, $type = null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($parameter, $value, $type);
  }

  public function execute()
  {
    $this->stmt->execute();
  }

  public function row_affect()
  {
    return $this->stmt->rowCount();
  }

  public function get()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function first()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
}
?>
