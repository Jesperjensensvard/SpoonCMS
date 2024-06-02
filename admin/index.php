<?php
require_once  __DIR__ . '../../spoon_header.php';
require_once ABSPATH . 'admin/classes/admin-views.php';
//require_once ABSPATH . 'admin/classes/init.php';
$AD_Views = new ADMIN_VIEWS();
$db_status = $AD_Views->CHECK_SETUP();
switch ($db_status) 
{
    case 'DB_exists':
       // todo
        break;
    case 'DB_setup':
            
        break;
    default:
        # code...
        break;
}