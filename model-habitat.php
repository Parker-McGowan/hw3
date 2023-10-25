<?php
function selectHabitats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT habitat_id, habitat_name, habitat_type FROM `habitat`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteHabitat($hid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from habitat where habitat_id=?");
        $stmt->bind_param("i", $hid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAnimal($hName, $hType, $hid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `habitat` set `habitat_name` = ?, `habitat_type` = ?, `habitat_id` = ?, `keeper_id` = ? where animal_id = ?");
        $stmt->bind_param("ssiii", $aName, $aSpecies, $aHabitatid, $aKeeperid, $aid);
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
