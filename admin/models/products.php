<?php
if (!function_exists('lastID')) {
    function lastID($tableName)
    {
        try {
            $sql = "SELECT id FROM $tableName WHERE trangthai = 1 ORDER BY id DESC LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            $result = $stmt->fetch();

            return $result['id'];
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('deleteProduct')) {
    function deleteProduct($tableName, $hh_id)
    {
        try {
            $sql = "UPDATE $tableName SET trangthai = 0 where hh_id = :hh_id";
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":hh_id", $hh_id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('deleteSize')) {
    function deleteSize($tableName, $mau_id)
    {
        try {
            $sql = "UPDATE $tableName SET trangthai = 0 where mau_id = :mau_id";
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":mau_id", $mau_id);

            $stmt->execute();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
