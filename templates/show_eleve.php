<?php
include '../header.php';

if ($_GET['id']) {
    $student = $entityManager->find("\Eleve", $_GET['id']);
?>
<section>
    <h1>Nom de l'eleve : <?= $student->getPrenom() . " " . $student->getNom()?></h1>
    <ul>
<?php

?>
    </ul>
</section>

<?php } ?>