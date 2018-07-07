<?php

class Application
{
    private static $di = [];
    private $path='';

    /**
     * App constructor.
     */
    public function __construct()
    {
        $errors= new Session();
        set_error_handler(array($this, 'errorHandler'), -1);
        set_exception_handler(array($this, 'exceptionHandler'));
        register_shutdown_function(array($this, 'shutDown'));
        $this->get('session');
    }

    public function run()
    {
        $page = new Page($_GET);
        $page->load();
    }

    /** Write error to log file
     *
     * @param $errorNo
     * @param $errorMessage
     * @param $errorFile
     * @param $errorLine
     */
    public function errorHandler($errorNo, $errorMessage, $errorFile, $errorLine)
    {
        $error = 'Error level: ' . $errorNo . ' Text: ' . $errorMessage . ' in file: ' . $errorFile . ' on line: ' . $errorLine . "\n";
        Application::get('log')->write($error);
    }

    /** Write fatal error to log file and show error page
     */
    public function shutDown()
    {
        if ($error = error_get_last()) {
            Application::get('log')->write($error['message']);
            require($_SERVER['DOCUMENT_ROOT'] . 'view/error.php');
        }
    }

    /** Write exception to log and show error page
     *
     * @param $e
     */
    public function exceptionHandler($e)
    {
        Application::get('log')->write($e->getMessage());
        require($_SERVER['DOCUMENT_ROOT'] . 'view/error.php');
    }

    public static function get($className)
    {
        if (!isset(self::$di[$className])) {
            $class = ucwords($className);
            self::$di[$className] = new $class;
        }
        return self::$di[$className];
    }

    public function isAllowedPage()
    {
        if(!preg_match("~^\w+$~", $this->path)) {
            die("Page id must be alphanumeric");
        }
        if ((!Application::get('session')->isLoggedIn() && $this->path == 'form') || (Application::get('session')->isLoggedIn() && ($this->path == 'login' || $this->path == 'register'))) {
            header('Location: /');
            exit();
        }
    }



}