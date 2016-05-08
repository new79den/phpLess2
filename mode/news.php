<?
include __DIR__ . "/../function/DB.php";


function get_news()
{
    $news = new DB();
    $res = $news->sql_query("SELECT * FROM t_news");
    return $res;
}

function put_news($data){
    $sql = "INSERT INTO t_news
			(title, news)
			VALUES
			('" .  $data['title']  . "', '" .  $data['text']  . "')
	";
    $news2 = new DB();
    $news2->sql_exec($sql);
}