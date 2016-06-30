<?php
// *** Define your host, username, and password
 
// *** Include the class
// *** Create the FTP object

class category_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function category()
    {


        return $this->db->select("SELECT  category, id_category  
                      FROM  category 
                      ORDER BY id_category");
        
    }
}