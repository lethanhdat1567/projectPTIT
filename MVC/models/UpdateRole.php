<?php
class UpdateRole extends DB {
    public function UpdateUserRole($userId, $newRoleId) {
        $query = "UPDATE user SET role_id = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ii", $newRoleId, $userId);
        return $stmt->execute();
    }
}
?>
