<?php
include '../header.php';

if ($_GET['id']){
    $allSessions = $entityManager->getRepository('Session')->getSessionByProfesseur($_GET['id']);


?>

<section>
    <h2><?= $allSessions[0]->getProfesseur()->getNom() ?></h2>
    <ul>
    <?php foreach ($allSessions as $key => $session) {
        echo '<li> ID :'. $session->getIdsession() .' Formation : '. $session->getFormation()->getNom() .'</li>';
    }?>
        
    </ul>
</section>
<?php } ?>