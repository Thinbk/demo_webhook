<?php

namespace App\Http\Controllers;

use App\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveData()
    {
        User::create([
            'username' => 'nguyen dang thin',
            'email' => 'demo@gmail.com',
            'password' => 2432423432
        ]);
    }

    public function getdata()
    {
        dd("ddfddfdf");
    }
}
