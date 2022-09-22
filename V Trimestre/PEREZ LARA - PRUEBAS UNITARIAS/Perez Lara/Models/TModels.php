<?php

namespace Traits;

use Core\Connection;
use PDO;

trait TModels
{
    private PDO $connection;
    public function __construct(){
        $this -> connection = (new Connection()) -> connect();
        if (method_exists($this, $func = '__construct' . func_num_args())){
            call_user_func_array(array($this, $func), func_get_args());
        }
    }
}