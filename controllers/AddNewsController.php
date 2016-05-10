<?php

class AddNewsController
{
    public function actionAddNews(){
        include __DIR__ . "/../classes/add_post.php";
        include __DIR__ . "/../view/addNews.php";
    }
}