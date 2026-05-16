<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Cours</title>

<style>

body{
    font-family: Arial;
    margin: 30px;
    background:#f5f5f5;
}

.card{
    background:white;
    padding:30px;
    border-radius:8px;
}

</style>

</head>

<body>

<div class="card">

<h1>Espace Cours 🎓</h1>

<p>

Bienvenue

<strong>

<?= htmlspecialchars(
$_SESSION['etudiant']['prenom']
) ?>

</strong>

</p>

<ul>

<li>Introduction PHP</li>

<li>Architecture MVC</li>

<li>MySQL & PDO</li>

<li>Sécurité Web</li>

</ul>

</div>

</body>

</html>