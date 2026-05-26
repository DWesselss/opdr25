<?php
$titel = $_POST['titel'] ?? '';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>POST Test</title>
</head>
<body>

<form method="POST">
    <input type="text" name="titel" placeholder="Voer een titel in">
    <button type="submit">Versturen</button>
</form>

<pre>
<?php print_r($_POST); ?>
</pre>

<p>
    Titel: <?= htmlspecialchars($titel) ?>
</p>

</body>
</html>