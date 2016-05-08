<?
require_once __DIR__ . "/config.php";

class DB extends config
{
    function __construct()
    {
        mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db);
    }

    public function query($sql, $class = 'stdClass')
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

    public function sql_exec($sql)
    {
        $res = mysql_query($sql);
        var_dump($res);
    }
}