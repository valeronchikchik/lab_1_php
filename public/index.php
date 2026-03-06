<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Моє</title>
</head>
<body>

<form method="post">
    <label>Введіть ваше ім'я:</label>
    <input type="text" name="name">
    <button type="submit">Надіслати</button>
</form>

<?php
if (!empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    echo "Привіт, $name!";
}
?>

</body>
</html>
