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
        $stmt = $conn->prepare("update `habitat` set `habitat_name` = ?, `habitat_type` = ?, where habitat_id = ?");
        $stmt->bind_param("ssiii", $hName, $hType, $hid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAnimal($hName, $hType) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `habitat` (`habitat_name`, `habitat_type`) VALUES (?, ?,)");
        $stmt->bind_param("ssii", $hName, $hType);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
