@extends('template')
@section('Test page')
    Welcome
@endsection

@section('container')
    <table>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{$page->id}}</td>
                <td>
                    <a href="{{url('pages/'.$page->url)}}">{{$page->title}}</a>
                </td>
                <td>{{$page->description}}</td>
                <td>{{$page->content}}</td>
                <td><a href="{{url('pages/'.$page->id)}}">Delete</a>/ <a href="{{url('pages/'.$page->id.'/edit')}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection