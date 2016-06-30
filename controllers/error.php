<?php
/**
 * Send information from error_model to view.
 *
 * PHP Version 5.
 *
 * @category Controller
 * @package  EnglishWords 
 * @author   Dawid Poliszak <dawidpoliszak@op.pl>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Dzuming/EnglishWords  
 * 
 */

/**
 * Send information from error_model to view.
 *
 * PHP Version 5.
 *
 * @category Controller
 * @package  EnglishWords 
 * @author   Dawid Poliszak <dawidpoliszak@op.pl>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Dzuming/EnglishWords  
 * 
 */
class Error extends Controller
{
    /**
     * It connects proper files from model and view folder
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * There are variables important to connection between model and view layer
     * Also here are a view files rendering 
     *
     * @return error information if url is wrong
     */
    public function index()
    {
        $this->view->title = '404 Error';
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('header');
        $this->view->render('error/index');
    }
}
