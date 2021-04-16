<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveData()
    {
        Post::create([
            'username' => 'deo tin dc nhe anh em',
            'email' => 'deo tin dc thang nao ca',
            'lastName' => 'thank you'
        ]);
    }

    public function getdata($id)
    {
        $post = Post::where('id', $id)->first();
        return response()->json([
            'data' => $post
        ]);
    }

    public function putdata(Request $request)
    {
        foreach($request->all() as $row) {
            Post::updateOrCreate(
                [
                    'id' => $row['id'] ?? null
                ],
                [
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'lastName' => $row['lastName']
                ]
            );
        }
    }
}
