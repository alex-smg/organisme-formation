<?php
include '../header.php';

if ($_POST) {
    $addSalle = new Salle();

    $addSalle->setNumero($_POST['numero']);

    $entityManager->persist($addSalle);
    $entityManager->flush();
}

$addSalles = $entityManager->getRepository('Salle')->findAll();

?>

<section>
    <h1>Liste de tous les salles</h1>
    <ul>
        <?php
        foreach ($addSalles as $key => $salle) {
            echo "<li><a>"
            . $salle->getNumero() . "</a></li>";
        } // href='show_eleve.php?id=" . $eleve->getIdeleve() ."'
        ?>
    </ul>
</section>

<section>
    <h2>Ajouter une salle</h2>
    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="numero" id="numero">

        <input type="submit" value="Enregistrer">
    </form>
</section>