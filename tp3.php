<?php

echo "<h1>Question 1</h1>";

$formations = [
    "Développement Web",
    "Réseaux",
    "Sécurité",
    "Base de données"
];

foreach ($formations as $formation) {
    echo $formation . "<br>";
}

?>
<?php

echo "<hr>";
echo "<h1>Question 2</h1>";

$utilisateur = [

    "nom" => "Saidani",
    "prenom" => "Rayen",
    "email" => "rayen.saidani@edu.isetcom.tn",
    "formation" => "GTIC"

];

echo "Nom : " . $utilisateur["nom"] . "<br>";

echo "Prénom : " . $utilisateur["prenom"] . "<br>";

echo "Email : " . $utilisateur["email"] . "<br>";

echo "Formation : " . $utilisateur["formation"] . "<br>";

?>
<?php

echo "<hr>";
echo "<h1>Question 3</h1>";

$formations = [

    ["nom" => "Développement Web", "duree" => "3 mois"],

    ["nom" => "Réseaux", "duree" => "2 mois"],

    ["nom" => "Sécurité", "duree" => "4 mois"]

];

foreach ($formations as $f) {

    echo "Formation : "
    . $f["nom"]
    . " - Durée : "
    . $f["duree"]
    . "<br>";

}

?>
<?php

echo "<hr>";
echo "<h1>Exercice</h1>";

$nom = "Saidani";
$prenom = "Rayen";
$age = 20;

if (is_numeric($age) && $age > 0) {

    echo "Âge valide : " . $age . "<br>";

} else {

    echo "Âge invalide<br>";

}

echo "Bienvenue $prenom $nom";

?>