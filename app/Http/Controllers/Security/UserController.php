<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registrar(Request $request){
        //obtenemos los datos enviados por json
        $json = $request->input('json',null);
        $params = json_decode($json);
        die;
    }

    public function login(Request $request){
        echo "Acción login";
        die;
    }
}
