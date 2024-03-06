<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Показ данных из базы данных</title>
</head>
<body>

<?php
$host = "sql8.freesqldatabase.com";
$user = "sql8687824";
$password = "HKiuRJzgH7";
$database = "sql8687824";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

$query = "SELECT * FROM pytania";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Ошибка запроса: " . mysqli_error($conn));
}

// Генерация HTML на основе результатов запроса
echo "<table border='1'>
        <tr>
            <th>Id</th>
            <th>Pytania</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row["idp"] . "</td>
            <td>" . $row["pytanie"] . "</td>
          </tr>";
}

echo "</table>";

// Закрытие соединения
mysqli_close($conn);
?>

</body>
</html>
