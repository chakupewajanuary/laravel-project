<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Modern Furniture Online Management And Ordering System</title> -->
    <link rel="stylesheet" href="/build/assets/homepagecss/style.css">
</head>
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
                        <button class="button signup-btn"><a href="{{route('customer')}}">register</a></button>
                        <button class="button login-btn"><a href="{{route('login')}}">login</a></button>
                        </div>
                    </ul>
                </div>
            </nav>
    </div>
</div>
    <main>
        <aside class="sidebar">
            <h3>Explore</h3>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </aside>
        <section>
            <div class="hero-section">
                <h2>Modern Furniture for Your Dream Home</h2>
                <p class="lead">Discover a wide range of stylish and high-quality furniture to elevate your living spaces.</p>
                <a href="products.html" class="button primary-btn">Browse Products</a>
            </div>    
            <div class="sect-1">
                <div>
                    <img src="/build/assets/Images/A picture 1.jpg" alt="this is our advertisment image" class="image">
                    <p class="paragraph">
                        Imagine easy, comfy times in this living room. The furniture is soft and looks good, making your home a relaxing place. Find furniture to make your living room your special, calm spot
                    </p>
                </div>
            </div>   
        <div class="sect-2">
            <div>
                <p class="paragraph-2">
                    Think about happy meals and get-togethers with this nice dining set. It looks good and works well for dinners with family and friends. This furniture helps you make good times together.
                </p>
                <img src="/build/assets/Images/A picture 3.jpg" alt="this is our advertisment image" class="image-2">
            </div>
        </div>    
        <div class="sect-3">
            <div>
                <img src="/build/assets/Images/A picture 5.jpeg" alt="this is our advertisment image" class="image-3">
                <p class="paragraph-3">
                    Look at these special furniture pieces that stand out in any room. They have unique designs and are made well, showing your style and making your home look better with a modern and lasting touch.
                </p>
            </div>    
    <div class="sect-4">
        <div>
            <p class="paragraph-4">
                Picture yourself sleeping well in a bedroom that feels calm and looks modern. The furniture is good quality and stylish, so your room is a peaceful place to rest and feel new again
            </p>
            <img src="/build/assets/Images/Bedroom image.jpg" alt="this is our advertisment image" class="image-4">
        </div>
    </div>
</section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Modern Furniture System. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>