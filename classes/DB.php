<?
require_once __DIR__ . "/config.php";

class DB extends config
{
    private $dbh;
    private $className;

    function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=' . $this->db . ';host=' . $this->host, $this->user, $this->pass);
    }

    public function setClassName($class){
        $this->className = $class;
    }
    public function query($sql, $params = array())
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    public function execute($sql, $params = array())
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        
    }
}