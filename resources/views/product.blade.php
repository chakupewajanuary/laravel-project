<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Modern Furniture online Mnagement and Ordering Systems </title> -->
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
                        <button class="button signup-btn"><a href="{{route('customer')}}">Register</a></button> 
                        <button class="button login-btn"><a href="{{route('login')}}">Login</a></button> 
                        </div>
                    </ul>
                </div>
            </nav>
    <main style="text-align: center;">
        <h3>This is the products page</h3>
        <p> responsible for displaying product from the database </p>
    </main>
    
</body>
</html>