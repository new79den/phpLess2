<?
require __DIR__ . "/../mode/news.php";
if (!empty($_POST)){
    $data = array();
    if (!empty($_POST["title"])){
        $data['title'] = $_POST["title"];
    }
    if (!empty($_POST["text"])){
        $data['text'] = $_POST["text"];
    }
}

if (isset($data['title']) && isset($data['text'])){
    put_news($data);


}