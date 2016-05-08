<?
require __DIR__ . "/mode/news.php";
$res = get_news();
include __DIR__ . "/view/index.php";