<?php
Class ADMIN_VIEWS 
{
    protected $db_name = db_name;
    protected $db_user = db_user;
    protected $db_pass = db_password;
    protected $db_host = db_host;
    protected $db_prefix = db_prefix;

    public function CHECK_SETUP()
    {
        $response = '';
        $conn = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        if ($conn->connect_error) 
        {
            print "Connection failed: " . $conn->connect_error;
            $response = 'DB_conncetion_error';
        }
        else
        {
            print "GOOD FOUDN DB: ";
            $q = "SELECT EXISTS (SELECT * FROM information_schema.tables WHERE table_schema = '" . $this->db_name . "' AND table_name = '" . $this->db_prefix . "_options');";
            $result = mysqli_query($conn, $q);
            // INIT DATABASE SET UP
            if($result->lengths == null)
            {
                print "init DB Setup";
                $response = 'DB_setup';
            }
            else
            {
                print "Has DB Setup";
                $response = 'DB_exists';
            }
        }
        return $response;
    }

}