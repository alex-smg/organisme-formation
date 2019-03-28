<?php
include '../header.php';





    if (! empty($_GET['id'])) {
        $Eleve = $entityManager->getRepository("Eleve")->findBy(array('ideleve' => $_GET));

        foreach ($Eleve as $key => $entreprise) {
        $resultEntreprise =  $entreprise->getEntreprise();
            }

        $Entreprise = $entityManager->getRepository("Entreprise")->findBy(array('identreprise' => $resultEntreprise));


        $Participation = $entityManager->getRepository("Participation")->findBy(array('eleve' => $_GET));

        foreach ($Participation as $key => $participation) {
            $resultSession =  $participation->getSession();
        }

        $sessionEleve = $entityManager->getRepository("Session")->findBy(array('idsession' => $resultSession));

        foreach ($sessionEleve as $key => $session) {
            $formation = $session->getFormation();
        }

        $formationEleve = $entityManager->getRepository('Formation')->findBy(array('idformation' => $formation));


        $allSession = $entityManager->getRepository('Session')->findAll();



        ?><section class="eleve">
    <h3>Nom de l'eleve :</h3>
    <ul><?php foreach ($Eleve as $key => $eleve) {
            echo $eleve->getNom();
        }
        ?></ul>
    <h3> Entreprise:</h3>
    <ul><?php foreach ($Entreprise as $key => $entreprise) {
            echo $entreprise->getNom();
        }
        ?></ul>
    <h3> Formation suivi:</h3>
    <ul>
        <?php foreach ($formationEleve as $key => $formation) {
            echo '<li>'. $formation->getNom() . '</li>';
        }
        ?>
    </ul>
</section>

<section>
    <h2>S'inscrire à une session</h2>

    <form method="post">


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


<script>
    var select1 = document.querySelector('#session')

    select1.addEventListener('change')

</script>

<?php

}else{

        echo'<h3>Vous devez choisir un eleve ! </h3>';
        echo '<a href="http://localhost:8888/organisme-formation/templates/show_eleves_list.php">Liste des eleves</a>';
    }


    if ($_POST) {
        $addParticipation = new Participation();
        $addParticipation->setEleve($entityManager->find("\Eleve", $_GET['id']));
        $addParticipation->setSession($entityManager->find("\Session", $_POST['session']));
        $entityManager->persist($addParticipation);
        $entityManager->flush();
    }



?>



