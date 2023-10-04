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
?>
