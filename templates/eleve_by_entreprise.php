<?php
include '../header.php';

if ($_GET['id']) {
    $allEleve = $entityManager->getRepository("Eleve")->findByEntreprise($_GET['id']);
    $company = $entityManager->find("\Entreprise", $_GET['id']);
?>
<section>
    <h1>Tous les salariés de l'entreprise : <?= $company->getNom() ?></h1>
    <ul>
<?php
foreach ($allEleve as $key => $eleve) {
    echo "<li><a href='show_eleve.php?id=" . $eleve->getIdeleve() ."'>" . $eleve->getNom() . " " . $eleve->getPrenom() . "</a></li>";
}
?>
    </ul>
</section>

<?php } ?>