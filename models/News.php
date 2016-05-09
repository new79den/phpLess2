<?
require_once __DIR__ . "/../classes/DB.php";

class News
{
    public $id;
    public $title;
    public $news;

   public static function getAll()
    {
        $news = new DB();
        return $news->queryAll("SELECT * FROM t_news", "News");
    }

    public static function getOne($id){
        $news = new DB();
        return $news->queryOne("SELECT * FROM t_news WHERE id =". $id, "News");
    }

    function put_news($data)
    {
        $sql = "INSERT INTO t_news
			(title, news)
			VALUES
			('" . $data['title'] . "', '" . $data['text'] . "')
	";
        $news2 = new DB();
        $news2->sql_exec($sql);
    }
}