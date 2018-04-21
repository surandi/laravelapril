@extends("layout")
@section("title","Category List")
@section("content")
    <h2>Category List </h2>
    <ul>
    @foreach($categ as $todo) 
        <li>{{$todo}}</li>
    @endforeach
    </ul>

    <a href="/category/create">Create New</a>
    
@endsection()