<?php
/**
 * Control of path.
 *
 * PHP Version 5.
 *
 * @category Libs
 * @package  EnglishWords 
 * @author   Dawid Poliszak <dawidpoliszak@op.pl>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Dzuming/EnglishWords  
 * 
 */

/**
 * Control of path.
 *
 * PHP Version 5.
 *
 * @category libs
 * @package  EnglishWords 
 * @author   Dawid Poliszak <dawidpoliszak@op.pl>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/Dzuming/EnglishWords  
 * 
 */
class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/')
    {
        $path = $modelPath.$name.'_model.php';

        if (file_exists($path)) {
            require $modelPath.$name.'_model.php';

            $modelName = $name.'_Model';
            $this->model = new $modelName();
        }
    }
}
