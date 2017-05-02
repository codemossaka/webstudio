@extends('template')
@section('Test page')
    Welcome
@endsection

@section('container')
    {{--{!! var_dump($pages) !!}--}}
    @foreach($pages as $page)
        {!! print_r($page->title) !!}
    @endforeach

    <div>
        <form action="{{url('pages')}}" method="post">
            {{csrf_field()}}
            <label for="title">Title <input type="text" name="title" id="title" required></label><br>
            <label for="description">Description <input type="text" name="description" id="description" required></label><br>
            <label for="url">Url <input type="url" name="url" id="url" required></label><br>
            <textarea name="content" id="name" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection