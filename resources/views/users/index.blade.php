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
            <a href="user.create">Create a Product</a>
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
                        <a href="{{ route('user.edit', ['users' => $user]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="#">
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