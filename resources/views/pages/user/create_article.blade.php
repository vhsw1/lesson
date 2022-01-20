@extends('pages_layouts.user_layout')

@section('main')
<div class="container">
    <form style="margin-top: 100px;" method="post" action="{{route('create')}}" >
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="exampleInputPassword1"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{csrf_field()}}
    </form>
</div>
@endsection
