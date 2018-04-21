@extends("layout")
@section("title","Category List")
@section("content")
    <h2>>Form Category</h2>
    {{ Form::open(["url"=>"category"])}}
    <!-- <form action="todo" method="POST"> -->
        <!-- <input type="text" name="Title" placeholder="ToDo Title"> -->
      
        {{ Form::text("Description",null,["placeholder"=>"Category Title"])}}
        <br>
    
        <!-- <button type="submit">Save ToDo</button> -->
        {{ Form::submit("Save")}}
    
        <!-- <a href="/todo">Back</a> -->
        {{link_to("/category","Back")}}

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