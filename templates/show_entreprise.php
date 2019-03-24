<?php
include '../header.php';

$allCompany = $entityManager->getRepository('Entreprise')->findAll();
?>

<section>
    <h1>Liste de toutes les entreprises clientes</h1>
    <ul>
        <?php
        foreach ($allCompany as $key => $company) {
            echo "<li><a href='eleve_by_entreprise.php?id=" . $company->getIdentreprise() . "'>" . $company->getNom() . "</a></li>";
        }
        ?>
    </ul>
</section>
