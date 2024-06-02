<?php
class DB_INIT
{
    protected $db_name = db_name;
    protected $db_pass = db_password;
    protected $db_host = db_host;
    public function  SETUP_SCHEMA()
    {
        $spoon_site_info_table = "CREATE TABLE  (
            domain_adress varchar(60) NOT NULL default '',
            admin_pass varchar(255) NOT NULL default '',
            admin_nicename varchar(50) NOT NULL default '',
            admin_email varchar(100) NOT NULL default '';"
    }
}