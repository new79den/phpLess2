<?

class DB
{
    private $host = "localhost";
    private $pass = "";
    private $user = "root";
    private $db = "news";

    function __construct()
    {
        mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db);
    }

    public function sql_query($sql)
    {
        $res = mysql_query($sql);
        $arr = array();
        while($row = mysql_fetch_assoc($res)){
            $arr[] = $row;
        }
        return $arr;
    }
    public function sql_exec($sql)
    {
        $res = mysql_query($sql);
        var_dump($res);
    }
}