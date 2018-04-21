@extends("layout")
@section("title","Input User")
@section("content")
    <h2>>Form Input User</h2>
    {{ Form::open(["url"=>"user"])}}
        <!-- <form action="todo" method="POST"> -->
        <!-- <input type="text" name="Title" placeholder="ToDo Title"> -->
      
        {{ Form::text("User Name",null,["placeholder"=>"User Name"])}}
        <br> <br>
        {{ Form::text("Email",null,["placeholder"=>"Email"])}}
        <br> <br>
        {{ Form::text("Password",null,["placeholder"=>"Passwprd"])}}
        <br> <br>
    
        <!-- <button type="submit">Save ToDo</button> -->
        {{ Form::submit("Save")}}
    
        <!-- <a href="/todo">Back</a> -->
        {{link_to("/user","Back")}}

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