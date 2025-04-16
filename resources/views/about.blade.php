<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Modern Furniture online Mnagement and Ordering Systems </title> -->
</head>
<style>
    body {
        margin: 0px;
    }

    /* body h1{
        background-image: url(Images/A\ picture\ 6.jpeg);
        height: 20px;
    } */

    main {
        margin: 20px;
    }

    h1 {
        text-align: center;
    }

    .navbar ul {
        list-style-type: none;
        background-color: hsl(0, 1%, 27%);
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 15px;
        display: block;
        text-align: center;
    }

    .navbar a:hover {
        background-color: black;
    }

    .navbar li {
        float: left;

    }



    .card {
        /* float: left; */
        display: flex;
    }

    /* .card-3{
            background-color: black;
            color: white;
        } */
    dt {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 2em;

    }

    .card-1 {
        width: 33%;
    }

    .card-2 {
        width: 33%;
    }

    .card-2 {
        width: 33%;
    }

    dd {
        font-size: 1.5em;
    }

    /* .navbar-nav{
            display: flex;
          
         } */
    ol {
        display: flex;
        list-style: none;
    }

    .cart-1 {
        /* margin-left: 0px; */
        background-color: aqua;
        width: 50%;
        height: 70px;

    }

    .cart-2 {
        /* margin-left: 0px; */
        background-color: gray;
        width: 50%;
        height: 70px;
        /* margin-left: 12px; */

    }

    /* li{
            display: inline;
          }
          a{
            padding-left: 30px;
            text-decoration: none;
            font-size: 2em;
          } */
    .cart-3 {
        /* margin-left: 0px; */
        margin-right: 0px;
    }

    .cont {
        display: flex;
        margin-top: 20px;
    }

    .cont-1 {
        width: 33%;
        padding-left: 20px;
    }

    .footer {
        margin-top: 200px;
        text-align: center;
    }

    /* a:hover{
            background-color: blue;
            color: yellow;
          } */

    .navbar ul {
        background-color: hsl(0, 0%, 15%);
        list-style-type: none;
        padding: 0px;
        margin: 5px;
        overflow: hidden;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 15px;
        display: block;
        text-align: center;
    }

    .navbar li {
        float: left;
    }

    .navbar a:hover {
        background-color: rgb(125, 141, 161);
    }

    .nav-2 {
        float: right;
    }
</style>
<link rel="stylesheet" href="/build/assets/homepagecss/style.css">

<body>
    <div style="height: 200px; background-image: url('/build/assets/Images/A picture 6.jpeg'); padding-top: 20px; color: white;">
        <!-- <h1>Modern Furniture Online Management And Ordering System</h1> -->
    </div>
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
                        <button class="button signup-btn"><a href="{{route('register')}}">Register</a></button> 
                        <button class="button login-btn"><a href="{{route('login')}}">Login</a></button> 
                        <!-- <li><a href="{{route('login')}}"><button class="button login-btn">Login</button></a></li> -->
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
        <main>
            <div class="card">
                <div class="card-1">
                    <dl>
                        <!-- inline styling -->
                        <dt>vission</dt>
                        <dd>To become a reliable or credible company, known for better furniture products. We conceive
                            future in
                            which our company provides good services which bring people together and enhance celebration
                            in
                            the community.</dd>
                    </dl>

                </div>
                <div class="card-2">
                    <dl>
                        <dt>mission</dt>
                        <dd>To deliver extraordinary furniture services that will merge high quality, reliable and also
                            personalized experiences <br> for place decorations.</dd>
                    </dl>

                </div>
                <div class="card-3">
                    <dl>
                        <dt>core values</dt>
                        <dd>High quality ingredients, reliable furniture. <br>We provide many furniture type for home
                            and offices. <Br>We value punctuality, consistency and trust. We have strong team
                            work which <br> include high colaboration that shares a passion for great and marvellous
                            services.</dd>
                    </dl>

                </div>
            </div>

            <div class="footer">
                <footer>
                    <p>&copy; 2025 Modern Furniture System. All rights reserved.</p>
                </footer>
            </div>
        </main>

</body>

</html>