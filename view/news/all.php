<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?foreach ($items as $item):?>
<h1><?echo $item->title?></h1>
<p>
    <?echo $item->news?>
</p>
<?endforeach;?>
    <a href="../addNews.php">добавить новость</a>
</body>
</html>