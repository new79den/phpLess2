<?php

class NewsController
{

    public function actionAll()
    {
        $news = NewsModel::findAll();
        $view = new View();
        $view->items = $news;
        $view->display("news/all.php");

        /*try {
            $news = NewsModel::findOneByColumn('title', 'xcvxcv');
            $news->title = "Новій ййййййййййййй";
            $news->news = "199999999998888888888888899999999999999999999";
            $news->save();
            var_dump($news->id);
        } catch (ModelException $e){
            die('что-то пошло не так');
        }*/

    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $news = NewsModel::findOne($id);
        $view = new View();
        $view->items = $news;
        $view->display("news/one.php");

    }

    public function actionAdd()
    {
        $article = new NewsModel();
        $article->title = "привет";
        $article->news = "111111111";
        $article->save();
        /*News::addNews();
        $view = new View();
        $view->display("addNews.php");*/
    }

    public function actionDel(){
        $id = $_GET['id'];
        News::deleteNews($id);
        header("Location: http://phpless2/");
    }
}