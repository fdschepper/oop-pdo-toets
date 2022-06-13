<?php 
require '../functions.php';
require '../database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    try {
            $db = new Database();

            $db->query(
                "INSERT INTO `car` (`id`, `merk`, `model`, `topsnelheid`, `prijs`)
                                VALUES (:id,  :merk,  :model,  :topsnelheid,  :prijs)"
            );
        
            $db->bind(':id', NULL, PDO::PARAM_INT);
            $db->bind(':merk', $_POST['Merk'], PDO::PARAM_STR);
            $db->bind(':model', $_POST['Model'], PDO::PARAM_STR);
            $db->bind(':topsnelheid', $_POST['Topsnelheid'], PDO::PARAM_STR);
            $db->bind(':prijs', $_POST['Prijs'], PDO::PARAM_STR);
        
            $db->execute();
            header("Location: ./index.php");
        } catch(PDOException $e) 
        {
            echo "slkdfjsdkl" . $e->getMessage();
        }
}
else{
        echo "HACKER";
    }

?>