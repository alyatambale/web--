<?php
require_once('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$email = $_POST['email'];
$tour = $_POST['tour'];
$number = $_POST['number'];
$comments = $_POST['comments'];
$date = $_POST['date'];

$sql = "INSERT INTO book (name, email, tour, number, comments, date ) VALUES ('$name', '$email', '$tour','$number','$comments', '$date')";


if ($conn->query($sql) === TRUE) {
    
    echo "Данные успешно добавлены в базу данных, в ближайшее время с Вами свяжется наш оператор";
    header("Location:tour.php");
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();