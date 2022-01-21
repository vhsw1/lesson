<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function showArticle() {
        return view('pages.user.created_article', ['data' => Article::latest()->first()]);
    }

}
