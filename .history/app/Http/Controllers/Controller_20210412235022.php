<?php

namespace App\Http\Controllers;

use App\Post;
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
        Post::create([
            'username' => 'nguyen dang thin',
            'email' => 'demo@gmail.com',
            'lastName' => 'thank you'
        ]);
    }

    public function getdata()
    {
        dd("ddfddfdf");
    }
}
