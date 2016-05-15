<?
require_once __DIR__ . "/config.php";

class DB extends config
{
    private $dbh;

    function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=' . $this->db . ';host=' . $this->host, $this->user, $this->pass);
    }

    public function query($sql, $params = array())
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll();
    }


    /* public function queryAll($sql, $class = 'stdClass')
     {
         $res = mysql_query($sql);
         if ($res == false) {
             return false;
         }
         $arr = array();
         while ($row = mysql_fetch_object($res, $class)) {
             $arr[] = $row;
         }
         return $arr;
     }
     public function queryOne($sql, $class = 'stdClass'){
         $res = $this->queryAll($sql, $class);
         return $res[0];

     }

     public function sql_exec($sql)
     {
         mysql_query($sql);
     }*/
}