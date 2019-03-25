<?php
include '../header.php';

if ($_POST) {
    $addEleve = new Eleve();

    $addEleve->setNom($_POST['nom']);
    $addEleve->setPrenom($_POST['prenom']);
    $addEleve->setEntreprise($entityManager->find("\Entreprise", $_POST['entreprise']));

    $entityManager->persist($addEleve);
    $entityManager->flush();
}

$allEleves = $entityManager->getRepository('Eleve')->findAll();
$allEntreprise = $entityManager->getRepository('Entreprise')->findAll();

?>

<section>
    <h1>Liste de tous les élèves</h1>
    <ul>
        <?php
        foreach ($allEleves as $key => $eleve) {
            echo "<li><a href='show_eleve.php?id=" . $eleve->getIdeleve() ."'>" 
            . $eleve->getNom() . " " 
            . $eleve->getPrenom() . " (" 
            . $eleve->getEntreprise()->getNom() . ")</a></li>";
        }
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter un élève</h2>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">

        <label for="entreprise">Entreprise</label>
        <select name="entreprise" id="entreprise">
            <?php
                foreach ($allEntreprise as $key => $entreprise) {
                    echo "<option value='" . $entreprise->getIdEntreprise() . "'>"  . $entreprise->getNom() . "</option>";
                }
            ?>
        </select>

        <input type="submit" value="Enregistrer">
    </form>
</section>