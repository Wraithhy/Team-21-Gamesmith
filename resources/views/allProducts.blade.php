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
    <div class="filter_section">
        <label for="category">Select Category:</label>
        <select id="category">
            <option value="all">All Categories</option>
            <option value="headsets">Headsets</option>
            <option value="keyboards">Keyboards</option>
            <option value="controllers">Controllers</option>
            <option value="mouses">Mouses</option>
            <option value="monitors">Monitors</option>
        </select>

        <label for="price">Sort by Price:</label>
        <select id="price">
            <option value="all">Any Price</option>
            <option value="asc">Lowest Price First</option>
            <option value="desc">Highest Price First</option>
        </select>

        <button onclick="applyFilters()">Apply Filters</button>
    </div>
    <div value= headsets>
        <h2 id="HeadsetsJump">Headsets</h2>
        <div class="container_grid">
            @foreach ($products->slice(0, 5) as $item)
                <div class="item {{$item['id']==1?'active':''}}">
                    <a href="/detail/{{$item['id']}}">
                        <p2>{{$item['price']}}</p2>
                        <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                        <div class="products">
                            <h3>{{$item['name']}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div id= keyboards>
    <h2 id="KeyboardsJump">Keyboards</h2>
    <div class="container_grid">
        @foreach ($products->slice(5, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="/detail/{{$item['id']}}">
                    <p2>{{$item['price']}}</p2>
                    <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div id= controllers>
    <h2 id="ControllersJump">Controllers</h2>
    <div class="container_grid">
        @foreach ($products->slice(10, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="/detail/{{$item['id']}}">
                    <p2>{{$item['price']}}</p2>
                    <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div id= mouses>
    <h2 id="MousesJump">Mouses</h2>
    <div class="container_grid">
        @foreach ($products->slice(15, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="/detail/{{$item['id']}}">
                    <p2>{{$item['price']}}</p2>
                    <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
    <div id= monitors>
    <h2 id="MonitorsJump">Monitors</h2>
    <div class="container_grid">
        @foreach ($products->slice(20, 5) as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="/detail/{{$item['id']}}">
                    <p2>{{$item['price']}}</p2>
                    <img class="productSlider" src="images/{{$item->id}}.png" alt="images">
                    <div class="products">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    </div>
<script>
    function applyFilters() {
        const selectedCategory = document.getElementById('category').value;
        const selectedPrice = document.getElementById('price').value;

        document.querySelectorAll('.container_grid').forEach(grid => {
            grid.style.display = 'none';

            if (selectedCategory === 'all' || grid.id.toLowerCase() === selectedCategory) {
                grid.style.display = 'flex';

                const products = Array.from(grid.querySelectorAll('div.item'));
                products.sort((a, b) => {
                    const priceA = parseFloat(a.querySelector('p2').innerText);
                    const priceB = parseFloat(b.querySelector('p2').innerText);
                    return selectedPrice === 'asc' ? priceA - priceB : priceB - priceA;
                });

                products.forEach(product => {
                    grid.appendChild(product);
                });
            }
        });
    }
</script>
</body>
@endsection
