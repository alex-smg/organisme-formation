<?php
include '../header.php';

if ($_GET['id']) {
    $student = $entityManager->find("\Eleve", $_GET['id']);
?>
<section>
    <h1>Nom de l'eleve :</h1>
    <ul><?= $student->getPrenom() . " " . $student->getNom()?></ul>
    <h1> Entreprise:</h1>
    <ul><?= "<a href='show_entreprise.php?id=" . $student->getEntreprise()->getIdentreprise() . "' . >" . $student->getEntreprise()->getNom() . "</a>"?></ul>
    <ul>
<?php

?>
    </ul>
</section>

<?php } ?>