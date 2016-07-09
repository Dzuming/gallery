<?php
// *** Define your host, username, and password
 
// *** Include the class
// *** Create the FTP object


class photo_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function ftp()
    {
        $ftp = new ftp;
 
    // *** Connect
        $ftp -> connect(FTP_HOST, FTP_USER, FTP_SPASS);
        print_r($ftpObj -> getMessages());
        $dir = 'public/jpg';
 
    // *** Make directory
        $ftpObj->makeDir($dir);
        $fileFrom = 'zoe.jpg';
        $fileTo = $dir . '/' . $fileFrom;
 
    // *** Upload local file to new directory on server
        $ftpObj -> uploadFile($fileFrom, $fileTo);
    }
    
    
    
    public function photo()
    {

        $stmt = $this->db->prepare("SELECT photo_name, category, photo_description  
                      FROM photo 
                      INNER JOIN category on photo.id_category = category.id_category
                      WHERE category = :category");

        $stmt->bindParam('category', $_GET['category']);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public function all()
    {


        $stmt = $this->db->prepare("SELECT photo_name, category 
                      FROM photo 
                      INNER JOIN category on photo.id_category = category.id_category");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    
    public function category()
    {


        $stmt = $this->db->prepare("SELECT  category, id_category  
                      FROM  category 
                      ORDER BY id_category");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

