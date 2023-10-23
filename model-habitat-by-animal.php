<?php
function selectHabitatByAnimal($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT h.habitat_id, habitat_name, habitat_type FROM `habitat` h join animal a on a.habitat_id = h.habitat_id WHERE a.animal_id = ?");
        $stmt->blind_param("i", $aid);
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
