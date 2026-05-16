<?php require 'views/partials/header.php'; ?>

<h1>Liste des Formations</h1>

<div class="formations-container">

<?php foreach ($formations as $f): ?>

<div class="formation-card">

    <h2>
        <?= htmlspecialchars($f['titre']) ?>
    </h2>

    <p>
        <?= htmlspecialchars($f['description']) ?>
    </p>

    <p>
        Durée : <?= $f['duree'] ?>
        |
        Niveau : <?= $f['niveau'] ?>
    </p>

    <h3>
        <?= $f['prix'] ?> DT
    </h3>

    <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">

        S'inscrire

    </a>

</div>

<?php endforeach; ?>

</div>

<?php require 'views/partials/footer.php'; ?>