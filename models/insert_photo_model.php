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
        
        $this->db->insert(
            'photo',
            [
            'photo_name' => $data['photo_name'],
            'id_category' => $data['id_category'],
            'photo_description' => $data['photo_description'],
            'created_at' => $data['date'],
            'updated_at' => $data['date']
            ]);
    }
}
