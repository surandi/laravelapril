@extends("layout")
@section("title","Food List")
@section("content")
    <h2>Food List </h2>
    <ul>
    @foreach($toeat as $todo) 
        <li>{{$todo}}</li>
    @endforeach
    </ul>

    <a href="/food/create">Create New Food</a>
    
@endsection()