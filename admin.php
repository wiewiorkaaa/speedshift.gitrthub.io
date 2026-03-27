<?php
session_start();
// Tylko zalogowany admin może wejść
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}

// Obsługa dodawania zdjęcia
if(isset($_FILES['image'])){
    $target = 'uploads/' . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Panel admina - SpeedShift Motors</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>
<?php include('sidebar.php'); ?>

<div class="admin-container">
    <h2>Panel admina</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit">Dodaj zdjęcie</button>
    </form>
    <a href="logout.php" class="logout">Wyloguj</a>

    <div class="admin-gallery">
        <?php
        $images = array_diff(scandir("uploads"), array('.','..'));
        foreach($images as $img){
            echo "<div class='thumb'><img src='uploads/$img'></div>";
        }
        ?>
    </div>
</div>

</body>
</html>