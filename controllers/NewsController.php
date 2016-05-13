<?php

class NewsController
{

    public function actionAll()
    {
        $news = News::getAll();
        $view = new View();
        $view->items = $news;
        $view->display("news/all.php");
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $news = News::getOne($id);
        $view = new View();
        $view->items = $news;
        $view->display("news/one.php");
    }

    public function actionAdd()
    {
        News::addNews();
        $view = new View();
        $view->display("addNews.php");
    }

    public function actionDel(){
        $id = $_GET['id'];
        News::deleteNews($id);
        header("Location: http://phpless2/");
    }
}