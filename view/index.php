<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?foreach ($res as $new_res):?>
<h1><?echo $new_res['title']?></h1>
<p>
    <?echo $new_res['news']?>
</p>
<?endforeach;?>
</body>
</html>