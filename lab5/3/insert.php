<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $pdo = new PDO('mysql:host=localhost;dbname=company_db;charset=utf8', 'root', '');

    $sql = "INSERT INTO employees (name, position, salary) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $position, $salary]);

    header("Location: index.php");
    exit();
}
?>
