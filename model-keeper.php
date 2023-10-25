<?php
function selectKeeper() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT keeper_id, first_name, last_name, contact FROM `keeper`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertKeeper($kFirst, $kLast, $kContact) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `keeper` (`first_name`, `last_name`, `contact`) VALUES ('?', '?', '?');");
        $stmt->bind_param("sss", $kFirst, $kLast, $kContact);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteKeeper($kid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from keeper where keeper_id=?");
        $stmt->bind_param("i", $kid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateKeeper($kFirst, $kLast, $kContact, $kid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `keeper` set `first_name` = ?, `last_name` = ?, `contact` = ?, `keeper_id` = ? where keeper_id = ?");
        $stmt->bind_param("sssi", $kFirst, $kLast, $kContact, $kid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
