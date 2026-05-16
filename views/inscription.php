<?php

require 'views/partials/header.php';
?>

<section class="form-section">

<h1>Formulaire d'Inscription</h1>

<?php if (!empty($erreurs)): ?>

<div class="alert-error">

<ul>

<?php foreach ($erreurs as $e): ?>

<li><?= htmlspecialchars($e) ?></li>

<?php endforeach; ?>

</ul>

</div>

<?php endif; ?>

<form method="POST"
      action="index.php?page=inscription">

<label>Nom</label>

<input type="text"
       name="nom"
       value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
       required>

<label>Prénom</label>

<input type="text"
       name="prenom"
       value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>"
       required>

<label>Email</label>

<input type="email"
       name="email"
       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
       required>

<label>Formation</label>

<select name="formation_id" required>

<option value="">
Choisir une formation
</option>

<?php foreach ($formations as $f): ?>

<option value="<?= $f['id'] ?>"
<?= ($formation_preselect == $f['id']) ? 'selected' : '' ?>>

<?= htmlspecialchars($f['titre']) ?>
-
<?= $f['prix'] ?> DT

</option>

<?php endforeach; ?>

</select>

<button type="submit">

Continuer vers paiement

</button>

</form>

</section>

<?php require 'views/partials/footer.php'; ?>