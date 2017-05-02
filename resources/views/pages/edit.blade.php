@extends('template')

@section('container')

    <div>
        <form action="{{url('pages/'.$page->id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="patch"   >
            <label for="title">Title <input type="text" name="title" id="title" value="{{$page->title}}" required></label><br>
            <label for="description">Description <input type="text" name="description" id="description" value="{{$page->description}}" required></label><br>
            <label for="url">Url <input type="text" name="url" id="url" value="{{$page->url}}" required></label><br>
            <textarea name="content" id="name" cols="30" rows="10">{{$page->content}}</textarea><br>
            <input type="submit" value="Edit">
        </form>
    </div>

@endsection