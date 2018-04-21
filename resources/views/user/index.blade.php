@extends("layout")
@section("title","Input User")
@section("content")

<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    @foreach($user as $todo) 
                    <tr>
                    <td> {{$todo['name']}} </td>
                    <td> {{$todo['email']}} </td>
                    <td> {{$todo['password']}} </td>
                    </tr>
                    @endforeach
               </table>
               <br>
               <a href="/user/create" class="btn btn-danger">Create New</a>
            </div>
    
@endsection()