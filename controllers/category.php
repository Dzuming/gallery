<?php
class category extends Controller
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
        $this->view->js = ['category/js/default.js'];
    }
    /**
     * There are variables important to connection between model and view layer
     * Also here are a view files rendering
     *
     * @return wordsList view
     */
    public function index()
    {
        $this->view->title = 'Photo';
        $this->view->category = $this->model->category();
        
    
        $this->view->render('category/index');
       
        
       
    }
    
}