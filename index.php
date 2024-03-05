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

// Обработка результатов запроса
while ($row = mysqli_fetch_assoc($result)) {
    echo "Pytanie: " . $row["idp"] . " " . $row["pytanie"] . "<br>";
}

// Закрытие соединения
mysqli_close($conn);
?>
