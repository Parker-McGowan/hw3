<?php
function selectAnimalByKeeper($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.animal_id, animal_name, species_name,keeper_id FROM `animal` a where a.keeper_id=?");
        $stmt->bind_param("i", $aid);
      $stmt->execute();
      $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
