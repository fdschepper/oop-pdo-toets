<?php
include "../database.php";
$db = new Database();     

$result = $db->query('SELECT `merk`, `model`, `topsnelheid`, `prijs` FROM `car`');



?>
<table>
  <tr>
    <th>Merk</th>
    <th>Model</th>
    <th>Topsnelheid</th>
    <th>Prijs</th>
  </tr>
  <tr>
        <?php
            foreach($db->resultSet() as $place)
            {
                echo "<td>" . $place->merk . "</td>";
            }      
        ?>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>




<a href="create.php">maak record</a>