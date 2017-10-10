<?php
// In src/Error/AppError.php
/*
namespace App\Error;

use Cake\Error\BaseErrorHandler;

class AppError extends BaseErrorHandler
{
    public function _displayError($error, $debug)
    {
        echo 'There has been an error!';
    }
    public function _displayException($exception)
    {
        echo 'There has been an exception!';
    }
}
*/
/*
namespace App\Error;

use Cake\Error\BaseErrorHandler;

class AppError extends BaseErrorHandler
{
    // Other methods.

    public function _displayError($error, $debug)
    {
        return 'There has been an error!';
    }
    public function _displayException($exception)
    {
    	echo "2";  exit;
        return 'There has been an exception!';
    }

    public function handleFatalError($code, $description, $file, $line)
    {
    	echo "3";  exit;
        return 'A fatal error has happened';
    }
}*/

// Custom Handler - goes in src/Error/AppError.php
namespace App\Error;

use Cake\Routing\Exception\MissingControllerException;
use Cake\Error\ErrorHandler;

class AppError extends ErrorHandler
{
    public function _displayException($exception)
    {
        if ($exception instanceof MissingControllerException) {
            echo "1"; exit;
            // Here handle MissingControllerException by yourself
        } else {
            parent::_displayException($exception);
        }
    }
}