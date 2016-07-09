<?php
class insert_photo extends Controller
{
    /**
     * It connects proper files from model and view folder
     * It calls Js default file
     * Site is available after login
     */
    public function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = ['insert_photo/js/default.js'];
    }
    /**
     * There are variables important to connection between model and view layer
     * Also here are a view files rendering
     *
     * @return wordsList view
     */
    public function index()
    {
        $this->view->title = 'insert_Photo';
        $this->view->category = $this->model->category();
         
        $this->view->render('header');
        $this->view->render('insert_photo/index');
         
        
       
    }
    public function insert()
    {
        $data = array();
        $data['photo_name'] = basename($_FILES['photo_name']['name']);
        $data['id_category'] = $_POST['id_category'];
        $data['photo_description'] = $_POST['photo_description'];
        $data['date'] = date('Y-m-d');
        $this->model->insert($data);
        $this->model->ftp_connect();
        header('location: '.URL.'insert_photo');
    }
}
