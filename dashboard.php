<?php
session_start();
if (!isset($_SESSION["users"])) {
    header("Location:/");
    exit();
}
$login = $_SESSION["login"];
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <title>Защищенная страница</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<h1>Добро пожаловать, <?php echo htmlspecialchars($login); ?>!</h1>
<a href="logout.php">
    <button class="btn btn-primary w-20 py-2" type="submit">Выйти</button></a>

<?php require_once('templates/footer.php') ?>