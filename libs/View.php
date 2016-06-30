<?php
/**
 * Control of view.
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
 * Control of view.
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
class View
{
    public function __construct()
    {
        //echo 'this is the view';
    }

    public function render($name, $noInclude = false)
    {
        require 'views/'.$name.'.php';
    }
}
