<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Redireciona para o Dashboard de Administradores!
    public function admin()
    {
        return view('dashboards.admin');
    }
 //Redireciona para o Dashboard de Usuarios!
    public function user()
    {
        return view('dashboards.user');
    }

}
