<?
require __DIR__ . "/../function/DB.php";

function get_news()
{
    $news = new DB();
    $res = $news->sql_query("SELECT * FROM t_news");
    return $res;
}