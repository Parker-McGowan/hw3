<?php
function selectAnimals() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT animal_id, animal_name, species_name FROM `animal`");
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
