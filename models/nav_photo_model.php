<?php
// *** Define your host, username, and password
 
// *** Include the class
// *** Create the FTP object

class nav_photo_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
     
    public function navPhoto()
    {

        return $this->db->select("SELECT photo_name, category, photo_description  
                      FROM photo 
                      INNER JOIN category on photo.id_category = category.id_category
                      WHERE category = :category", [':category' => $_GET['category']]);
    }

}
