<?php
include '../header.php';

if ($_POST) {
    $addSession = new Session();

    $addSession->setDateDebut($_POST['datedebut']);
    $addSession->setDateFin($_POST['datefin']);
    $addSession->setSalle($entityManager->find("\Salle", $_POST['salle']));
    $addSession->setProfesseur($entityManager->find("\Professeur", $_POST['professeur']));
    $addSession->setFormation($entityManager->find("\Formation", $_POST['formation']));

    $entityManager->persist($addSession);
    $entityManager->flush();
}

$allSession = $entityManager->getRepository('Session')->findAll();
$allSalle = $entityManager->getRepository('Salle')->findAll();
$allProfesseur = $entityManager->getRepository('Professeur')->findAll();
$allFormation = $entityManager->getRepository('Formation')->findAll();
?>

<section>
    <h1>Listes de toutes les Sessions</h1>
    <ul>
        <?php
        foreach ($allSession as $key => $session) {
            echo "<li><a>Session du ". $session->getDateDebut() ." au " . $session->getDateFin() . ", avec le professeur: " . $session->getProfesseur() . "" . $session->getNom() . "</a></li>"; //href='eleve_by_entreprise.php?id=" . $session->getIdentreprise() . "'
        }
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter une session</h2>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">

        <label for="datedebut">Date de debut:</label>
        <input type="date" id="datedebut" name="datedebut"
            value="2019-03-28"
            min="2019-03-28" max="2050-12-31">

        <label for="datefin">Date de fin:</label>
        <input type="date" id="datefin" name="datefin"
            value="2019-03-28"
            min="2019-03-28" max="2050-12-31">

        <label for="salle">Salle</label>
        <select name="salle" id="salle">
            <?php
                foreach ($allSalle as $key => $salle) {
                    echo "<option value='" . $salle->getIdsalle() . "'>"  . $salle->getNumero() . "</option>";
                }
            ?>
        </select>

        <label for="professeur">Professeur</label>
        <select name="professeur" id="professeur">
            <?php
                foreach ($allProfesseur as $key => $professeur) {
                    echo "<option value='" . $professeur->getIdprofesseur() . "'>"  . $professeur->getNom() . "</option>";
                }
            ?>
        </select>

        <label for="formation">Formation</label>
        <select name="formation" id="formation">
            <?php
                foreach ($allFormation as $key => $formation) {
                    echo "<option value='" . $formation->getIdformation() . "'>"  . $formation->getNom() .", Catégorie: "  . $formation->getCategorie() . "</option>";
                }
            ?>
        </select>

        <input type="submit" value="Enregistrer">
    </form>
</section>
