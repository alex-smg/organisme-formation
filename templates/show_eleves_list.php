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

$allEntreprise = $entityManager->getRepository('Entreprise')->findAll();
$allEleves = $entityManager->getRepository('Eleve')->getAllEleveOrderByEntreprise();

?>

<section>
    <h1>Liste de tous les élèves</h1>
    <ul>
        <?php
        foreach ($allEleves as $key => $eleve) {
            echo "<li><a href='show_eleve.php?ref=objet&amp;id=" . $eleve->getIdeleve() ."'>"
            . $eleve->getNom() . " "
            . $eleve->getPrenom() . " ("
            . $eleve->getEntreprise()->getNom() . ")</a></li>";
        }
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter un élève</h2>

        <form method="post">
            <div class="form-group">
                <label for="exampleInputNom">Nom</label>
                <input type="text" class="form-control" id="exampleInputNom"  placeholder="Entrez votre nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPrenom">Prenom</label>
                <input type="text" class="form-control" id="exampleInputPrenom" placeholder="Entrez votre prénom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="entreprise">Entreprise</label>
                <select name="entreprise" id="entreprise">
                    <?php
                        foreach ($allEntreprise as $key => $entreprise) {
                            echo "<option value='" . $entreprise->getIdEntreprise() . "'>"  . $entreprise->getNom() . "</option>";
                        }
                    ?>
                </select>
            </div>

        <input type="submit" class="btn btn-primary" value="Enregistrer" name="envoyer">
    </form>
</section>