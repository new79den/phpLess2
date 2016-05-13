<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?foreach ($items as $item):?>
        <a href="http://phpless2/News/<?echo $item->id?>"><h1><?echo $item->title?></h1></a>
<p>
    <?echo $item->news?>
</p>
<?endforeach;?>
    <a href="http://phpless2/AddNews">добавить новость</a>

</body>
</html>