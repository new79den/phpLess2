<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="addNews.php" method="post">
    <label for="title">заголовок</label>
    <input type="text" name="title" id ="title"><br><br>
    <label for="text">Текст</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <input type="submit" value="добавить">
</form>
<a href="news/all.php">главная</a>
</body>
</html>