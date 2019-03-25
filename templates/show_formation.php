<?php
include '../header.php';

if ($_POST) {
    $addFormation = new Formation();

    $addFormation->setNom($_POST['nom']);
    $addFormation->setCategorie($_POST['categorie']);
    $addFormation->setProfesseur($entityManager->find("\Professeur", $_POST['prof']));

    $entityManager->persist($addFormation);
    $entityManager->flush();
}

$allFormation = $entityManager->getRepository('Formation')->findAll();
$allprofesseur = $entityManager->getRepository('Professeur')->findAll();

?>

<section>
    <h1>Liste de toutes les formations</h1>
    <ul>
        <?php
        foreach ($allFormation as $key => $formation) {
            echo "<li><a href='eleve_by_entreprise.php?id='>" 
            . $formation->getNom() . " (" 
            . $formation->getProfesseur()->getNom() . " " 
            . $formation->getProfesseur()->getPrenom() . ")</a></li>";
        }
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter une formation</h2>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="categorie">Categorie</label>
        <input type="text" name="categorie" id="categorie">

        <label for="prof">Professeur responsable</label>
        <select name="prof" id="prof">
            <?php
                foreach ($allprofesseur as $key => $professeur) {
                    echo "<option value='" . $professeur->getIdprofesseur() . "'>"  . $professeur->getNom() . "</option>";
                }
            ?>
        </select>

        <input type="submit" value="Enregistrer">
    </form>
</section>