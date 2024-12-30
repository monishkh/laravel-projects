<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Crud</title>
</head>
<body>

        <div>
            @if(session()->has('success'))
                <h1>
                    {{session('success')}}
                </h1>
            @endif
        </div>
    
        <h1>List OF All Users</h1>
        <h1>Users Table</h1>
        <a href="{{ route('User.CreateUser') }}" class="btn">
                Create User
        </a>

        <table style="border: 2px solid black;">
        
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
            </tr>
       
            @foreach($users as $user) 

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <a href="{{route('User.Edit', ['user' => $user ])}}" >Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('User.Delete', ['user' => $user])}}">
                        @csrf 
                        @method("delete")
                        <input type="submit" value="Delete" /> 
                    </form>
                </td>
            </tr>

            @endforeach
           
        
    </table>
    
</body>
</html>