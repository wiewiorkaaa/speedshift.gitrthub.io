<?php
session_start();
$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Prosty login admin
    if($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Nieprawidłowy login lub hasło';
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Logowanie - SpeedShift Motors</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="admin-container">
    <h2>Logowanie do panelu admina</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Nazwa użytkownika" required><br><br>
        <input type="password" name="password" placeholder="Hasło" required><br><br>
        <button type="submit">Zaloguj</button>
    </form>
    <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>
</div>

</body>
</html>