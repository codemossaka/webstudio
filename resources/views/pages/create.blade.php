@extends('template')

@section('container')

    <div>
        <form action="{{url('pages')}}" method="post">
            {{csrf_field()}}
            <label for="title">Title <input type="text" name="title" id="title" required></label><br>
            <label for="description">Description <input type="text" name="description" id="description" required></label><br>
            <label for="url">Url <input type="text" name="url" id="url" required></label><br>
            <textarea name="content" id="name" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Create">
        </form>
    </div>

@endsection