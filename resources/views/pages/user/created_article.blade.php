@extends('pages_layouts.user_layout')

@section('main')
    <div class="container">
        <h2 style="margin: 100px 20px 40px;">{{$data->title}}</h2>
        <p style="margin-bottom: 40px;">{{$data->content}}</p>
        <div style="display: flex; justify-content: space-between; margin: 0 300px 100px 0;">
            <p>Likes:{{$data->likes}}</p>
            <p>Dislikes:{{$data->dislikes}}</p>
        </div>
    </div>
@endsection
