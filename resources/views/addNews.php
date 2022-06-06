<html>
<head>
    <title>Добавить новость</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="form.php" method="post">
    <table>
        <tr>
            <td>Рубрика</td>
            <td><input type=text name="rub" size="20"></td>
        </tr>
        <tr>
            <td>Заголовок</td>
            <td><textarea name="zag" cols="40" rows="2"></textarea></td>
        </tr>
        <tr>
            <td>Подзаголовок</td>
            <td><textarea name="rzag" cols="40" rows="2"></textarea></td>
        </tr>
        <tr>
            <td>Текст статьи</td>
            <td><textarea name="text" cols="70" rows="20"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="Отправить"></td>
        </tr>
    </table>
</form>

</body>
</html>


