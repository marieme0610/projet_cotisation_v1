<?php
require_once(dirname(__DIR__)."/app/core/SessionManager.php");
startSession();
initializeData();
require_once(dirname(__DIR__)."/app/core/Router.php");
?>