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
?>
