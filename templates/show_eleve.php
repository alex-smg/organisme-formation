<?php
include '../header.php';

if ($_POST) {
    $addParticipation = new Participation();
    $addParticipation->setEleve($entityManager->find("\Eleve", $_GET['id']));
    $addParticipation->setSession($entityManager->find("\Session", $_POST['session']));
    $entityManager->persist($addParticipation);
    $entityManager->flush();
}



    if (! empty($_GET['id'])) {
        $Eleve = $entityManager->getRepository("Eleve")->findBy(array('ideleve' => $_GET['id']));

        $allSession = $entityManager->getRepository('Session')->findAll();

        ?>
<section class="eleve">
    <div class="flex">
        <h3>Nom de l'eleve :</h3>
        <ul><?= $Eleve[0]->getNom() ?></ul>
        <h3> Entreprise:</h3>
        <ul><?= $Eleve[0]->getEntreprise()->getNom() ?></ul>
    </div>
    <h3> Formation suivi:</h3>
    <ul>
        <?php foreach ($Eleve[0]->getParticipation() as $key => $participation) {
            echo '<li>'. $participation->getSession()->getFormation()->getNom() . '</li>';
        }
        ?>
    </ul>
</section>

<section>


    <form method="post">

        <h2>S'inscrire à une session</h2>
        <div class="form-group">
            <label for="session">Session</label>
            <select name="session" id="session">
                <?php
                    foreach ($allSession as $key => $session) {
                        echo "<option value='" . $session->getIdsession() . "'>"  . $session->getDateDebut()->format('d-m-Y') . " - " . $session->getDateFin()->format('d-m-Y H') . "</option>";
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
?>



