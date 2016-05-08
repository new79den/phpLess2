<?
require_once __DIR__ . "/models/News.php";
$items = News::getAll();
include __DIR__ . "/view/index.php";