<?php
session_start();
if (isset($_SESSION["users"])) {
  header("Location:dashboard.php");
  exit();
}

if ($_SESSION['REQUEST_METHOD'] = 'POST') {
  $login = htmlentities($_POST['login']);
  $password = htmlentities($_POST['password']);
}

$usersArray =
  [
    [$login => "ivan", $name => "Иван", $password => "12345"],
    [$login => "petr", $name => "Петр", $password => "54321"],
  ];

foreach ($usersArray as $user) {
  if ($user['login'] = $login && $user['password'] = $password) {

    $_SESSION['users'] = 1;
    $_SESSION['login'] = $login;
    $error = "";
    header("Location:dashboard.php");
    exit();
  } else {
    $error = "Неверный логин или пароль";
  }
}
?>


<?php require_once('templates/header.php') ?>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

  <main class="form-signin w-20 m-auto">
    <form action="/" method="post">

      <h1 class="h3 mb-3 fw-normal">Авторизация</h1>

      <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
      <?php endif; ?>

      <div class="form-floating">
        <input type="text" name="login" class="form-control" id="login" placeholder="name@example.com" required>
        <label for="login">Логин</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Пароль</label>
      </div>

      <button class="btn btn-primary w-20 py-2" type="submit">Войти</button>

    </form>
  </main>
</body>

</html>