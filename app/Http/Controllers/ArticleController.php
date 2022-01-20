<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function show() {
        return view('pages.both.article');
    }

    public function showCreate() {
        return view('pages.user.create_article');
    }

    public function store(Request $request) {
        $data = $request->post();
        dump($data);
        $validator = validator($data, [
            'title' => 'required',
            'content' => 'required'
        ]);
        if($validator->fails()) {
            dump($validator->errors());
        } else {
            Article::create($data);
        }
    }

}
