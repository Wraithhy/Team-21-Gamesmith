@extends('layouts.app')
@section('content')
<head>
    <title>Users</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-index.css">
</head>

<body>
    <h1>Welcome {{ Auth::user()->name }}</h1>
    <h1>Users</h1>
    <div>
        <div class="create">
            <a href="/users/create">Create a User</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($users as $user )
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>


@endsection