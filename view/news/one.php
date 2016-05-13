<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1><? echo $items->title ?></h1>
<p>
    <? echo $items->news ?>
</p>
<a href="http://phpless2/">все новости</a><br>
<a href="http://phpless2/?ctrl=News&act=Del&id=<?echo $_GET['id'];?>">Удалить</a>
</body>
</html>