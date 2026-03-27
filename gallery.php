<?php ?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Galeria - SpeedShift Motors</title>
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>
<?php include('sidebar.php'); ?>

<section>
    <h2>Galeria</h2>
    <div class="gallery">
        <?php
        $images = array_diff(scandir("uploads"), array('.','..'));
        foreach($images as $img){
            echo "<img src='uploads/$img' alt='Zdjęcie'>";
        }
        ?>
    </div>
</section>
</body>
</html>