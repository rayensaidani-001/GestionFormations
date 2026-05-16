<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">

<title>Formations MVC</title>

<style>

body {
    font-family: Arial, sans-serif;
    margin: 30px;
    background-color: #f5f5f5;
}

h1 {
    color: #1A3A5C;
}

.formation {
    background: white;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
}

.prix {
    color: orange;
    font-weight: bold;
    font-size: 1.2em;
}

a {
    text-decoration: none;
    color: #0d6efd;
}

</style>

</head>

<body>

<h1>Liste des Formations</h1>

<?php foreach ($formations as $f): ?>

<div class="formation">

<h2>
<?= htmlspecialchars($f['titre']) ?>
</h2>

<p>
<?= htmlspecialchars($f['description']) ?>
</p>

<p>
Durée :
<?= htmlspecialchars($f['duree']) ?>

|

Niveau :
<?= htmlspecialchars($f['niveau']) ?>
</p>

<p class="prix">
<?= htmlspecialchars($f['prix']) ?> DT
</p>

<a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">
S'inscrire
</a>

</div>

<?php endforeach; ?>

</body>

</html>