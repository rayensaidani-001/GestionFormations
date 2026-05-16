<?php

require 'includes/connexion.php';

$pdo = getConnexion();

$stmt = $pdo->query(
    'SELECT id, titre, prix FROM formations ORDER BY id ASC'
);

$formations = $stmt->fetchAll();

$formation_preselect =
isset($_GET['formation_id'])
? (int)$_GET['formation_id']
: 0;

session_start();

$erreurs = $_SESSION['erreurs'] ?? [];

$old_post = $_SESSION['old_post'] ?? [];

unset($_SESSION['erreurs'], $_SESSION['old_post']);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Inscription</title>

<style>

body {
    font-family: Arial;
    margin: 30px;
    background: #f5f5f5;
}

h1 {
    color: #1A3A5C;
}

.form-box {
    background: white;
    padding: 30px;
    border-radius: 8px;
    max-width: 560px;
}

label {
    display: block;
    font-weight: bold;
    margin-top: 16px;
}

input,
select {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    display: block;
    width: 100%;
    margin-top: 24px;
    padding: 12px;
    background: #1A3A5C;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.alert {
    background: #fff0f0;
    border-left: 4px solid red;
    padding: 12px;
    margin-bottom: 20px;
}

</style>

</head>

<body>

<h1>Inscription à une Formation</h1>

<div class="form-box">

<?php if (!empty($erreurs)): ?>

<div class="alert">

<ul>

<?php foreach ($erreurs as $e): ?>

<li><?= htmlspecialchars($e) ?></li>

<?php endforeach; ?>

</ul>

</div>

<?php endif; ?>

<form method="POST" action="traitement.php">

<label>Nom</label>

<input type="text"
name="nom"
value="<?= htmlspecialchars($old_post['nom'] ?? '') ?>"
required>

<label>Prénom</label>

<input type="text"
name="prenom"
value="<?= htmlspecialchars($old_post['prenom'] ?? '') ?>"
required>

<label>Email</label>

<input type="email"
name="email"
value="<?= htmlspecialchars($old_post['email'] ?? '') ?>"
required>

<label>Formation choisie</label>

<select name="formation_id" required>

<option value="">
-- Choisir une formation --
</option>

<?php foreach ($formations as $f): ?>

<option value="<?= $f['id'] ?>"

<?php

$sel =
($old_post['formation_id']
?? $formation_preselect)
== $f['id'];

echo $sel ? 'selected' : '';

?>

>

<?= htmlspecialchars($f['titre']) ?>

- <?= $f['prix'] ?> DT

</option>

<?php endforeach; ?>

</select>

<button type="submit" class="btn">

Valider l'inscription →

</button>

</form>

</div>

</body>

</html>