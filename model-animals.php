<?php
function selectAnimal() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT animal_id, animal_name, species_name, habitat_id, keeper_id FROM `animal`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAnimal($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from animal where animal_id=?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAnimal($aName, $aSpecies, $aHabitatid, $aKeeperid, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `animal` set `animal_name` = ?, `species_name` = ?, `habitat_id` = ?, `keeper_id` = ? where animal_id = ?");
        $stmt->bind_param("ssiii", $aName, $aSpecies, $aHabitatid, $aKeeperid, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAnimal($aName, $aSpecies, $aHabitatid, $aKeeperid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `animal` (`animal_name`, `species_name`, `habitat_id`, `keeper_id`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $aName, $aSpecies, $aHabitatid, $aKeeperid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
