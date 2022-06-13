<?php
include "../database.php";
$db = new Database();     

$result = $db->query('SELECT `merk`, `model`, `topsnelheid`, `prijs` FROM `car`');



?>
<table>
  <tr>
    <td><strong>Merk</strong></td>
        <?php
            foreach($db->resultSet() as $place)
            {
                echo "<td>" . $place->merk . "</td>";
            }      
        ?>
  </tr>
  <tr>
  <td><strong>Model</strong></td>
  <?php
            foreach($db->resultSet() as $place)
            {
                echo "<td>" . $place->model . "</td>";
            }      
        ?>
  </tr>
  <tr>
  <td><strong>Topsnelheid</strong></td>
  <?php
            foreach($db->resultSet() as $place)
            {
                echo "<td>" . $place->topsnelheid . "</td>";
            }      
        ?>
  </tr>
  <tr>
  <td><strong>Prijs</strong></td>
  <?php
            foreach($db->resultSet() as $place)
            {
                echo "<td>" . $place->prijs . "</td>";
            }      
        ?>
  </tr>
</table>




<a href="create.php">maak record</a>