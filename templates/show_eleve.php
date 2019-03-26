<?php
include '../header.php';





    if ($_GET['id']) {
        $Eleve = $entityManager->getRepository("Eleve")->findBy(array('ideleve' => $_GET));
         foreach ($Eleve as $key => $entreprise) {
        $result =  $entreprise->getEntreprise();
            }

        $Entreprise = $entityManager->getRepository("Entreprise")->findBy(array('identreprise' => $result));
        $findEleve = $_GET['id'];

        echo $findEleve;

    }


    if ($_POST) {
        $addParticipation = new Participation();
        $addParticipation->setEleve($entityManager->find("\Eleve", $_GET['id']));
        $addParticipation->setSession($entityManager->find("\Session", $_POST['session']));
        $entityManager->persist($addParticipation);
        $entityManager->flush();
    }

    $allFormation = $entityManager->getRepository('Formation')->findAll();
    $allSession = $entityManager->getRepository('Session')->findAll();
?>



<section>
    <h1>Nom de l'eleve :</h1>
    <ul><?php foreach ($Eleve as $key => $eleve) {
        echo $eleve->getNom();
            }
?></ul>
    <h1> Entreprise:</h1>
    <ul><?php foreach ($Entreprise as $key => $entreprise) {
        echo $entreprise->getNom();
        }
        ?></ul>
    <ul>
<?php
/*
*/?>
    </ul>
</section>

    <section>
        <h2>S'inscrire à une session</h2>

        <form method="post">

            <div class="form-group">
                <label for="formation">Formation</label>
                <select name="formation" id="formation">
                    <?php
                        foreach ($allFormation as $key => $formation) {
                            echo "<option value='" . $formation->getIdformation() . "'>"  . $formation->getNom() . "</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="session">Session</label>
                <select name="session" id="session">
                    <?php
                        foreach ($allSession as $key => $session) {
                            echo "<option value='" . $session->getIdsession() . "'>"  . $session->getDateDebut()->format('d-m-Y H') . " - " . $session->getDateFin()->format('d-m-Y H') . "</option>";
                        }
                    ?>
                </select>
            </div>

            <input type="submit" class="btn btn-primary" value="Enregistrer" name="envoyer">
        </form>
    </section>
