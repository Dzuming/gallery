<?php


class Database extends PDO
{
    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);

        //parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);
    }
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();

        return $sth->fetchAll($fetchMode);
    }
    public function selectLogin($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();

        return $sth->fetchAll($fetchMode);
    }
    public function insertPhoto($photo_name, $id_category, $photo_description)
    {
        $stmt = $this->db->prepare("INSERT INTO photo(photo_name, id_category, photo_description) 
                      VALUES (:photo_name, :id_category, :photo_description)");
                                              
        $stmt->bindParam(':photo_name', $data['photo_name'], PDO::PARAM_STR);
        $stmt->bindParam(':id_category', $data['id_category'], PDO::PARAM_STR);
        $stmt->bindParam(':photo_description', $data['photo_description'], PDO::PARAM_STR);
        $stmt->execute();
    }
}