<?php
include '../header.php';

if ($_POST) {
    $addProfesseur = new Professeur();

    $addProfesseur->setNom($_POST['nom']);
    $addProfesseur->setPrenom($_POST['prenom']);

    $entityManager->persist($addProfesseur);
    $entityManager->flush();
}

$allProfesseurs = $entityManager->getRepository('Professeur')->findAll();

?>

<section>
    <h1>Liste de tous les Professeurs</h1>
    <ul>
        <?php
        foreach ($allProfesseurs as $key => $professeur) {
            echo "<li><a>"
            . $professeur->getNom() . " " 
            . $professeur->getPrenom() . "</a></li>";
        } // href='show_eleve.php?id=" . $eleve->getIdeleve() ."'
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter un professeur</h2>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">

        <input type="submit" value="Enregistrer">
    </form>
</section>