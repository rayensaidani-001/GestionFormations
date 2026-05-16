<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Inscription</title>

<style>

body{
    font-family: Arial;
    margin: 30px;
    background:#f5f5f5;
}

form{
    background:white;
    padding:30px;
    border-radius:8px;
    max-width:500px;
}

input{
    width:100%;
    padding:10px;
    margin-bottom:15px;
}

button{
    background:#1A3A5C;
    color:white;
    border:none;
    padding:12px;
    width:100%;
}

</style>

</head>

<body>

<h1>Inscription</h1>

<form method="POST"
action="index.php?page=paiement">

<input
type="text"
name="nom"
placeholder="Nom"
required>

<input
type="text"
name="prenom"
placeholder="Prénom"
required>

<input
type="email"
name="email"
placeholder="Email"
required>

<button type="submit">

Continuer vers paiement

</button>

</form>

</body>

</html>