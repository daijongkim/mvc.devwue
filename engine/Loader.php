<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오후 12:34
 */
class Loader
{
    private static $files = array();

    public function __construct($paths=array()) {
        self::setLoader();
        self::setPath(array(
             ENGINE_ROOT
            ,APP_ROOT
        ));

    }

    public static function getLoadedFiles() {
        return self::$files;
    }
    public static function setFiles($files) {
        self::$files = $files;
    }
    public static function setLoader() {
        spl_autoload_register('Loader::autoLoader');
    }

    public static function setPath($paths) {
        $inc_paths = get_include_path();
        if( is_array($paths) )
        {
            foreach($paths as $path)
                $inc_paths = self::addIncludePath($path, $inc_paths);
        }
        else
            $inc_paths = self::addIncludePath($paths, $inc_paths);
        set_include_path($inc_paths);
    }

    protected static function addIncludePath($path, $inc_path) {
        if( file_exists($path) && $dh = opendir($path) )
        {
            $inc_path = $inc_path.PATH_SEPARATOR.$path;
            while($dir = readdir($dh))
            {
                if( ! preg_match('#^(\.)+#', $dir) && is_dir($path.DS.$dir))
                    $inc_path = self::addIncludePath($path.DS.$dir, $inc_path);
            }
        }
        return $inc_path;
    }

    public static function autoLoader($class) {
        $paths = explode(PATH_SEPARATOR, get_include_path());
        foreach($paths as $path)
        {
            $service = $path . DS . $class;
            if ( !in_array($service, self::$files) && file_exists($service . '.php'))
            {
                array_push(self::$files, $service);
                require_once $service.'.php';
            }

        }
    }

}