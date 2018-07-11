<?php
/**
 * Created by PhpStorm.
 * User: olexs
 * Date: 03.07.2018
 * Time: 14:05
 */

class Connect
{
    const CONFIG_FILE = 'var/config.ini';

    private static $pdo;

    public $database;

    public function __construct()
    {
        Connect::run();
        $this->database = self::$pdo;
    }

    public static function run()
    {
        if (null === static::$pdo) {
            try {
                if (file_exists(self::CONFIG_FILE)) {
                    $config = parse_ini_file(self::CONFIG_FILE);
                    static::$pdo = new PDO(
                        $config['engine'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass']);
                } else {
                    throw new Exception('Config file is not exist');
                }
            } catch (PDOException $exception) {
                Application::get('log')->write($exception->getMessage());
                echo 'Could not connect to DB';
                exit;
            } catch (Exception $exception) {
                Application::get('log')->write($exception->getMessage());
                echo 'Could not connect to DB';
                exit;
            }
        }
        return static::$pdo;
    }

    public  function request($sql, $params = [])
    {
        $query = $this->database->prepare($sql);
        $result = $query->execute($params);
        if ($result === false) {
            error_log($query->errorInfo()[2], 3, $_SERVER['DOCUMENT_ROOT'] . Log::LOG_FILE);
            return false;
        }
        return $query;
    }

}