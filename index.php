<?php

require_once 'bootstrap.php';

echo '<html><head><meta charset="UTF-8"></head><body>';

$eleve1 = $entityManager->find("\Eleve", 1);

echo $eleve1->getNom() . ' ' . $eleve1->getPrenom() . '<br><br>';

echo $eleve1->getEntreprise()->getNom();