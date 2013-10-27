<?php
    require_once '../Model/SessionManager.php';
    SessionManager::setUser(NULL);
    header("location: ../");
?>

