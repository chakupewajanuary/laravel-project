<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Modern Furniture online Mnagement and Ordering Systems </title> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<style>
    body{
        margin: 0px;
    }
    main{
        margin: 20px;
    }
    h1{
      text-align: center;  
    }
    .navbar ul{
        list-style-type: none;
        background-color: hsl(0, 1%, 27%);
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }
    .navbar a{
        color: white;
        text-decoration: none;
        padding: 15px;
        display: block;
        text-align: center;
    }
    .navbar a:hover{
        background-color: black;
    }
    .navbar li{
        float: left;

    }
</style>
<link rel="stylesheet" href="/build/assets/homepagecss/style.css">
<body>
    <header>
        <h1>Modern Furniture Online Management And Ordering System</h1>
    </header>
    <div>
        <div>
            <nav class="navbar">
                <div>
                    <ul>
                        <div class="nav-1">
                        <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('product')}}">Products</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                        </div>

                        <div class="nav-2">                        
                        <button class="button signup-btn"><a href="{{route('customer')}}">Customer</a></button> 
                        <button class="button login-btn"><a href="{{route('login')}}">Login</a></button> 
                        </div>
                    </ul>
                </div>
            </nav>
    <main style="text-align: center;">
    <h3>This is the products page</h3>
    <p>Responsible for displaying product from the database</p>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if($products->count() > 0)
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            @foreach($products as $product)
                <div style="border: 1px solid #ccc; border-radius: 10px; padding: 10px; width: 250px;">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="100%" height="200">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->Description }}</p>
                    <p><strong>Price:</strong> ${{ $product->Price }}</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    
                   <form action="{{ route('order.now', ['ProductID' => $product->ProductID]) }}" method="GET">
                        <button type="submit" style="background-color: green; color: white; padding: 10px 15px; border: none; border-radius: 5px;">
                            Order Now
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <p>No products available at the moment.</p>
    @endif
</main>

   
    
    
</body>
</html>