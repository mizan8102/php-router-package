<?php
namespace Mizan\PhpRouter;

use Closure;

class Router{
    public static function handle($method= 'GET', $path='/', $filename=''){
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUrI = $_SERVER['REQUEST_URI'];

        if($currentMethod != $method){
            return false;
        }

        $root= "";
        $pattern ='#^'.$root.$path.'$#siD';

        if(preg_match($pattern,$currentUrI)){
            if($filename instanceof Closure){
                $filename();
            }else{
                require_once $filename;
            }
            exit();
        }
        return false;
        
    }

    public static function get($path='/', $filename= ''){
        return self::handle('GET',$path, $filename);
    }
}