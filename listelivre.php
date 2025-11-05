<?php
//appel de service
$xml=file_get_contents("http://troisa.tn/service/books.php");
//afficher
$livres= new simplexmlElement($xml);
//var_dump($livres);
?>
<table>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Prix</th>
        <th>Key words</th>
    </tr>
    <?php
    foreach($livres->livre as $l)
    {
        ?>
        <tr>
            <td><?=$l->titre?></td>
            <td><?=$l->auteur?></td>
            <td><?=$l->prix?></td>
            
        </tr>

    <?php }?>
    Bonjour
</table>