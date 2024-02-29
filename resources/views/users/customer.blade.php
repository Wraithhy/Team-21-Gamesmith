@extends('layouts.app')
@section('content')
<head>
    <title>Users</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-index.css">
</head>

<body>
    <h1>Welcome {{ Auth::user()->name }}</h1>
    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>
                        <a href="{{route('customer.edit', Auth::user()->id)}}">Edit</a>
                    </td>

                </tr>
            
        </table> <br> <br>

        <div class="myorders"> 
            <a href="myorders">My previous orders</a>
        </div>

    </div>
</body>

</html>


@endsection