<?php 
// Check if it running on a local server
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    return [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => '',
        'username' => 'root',
        'password' => '',
    ];
} else {
    // Check if it is running on the production server
    return [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'hbsresou_main_db',
        'username' => 'hbsresou',
        'password' => 'N8)R*6i6oS7cIy',
    ];
}

