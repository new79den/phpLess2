<?
require_once __DIR__ . "/../classes/DB.php";
require_once __DIR__ . "/../classes/AbstractModel.php";

class News extends AbstractModel
{
    public $id;
    public $title;
    public $news;
    static $table = "t_news";


    public static function getOne($id){
        $news = new DB();
        return $news->queryOne("SELECT * FROM t_news WHERE id =". $id, "News");
    }

    public static function put_news($data)
    {
        $sql = "INSERT INTO t_news
			(title, news)
			VALUES
			('" . $data['title'] . "', '" . $data['text'] . "')
	";
        $news = new DB();
        $news->sql_exec($sql);
    }
}