<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_SESSION['paiement_ok'] = true;

    $_SESSION['etudiant'] = [

        'nom' => $_POST['nom'],

        'prenom' => $_POST['prenom'],

        'email' => $_POST['email']

    ];

}

require 'views/paiement.php';