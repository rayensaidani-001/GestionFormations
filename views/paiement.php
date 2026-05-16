<?php require 'views/partials/header.php'; ?>

<h1>Paiement</h1>

<h2>
Formation :
<?= htmlspecialchars($inscription['formation_titre']) ?>
</h2>

<h3>
Montant :
<?= $inscription['prix'] ?> DT
</h3>

<?php if ($erreur_paiement): ?>

<p>
Paiement refusé
</p>

<?php endif; ?>

<form method="POST"
      action="index.php?page=paiement&id=<?= $id ?>">

<button type="submit" name="mode" value="ok">

Paiement réussi

</button>

<button type="submit" name="mode" value="fail">

Paiement refusé

</button>

</form>

<?php require 'views/partials/footer.php'; ?>