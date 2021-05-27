<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Vieraskirja</title>
    <?php
    include 'app.php';
    ?>
</head>
<body>
<h2>Kirjoita viesti</h2>
<form>
    <input type="text" id="name" placeholder="Nimi"><br><br>
    <textarea type="text" id="msg" rows="6" cols="50" placeholder="Viesti max. 300 merkkiä"></textarea><br>
    <input type="button" id="add-msg" value="Hyväksy">
</form>
<div>
<ul id="messages">
    
</ul>
</div>
</body>
</html>