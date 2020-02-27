<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function incidencias(){

        $incidencias = DB::table('incidencias')->get();

        return view('incidencias', [
            'incidencias' => $incidencias
        ]);
    }
}
