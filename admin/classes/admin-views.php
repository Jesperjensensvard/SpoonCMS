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
        $conn = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        if ($conn->connect_error) {
            print "Connection failed: " . $conn->connect_error;
        }
        else
        {
            print "GOOD FOUDN DB: ";
            $sql = "SELECT EXISTS ( SELECT * FROM information_schema.tables WHERE table_schema = `"+$this->db_name+"` AND table_name = `"+$this->db_prefix+"_options`);";
            $result = mysqli_query($conn, $sql);
            var_dump(  $result);
        }
    }

}