<?php
include '../header.php';

if ($_POST) {
    $addEntreprise = new Entreprise();

    $addEntreprise->setNom($_POST['nom']);

    $entityManager->persist($addEntreprise);
    $entityManager->flush();
}

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

<section>
    <h2>Ajouter une entreprise</h2>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <input type="submit" value="Enregistrer">
    </form>
</section>
