@extends("layout")
@section("title","Food List")
@section("content")
    <h2>>Form Food</h2>
    {{ Form::open(["url"=>"food"])}}
    <!-- <form action="todo" method="POST"> -->
        <!-- <input type="text" name="Title" placeholder="ToDo Title"> -->
      
        {{ Form::text("Food Name",null,["placeholder"=>"Food Name"])}}
        <br> <br>
        {{ Form::select("Category",[1=>"Indonesian",2=>"Western",3=>"Japanese"],null)}}
        <br> <br>
        <!-- <button type="submit">Save ToDo</button> -->
        {{ Form::submit("Save Food")}}
    
        <!-- <a href="/todo">Back</a> -->
        {{link_to("/food","Back")}}

    <!-- </form> -->
    {{ Form::close() }}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
@endsection()