@extends("layout")
@section("title","ToDo List")
@section("content")
    <h2>ToDo List </h2>
    <ul>
    @foreach($todos as $todo) 
        <li>{{$todo}}</li>
    @endforeach
    </ul>

    <a href="/todo/create">Create New ToDo</a>
    
@endsection()