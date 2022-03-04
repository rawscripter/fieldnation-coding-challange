<?php
// include database connection
require_once 'config/database.php';

// require User Class
require_once 'classes/User.php';

// instantiate User object
global $pdo;
$user = new User($pdo);
