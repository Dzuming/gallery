<?php
class Index extends Controller
{
    /**
     * It connects proper files from model and view folder
     * It calls Js default file
     * Site is available after login
     */
    public function __construct()
    {
        parent::__construct();
        
        
    }
    /**
     * There are variables important to connection between model and view layer
     * Also here are a view files rendering 
     * 
     * @return wordsList view
     */
    public function index()
    {
        $this->view->title = 'login';
        $this->view->render('header');
        $this->view->render('index/index');
        
       
    }
    public function run()
    {
        $this->model->run();
    }
}