<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Paiement</title>

<style>

body{
    font-family: Arial;
    margin: 30px;
    background:#f5f5f5;
}

.box{
    background:white;
    padding:30px;
    border-radius:8px;
    max-width:500px;
}

button{
    background:green;
    color:white;
    border:none;
    padding:12px;
    width:100%;
}

</style>

</head>

<body>

<div class="box">

<h1>Paiement validé ✅</h1>

<p>

Bienvenue

<strong>

<?= htmlspecialchars(
$_SESSION['etudiant']['prenom']
) ?>

</strong>

</p>

<p>

Votre accès aux cours est maintenant activé.

</p>

<a href="index.php?page=cours">

<button>

Accéder aux cours

</button>

</a>

</div>

</body>

</html>