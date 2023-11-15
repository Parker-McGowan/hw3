<?php
function selectAnimal() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT species_name, count(animal_id) as num_animals FROM `animal` group by species_name");
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
