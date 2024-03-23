@include('layouts.app')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a Product</title>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/edit.css') }}">

</head>
<body>

    <h1>Edit a Product</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form class="editProductForm" method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input class="edit-n-input" type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Price</label>
            <input class="edit-p-input" type="text" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input class="edit-desc-input" type="text" name="description" placeholder="Description" value="{{$product->description}}" />
        </div>
        <div>
            <input class="edit-sbmt-input" type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
