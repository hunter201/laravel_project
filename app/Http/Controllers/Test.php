<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class Test extends Controller {

    public function sum($param1, $param2) {
        return $param1 + $param2;
    }
}


?>