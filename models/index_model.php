<?php
class Index_model extends Model
{
    public function __construct()
 {
        parent::__construct();
    }
    public function run()
    {

        $stmt = $this->db->prepare("SELECT userid, role
                      FROM   user 
                      WHERE  login = :login 
                      AND    password = :password");
        $salt = "Dawid";
        $stmt->execute(
            [
            ':login' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], $salt)
            ]
        );
        $data = $stmt->fetch();
        $count = $stmt->rowCount();

        if ($count > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            header('location:   '. URL .'photo');
        }



    }
}
