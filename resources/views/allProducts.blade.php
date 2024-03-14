@extends("layouts.app")
@section("content")
<head>
    <link rel="stylesheet" href="css/allProducts.css">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">
</head>
<body>
    <div class="headerbox">
        <div class="title">
            <h1>View our Products!</h1>
            <p1>Look through our high and medium end gaming products made for all systems!</p1>
        </div>
    </div>
    <a id="#HeadsetJump"><h2>Headsets</h2></a>
    <div class="container_grid">
        @foreach ($products->slice(0, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a id="#KeyboardsJump"><h4>Keyboards</h4></a>
    <div class="container_grid">
        @foreach ($products->slice(5, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a id="#ControllersJump"><h4>Controllers</h4></a>
    <div class="container_grid">
        @foreach ($products->slice(10, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a id="#MiceJump"><h4>Mouses</h4></a>
    <div class="container_grid">
        @foreach ($products->slice(15, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a id="#MonitorJump"><h4>Monitors</h4></a>
    <div class="container_grid">
        @foreach ($products->slice(20, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</body>
@endsection