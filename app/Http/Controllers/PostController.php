<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request){

        $new_post = [
            'id'=> 1,
            'title' => 'Meu primeiro POST',
            'description' => 'A Criação do meu primeiro POST',
            'user_id' => 1,
        ];

        $post = new Post($new_post);
        $post->save();
    }
}
