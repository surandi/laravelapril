@extends("layout")
@section("title","ToDo List")
@section("content")
    <h2>>Form ToDo</h2>
    {{ Form::open(["url"=>"todo"])}}
    <!-- <form action="todo" method="POST"> -->
        <!-- <input type="text" name="Title" placeholder="ToDo Title"> -->
      
        {{ Form::text("Title",null,["placeholder"=>"ToDo Title"])}}
        <br>
        {{ Form::select("Category",[1=>"Urgent",2=>"Normal",3=>"Slow"],null)}}
        <br>
        <!-- <textarea name="Description"></textarea> -->
        {{ Form::textarea("Description",null)}}
        <br>
        <!-- <button type="submit">Save ToDo</button> -->
        {{ Form::submit("Save ToDo")}}
    
        <!-- <a href="/todo">Back</a> -->
        {{link_to("/TODO","Back")}}

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