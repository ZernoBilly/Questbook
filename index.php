<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Questbook</title>
    <?php
    include 'app.php';
    ?>
</head>
<body>
<h2>Kirjoita viesti</h2>
<form>
    <div class="form-group">
    <input type="text" id="name" placeholder="Nimi" class="form-control"><br><br>
    <textarea class="sm-textarea form-control" type="text" id="msg" rows="6" cols="50" placeholder="Viesti max. 300 merkkiä"></textarea><br>
    <input type="button" id="add-msg" value="Hyväksy">
    </div>
</form>
<div>
<ul class="list-group" id="messages">
    
</ul>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>