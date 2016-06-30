<?php
// *** Define your host, username, and password
 
// *** Include the class
// *** Create the FTP object

class container_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
    
    
    public function container()
    {

        return $this->db->select("SELECT photo_name, photo_description  
                      FROM photo 
                      ");

        
    }
}
