<?php

$content = "ici le contenu de ma page listant les livres";
$titre = "Les livres de la bibliothèque";
require "template.php";
?>

<table class="table text-center">
    <tr class="table-dark">
        <th>name</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php foreach($restaurants as $restaurant): ?>
    <tr>
        <td class="align-middle"><?= $restaurant['name']; ?></td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href='/Restaurant/restaurants_delete/<?=  $restaurant['id']; ?>' class="btn btn-danger">Supprimer</a></td>
    </tr>
   <?php endforeach; ?>
</table>
<a href="/Restaurant/restaurants.new.php" class="btn btn-success d-block">Ajouter</a>

