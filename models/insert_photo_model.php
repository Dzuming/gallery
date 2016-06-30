<?php
// *** Define your host, username, and password
 
// *** Include the class
// *** Create the FTP object

class insert_photo_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function ftp_connect()
    {
        $this->ftp =  new ftp;
        $conn_id =  $this->ftp -> connect(FTP_HOST, FTP_USER, FTP_PASS);
        
        if ($this->ftp -> connect(FTP_HOST, FTP_USER, FTP_PASS)) {
    // *** Then add FTP code here
 
            echo 'connected';
 
        } else {
            echo 'Failed to connect';
        }
        $dir = 'public/photo';
        

        $fileFrom = basename($_FILES['photo_name']['name']);
        $local_file = $_FILES['photo_name']['tmp_name'];
        print_r($local_file);
        $fileTo = $dir . '/' . $fileFrom;
        
// *** Upload local file to new directory on server
        $this->ftp -> uploadFile($local_file, $fileTo);
        
    }
    public function category()
    {


         return $this->db->select('SELECT  category, id_category  
                      FROM  category 
                      ORDER BY id_category');
        
    }
    public function insert($data)
    {
    
        $stmt = $this->db->prepare("INSERT INTO photo(photo_name, id_category, photo_description) 
                      VALUES (:photo_name, :id_category, :photo_description)");
                                              
        $stmt->bindParam(':photo_name', $data['photo_name'], PDO::PARAM_STR);
        $stmt->bindParam(':id_category', $data['id_category'], PDO::PARAM_STR);
        $stmt->bindParam(':photo_description', $data['photo_description'], PDO::PARAM_STR);
        $stmt->execute();

    }
}
